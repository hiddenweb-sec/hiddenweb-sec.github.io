<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['target'])) {
    $target = $_GET['target'];
    $output = shell_exec("nikto -h " . escapeshellarg($target));
    echo $output;
}
?>
