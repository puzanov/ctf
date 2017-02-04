<?php
$lines = explode("\n", file_get_contents("logo.txt"));
foreach ($lines as $line) {
    echo str_replace(array("@", "+", "'", ";", ".", "+", "#", ":", ",", " ", "`"), "", trim($line));
}