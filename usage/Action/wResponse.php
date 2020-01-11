<?php

namespace Massfice\SocialApp\Usage\Action;

class wResponse {
    public $display;
    public $type;

    public function __construct(?String $display, String $type) {
        
        switch($type) {
            case "json":
                $this->type = "application/json";
                break;
            case "html":
            default:
                $this->type = "text/html";
        }

        $this->display = $display;

    }

}
        

?>