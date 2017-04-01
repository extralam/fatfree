<?php

namespace web;

class Phpq extends BaseController{

    function createTable($f3){
	    \Phpq::up();
    }

	function add($f3){
		$args = array('name' => 'Hello');
		$token = \Resque::enqueue('default', 'My_Job', $args, true);
		\Phpq::add($token);
        echo $token;
	}

	function index($f3){
        echo "Show Php Resque Worker List <br>";    
        $result = \Phpq::list();
        foreach($result as $item){
            $status = (new \Resque_Job_Status($item->token))->get();
            echo $item->token . " : " . (string)$status . "<br>";
        }
    }


}