<?php
$logFile = 'C:\Users\19838\.gemini\antigravity\brain\3921a433-7887-4574-817b-01e494bcd9af\.system_generated\logs\transcript.jsonl';
if (!file_exists($logFile)) {
    die("Log file not found");
}

$handle = fopen($logFile, 'r');
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        if (strpos($line, '现在我要添加站点地图') !== false) {
            $data = json_decode($line, true);
            if (isset($data['content'])) {
                echo "--- FOUND MATCH IN CONTENT ---\n";
                echo $data['content'];
                echo "\n------------------------------\n";
            }
        }
    }
    fclose($handle);
} else {
    echo "Could not open log file";
}

