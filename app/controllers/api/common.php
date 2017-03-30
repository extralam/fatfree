<?php

namespace api;

class Common extends BaseController{

    function get() {
        $this->onSuccess("GET " . \Base::instance()->get('PARAMS.item'));
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