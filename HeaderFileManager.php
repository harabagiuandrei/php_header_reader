<?php

class HeaderFileManager {
    public static function writeHeaderToFile($headerName, $headerValue) {
        $filePath = __DIR__ . "/headers/{$headerName}.txt";
        file_put_contents($filePath, $headerValue);
    }

    public static function readHeaderFromFile($headerName) {
        $filePath = __DIR__ . "/headers/{$headerName}.txt";
        if (file_exists($filePath)) {
            return file_get_contents($filePath);
        }
        return null;
    }
}