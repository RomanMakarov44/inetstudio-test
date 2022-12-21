<?php

# Добавил абстрактный класс XMLHTTPRequestService
abstract class XMLHTTPRequestService {
        public function request(string $url, string $method, array $options) { }
    }

class XMLHttpService extends XMLHTTPRequestService {}

class Http {
    private $service;
    
    public function __construct(XMLHTTPRequestService $xmlHttpService) {
         $this->service = $service;
    }
    
    public function get(string $url, array $options) {
         $this->service->request($url, 'GET', $options);
    }
    
    public function post(string $url) {
        $this->service->request($url, 'GET');
    }
}
