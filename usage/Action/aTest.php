<?php

namespace Massfice\SocialApp\Usage\Action;

use Massfice\SocialApp\StatusCode\fStatusCodeFactory;
use Massfice\Storage\Storage;
use Massfice\SocialApp\cCleanUrl;

class aTest implements iAction {
    public function load(?array $config, array $okta) : ?array {
        return null;
    }

    public function validate(?array $data) : wValidateReturn {
        return new wValidateReturn(null,true);
    }

    public function execute(?array $data, wValidateReturn $wrapper) : wExecuteReturn {
        $data = [
            "0x1" => cCleanUrl::get(0,true)[0],
            "0x2" => cCleanUrl::get(0,true)["c"],
            "1x3" => cCleanUrl::get(1),
            "2x3c" => cCleanUrl::get(2,true)["c"],
            "3x4c" => cCleanUrl::get(3,true)["c"],
            "3x5d" => cCleanUrl::get(3,true)["d"]
        ];
        return new wExecuteReturn($data,$wrapper->valid,fStatusCodeFactory::create(200));
    }

    public function display(wData $wrapper) : wResponse {
        return new wResponse("<a href='javascript:void(0)' onclick='go(\"default\",\"body\")'>Default</a>".\json_encode($wrapper->data),"html");
    }
}

?>