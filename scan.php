<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = $_POST['url'];
    $output = shell_exec("nikto -h $url");
    echo "<pre>$output</pre>";
} else {
    echo "Invalid request method.";
}
?>
