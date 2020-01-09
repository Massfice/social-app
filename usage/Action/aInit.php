<?php

namespace Massfice\SocialApp\Usage\Action;

use Massfice\SocialApp\cSmarty;

class aInit implements iAction {
    public function load(?array $config, array $okta) : ?array {
        return [
            "uri" => $_SERVER["REQUEST_URI"]
        ];
    }

    public function validate(?array $data) : bool {
        return true;
    }

    public function execute(?array $data, bool $valid) : ?array {
        return \explode("init",$data["uri"]);
    }

    public function display(array $data) : cResponse {
        cSmarty::get()->assign("uri",$data[0]);
        cSmarty::get()->assign("config",$data[1]);
        return new cResponse(cSmarty::get()->fetch("index.tpl"),"html",200);
    }
}

?>