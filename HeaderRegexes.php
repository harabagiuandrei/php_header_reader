<?php

class HeaderRegexes {
    // Define regex patterns for various headers
    public static $patterns = [
        'Content-Type' => '/^(text\/.*|application\/.*)$/',
        'User-Agent' => '/(Chrome|Firefox|Safari|PostmanRuntime\/7.43.0)/',
        'Content-Length' => '/^\d+$/'
    ];
    
    public static function match($headerName, $headerValue) {
        if (isset(self::$patterns[$headerName])) {
            if (preg_match(self::$patterns[$headerName], $headerValue)) {
                print_r("match found for patterns/headername " . self::$patterns[$headerName] . " with value " . $headerValue);
                return true;  // Match found
            }
        }
        return false;  // No match
    }
}

// Example usage in HeadersManager:
// foreach ($headers as $name => $value) {
//     if (HeaderRegexes::match($name, $value)) {
//         $manager->addHeader($name, $value);
//     }
// }