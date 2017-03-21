<?php

namespace api;

class BaseController extends \BaseController{

    /**
     * Create Success API JSON OUTPUT
     * @param type $data
     */
    public function onSuccess($data, $reason = "", $pagination = "") {
        $result = array();
        $result['result'] = true;
        $result['reason'] = $reason;
        if (isset($data["ts"]) && isset($data["data"])) {
            $result["ts"] = $data['ts'];
            $result["data"] = $data['data'];
        } else {
             $result["data"] = $data;
        }
        if($pagination) {
            $result['data']['pagination'] = $pagination;
        }
        $result['v'] = $this->version;
        $result['ts'] = time();
        $this->output($result);
    }

    /**
     * Create Fail API JSON OUTPUT
     * @param type $data
     */
    public function onFail($errMsg, $msg = "") {
        $result = array(
            "result" => false,
            "reason" => $errMsg,
            "msg" => $msg,
            "v" =>  $this->version,
            "time" => time()
        );
        $this->output($result);

    }

    /**
     * Common JSON OUTPUT
     * @param type $output
     */
    private function output($output) {
        header("Content-Type: application/json", TRUE);
        echo json_encode(($output), JSON_HEX_APOS | JSON_HEX_QUOT);
        exit();
    }

}
