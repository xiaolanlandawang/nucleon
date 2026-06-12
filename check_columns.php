<?php
$dsn = 'mysql:host=127.0.0.1;dbname=nucleon;charset=utf8mb4';
$user = 'root';
$pass = '';

$pdo = new PDO($dsn, $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Insert news listing route: portal/index/news => /news.html
$pdo->exec("INSERT INTO cmf_route (list_order, status, type, full_url, url) VALUES (2, 1, 2, 'portal/index/news', 'news')");
echo "Route inserted: portal/index/news => /news\n";

// Verify
$stmt = $pdo->query("SELECT * FROM cmf_route WHERE full_url = 'portal/index/news'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($row);










