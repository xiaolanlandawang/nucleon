<?php
/**
 * MySQL 5.7 兼容导出脚本
 * 自动将数据库导出为 MySQL 5.7 可导入的 SQL 文件
 */

set_time_limit(300);
ini_set('memory_limit', '512M');

$host     = '127.0.0.1';
$port     = '3306';
$dbname   = 'nucleon';
$user     = 'root';
$pass     = '';
$charset  = 'utf8mb4';
$output   = __DIR__ . '/nucleon_mysql57.sql';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=$charset", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES utf8mb4");
} catch (PDOException $e) {
    die("连接失败: " . $e->getMessage());
}

$sql = '';

// 文件头
$sql .= "-- MySQL 5.7 兼容版本导出\n";
$sql .= "-- 数据库: `$dbname`\n";
$sql .= "-- 导出时间: " . date('Y-m-d H:i:s') . "\n\n";
$sql .= "SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";\n";
$sql .= "SET AUTOCOMMIT = 0;\n";
$sql .= "START TRANSACTION;\n";
$sql .= "SET time_zone = \"+00:00\";\n\n";
$sql .= "/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;\n";
$sql .= "/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;\n";
$sql .= "/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;\n";
$sql .= "/*!40101 SET NAMES utf8mb4 */;\n\n";

// 创建数据库
$sql .= "-- --------------------------------------------------------\n\n";
$sql .= "CREATE DATABASE IF NOT EXISTS `$dbname` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;\n";
$sql .= "USE `$dbname`;\n\n";

// 获取所有表
$tables = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);

echo "<pre>";
echo "开始导出数据库 <b>$dbname</b>，共 " . count($tables) . " 张表...\n\n";

foreach ($tables as $table) {
    echo "导出表: $table ... ";
    flush();

    // 获取建表语句
    $createRow = $pdo->query("SHOW CREATE TABLE `$table`")->fetch(PDO::FETCH_ASSOC);
    $createSql = $createRow['Create Table'];

    // ========== MySQL 5.7 兼容性修复 ==========
    // 1. 替换 utf8mb4_0900_ai_ci -> utf8mb4_general_ci
    $createSql = str_replace('utf8mb4_0900_ai_ci', 'utf8mb4_general_ci', $createSql);
    // 2. 替换 utf8_0900_ai_ci -> utf8_general_ci
    $createSql = str_replace('utf8_0900_ai_ci', 'utf8_general_ci', $createSql);
    // 3. 移除 MySQL 8.0 专用的 INVISIBLE 关键字
    $createSql = str_replace(' /*!80023 INVISIBLE*/', '', $createSql);
    // 4. 移除 MySQL 8.0 的 VISIBLE 关键字
    $createSql = preg_replace('/\s+VISIBLE/', '', $createSql);
    // 5. 移除 ENGINE 后面的 ENCRYPTION 选项
    $createSql = preg_replace('/\s*\/\*!80016[^*]*\*\//', '', $createSql);

    $sql .= "-- --------------------------------------------------------\n";
    $sql .= "-- 表结构: `$table`\n";
    $sql .= "-- --------------------------------------------------------\n\n";
    $sql .= "DROP TABLE IF EXISTS `$table`;\n";
    $sql .= $createSql . ";\n\n";

    // 导出数据
    $rows = $pdo->query("SELECT * FROM `$table`")->fetchAll(PDO::FETCH_ASSOC);
    if (!empty($rows)) {
        $sql .= "-- 数据: `$table`\n";
        
        // 分批插入，每次 100 行
        $chunks = array_chunk($rows, 100);
        foreach ($chunks as $chunk) {
            $columns = array_keys($chunk[0]);
            $colList = '`' . implode('`, `', $columns) . '`';
            $sql .= "INSERT INTO `$table` ($colList) VALUES\n";
            
            $rowValues = [];
            foreach ($chunk as $row) {
                $values = [];
                foreach ($row as $val) {
                    if ($val === null) {
                        $values[] = 'NULL';
                    } else {
                        $values[] = "'" . addslashes($val) . "'";
                    }
                }
                $rowValues[] = '(' . implode(', ', $values) . ')';
            }
            $sql .= implode(",\n", $rowValues) . ";\n";
        }
        $sql .= "\n";
    }

    echo "✓ (" . count($rows) . " 行)\n";
    flush();
}

// 文件尾
$sql .= "COMMIT;\n\n";
$sql .= "/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;\n";
$sql .= "/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;\n";
$sql .= "/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;\n";

// 写入文件
file_put_contents($output, $sql);
$size = round(filesize($output) / 1024, 1);

echo "\n<b>✅ 导出完成！</b>\n";
echo "文件保存至: <b>$output</b>\n";
echo "文件大小: <b>{$size} KB</b>\n\n";
echo "请将 <b>nucleon_mysql57.sql</b> 导入到 MySQL 5.7 服务器。\n";
echo "</pre>";

// 提供下载链接
echo "<br><a href='/nucleon_mysql57.sql' download style='font-size:18px;padding:10px 20px;background:#4CAF50;color:white;text-decoration:none;border-radius:5px;'>⬇️ 下载 nucleon_mysql57.sql</a>";
