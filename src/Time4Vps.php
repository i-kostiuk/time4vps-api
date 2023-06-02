<?php

namespace Time4Vps;

use Time4Vps\clients\ApiClient;

class Time4Vps
{

    private ApiClient $apiClient;

    public function __construct($username, $password) {
        $this->apiClient = new ApiClient($username, $password);
    }

    public function __call($name, $arguments)
    {
        if (method_exists($this->apiClient, $name)) {
            return call_user_func_array([$this->apiClient, $name], $arguments);
        } else {
            throw new \BadMethodCallException("Method $name does not exist.");
        }
    }

}