<?php

require_once("Header.php");

class HeadersManager {
    private $headers = [];

    public function addHeader($name, $value) {
        $this->headers[$name] = new Header($name, $value);
    }

    public function getHeader($name) {
        return isset($this->headers[$name]) ? $this->headers[$name] : null;
    }

    public function getAllHeaders() {
        return $this->headers;
    }
}