<?php
namespace  app\core;
class Response{
    public function setRespnseStatus(int $code) {
        http_response_code($code);
    }
}
