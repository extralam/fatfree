<?php


class My_Job
{
    public function setUp()
    {
        // ... Set up environment for this job
    }

    public function perform()
    {
        // .. Run job
        echo $this->args['name'];
        $logger = new Log('error.log');
        $logger->write( "TESTING" );
    }

    public function tearDown()
    {
        // ... Remove environment for this job
    }
}

?>