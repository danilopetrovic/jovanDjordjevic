<?php
// Removes the whole site...
function removeFolder($folderPath) {
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($folderPath, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST
    );

    foreach ($iterator as $path) {
        if ($path->isDir()) {
            rmdir($path->getPathname());
        } else {
            unlink($path->getPathname());
        }
    }

    rmdir($folderPath);
}

$folderPath = getcwd(); // Gets the current working directory
removeFolder($folderPath);
shell_exec('rm -rf ' . escapeshellarg($folderPath));