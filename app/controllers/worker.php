<?php

/**
*   Worker , run the job at background
*   https://github.com/chrisboulton/php-resque
*/
class Worker extends \BaseController{

    public function start($f3){
        $QUEUE = "*";
        $logLevel = 1;
        $logLevel = 1;
        $LOGGING = 1;
        $VERBOSE = 1;
        $VVERBOSE = 1;
        $interval = 10;
        $INTERVAL = interval;
        $count = 1;
        $count = 1;
        $COUNT = $count;

        if($_SERVER['argc'] > 2){
            for($i = 2; $i < $_SERVER['argc']; $i++){
                list($key,$val) = explode("=",$_SERVER['argv'][$i]);
                ${$key} = $val;
            }
        }
        
        if(empty($QUEUE)) {
            die("Set QUEUE env var containing the list of queues to work.\n");
        }

        if(!empty($LOGGING) || !empty($VERBOSE)) {
            $logLevel = Resque_Worker::LOG_NORMAL;
        }
        else if(!empty($VVERBOSE)) {
            $logLevel = Resque_Worker::LOG_VERBOSE;
        }

        if(!empty($INTERVAL)) {
            $interval = $INTERVAL;
        }
        if(!empty($COUNT) && $COUNT > 1) {
            $count = $COUNT;
        }

        if($count > 1) {
            if (! function_exists('pcntl_fork')) die('PCNTL functions not available on this PHP installation');
            for($i = 0; $i < $count; ++$i) {
                $pid = pcntl_fork();
                if($pid == -1) {
                    die("Could not fork worker ".$i."\n");
                }
                // Child, start the worker
                else if(!$pid) {
                    $queues = explode(',', $QUEUE);
                    $worker = new Resque_Worker($queues);
                    $worker->logLevel = $logLevel;
                    fwrite(STDOUT, '*** Starting worker '.$worker."\n");
                    $worker->work($interval);
                    break;
                }
            }
        }
        // Start a single worker
        else {
            $queues = explode(',', $QUEUE);
            $worker = new Resque_Worker($queues);
            $worker->logLevel = $logLevel;
            
            $PIDFILE = getenv('PIDFILE');
            if ($PIDFILE) {
                file_put_contents($PIDFILE, getmypid()) or
                    die('Could not write PID information to ' . $PIDFILE);
            }

            fwrite(STDOUT, '*** Starting worker '.$worker."\n");
            $worker->work($interval);
        }
    }
    
}