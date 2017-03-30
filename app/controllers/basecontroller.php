<?php

class BaseController{

    protected $version = 1;    
    protected $f3;

    function __construct() {
        $this->f3 = \Base::instance();
    }
}
