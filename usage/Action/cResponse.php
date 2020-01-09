<?php

namespace Massfice\SocialApp\Usage\Action;

class cResponse {
    public $display;
    public $type;
    public $code;

    public function __construct(?String $display, String $type, Int $code) {
        
        switch($type) {
            case "json":
                $this->type = "application/json";
                break;
            case "html":
            default:
                $this->type = "text/html";
        }

        $this->display = $display;

        $status_codes = array(
            "100",
            "101",
            "200",
            "201",
            "202",
            "203",
            "204",
            "205",
            "206",
            "300",
            "301",
            "302",
            "303",
            "304",
            "305",
            "306",
            "307",
            "400",
            "401",
            "402",
            "403",
            "404",
            "405",
            "406",
            "407",
            "408",
            "409",
            "410",
            "411",
            "412",
            "413",
            "414",
            "415",
            "416",
            "417",
            "500",
            "501",
            "502",
            "503",
            "504",
            "505");
        
        $this->code = in_array($code, $status_codes) ? $code : 500;

        if($this->code == 204 || $this->code == 304) $this->display = "";

    }

}
        

?>