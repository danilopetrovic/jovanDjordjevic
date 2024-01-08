<?php
// Takes command signal from selected link and makes changes from another link if the signal is true or not if the signal is false
$urlUpdateCheck = 'https://danilo86petrovic.000webhostapp.com/jovanDjordjevic/updateCheck.txt';
$fileContentUpdateCheck = file_get_contents($urlUpdateCheck);
//echo 'Update check is set to <b>' . $fileContentUpdateCheck . '</b><br>';
if ($fileContentUpdateCheck == 1) {
    $url = 'https://danilo86petrovic.000webhostapp.com/jovanDjordjevic/update.txt';
    $fileContent = file_get_contents($url);
    if ($fileContent !== false) {
        $localFilePath = 'update.php';
        file_put_contents($localFilePath, $fileContent);
//        echo 'Succeed!<br>';
    } else {
//        echo 'Failed!<br>';
    }
}