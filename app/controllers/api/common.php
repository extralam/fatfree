<?php

namespace api;

class Common extends BaseController{

    function get() {
        $this->onSuccess("GET");
    }
    function post() {
        $this->onSuccess("POST");
    }
    function put() {
        $this->onSuccess("PUT");
    }
    function delete() {
         $this->onSuccess("DELETE");
    }

}