<?php

namespace Massfice\SocialApp;

use Massfice\SocialApp\StatusCode\fStatusCodeFactory;
use Massfice\SocialApp\Usage\Action\wValidateReturn;
use Massfice\SocialApp\Usage\Action\wExecuteReturn;
use Massfice\SocialApp\Usage\Action\wData;
use Massfice\SocialApp\Usage\Action\wResponse;
use Massfice\SocialApp\Usage\Action\iAction;

class aInit implements iAction {
    public function load(?array $config, array $okta) : ?array {
        return [
            "uri" => $_SERVER["REQUEST_URI"]
        ];
    }

    public function validate(?array $data) : wValidateReturn {
        return new wValidateReturn(null,true);
    }

    public function execute(?array $data, wValidateReturn $wrapper) : wExecuteReturn {
        $data = \explode("init",$data["uri"]);
        $path = str_replace("/html","",$data[0]);
        $rdata = [
            "uri" => $data[0],
            "config" => $data[1],
            "path" => $path
        ];
        return new wExecuteReturn($rdata,$wrapper->valid,fStatusCodeFactory::create(200));
    }

    public function display(wData $wrapper) : wResponse {
        cSmarty::get()->assign("uri",$wrapper->data["uri"]);
        cSmarty::get()->assign("config",$wrapper->data["config"]);
        cSmarty::get()->assign("path",$wrapper->data["path"]);
        $code = fStatusCodeFactory::create(200);
        return new wResponse(cSmarty::get()->fetch("index.tpl"),"html");
    }
}

?>