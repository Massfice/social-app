<?php

namespace Massfice\SocialApp\Usage\Action;

use Massfice\SocialApp\StatusCode\fStatusCodeFactory;

class aDefault implements iAction {
    public function load(?array $config, array $okta) : ?array {
        return null;
    }

    public function validate(?array $data) : wValidateReturn {
        return new wValidateReturn(null,true);
    }

    public function execute(?array $data, wValidateReturn $wrapper) : wExecuteReturn {
        return new wExecuteReturn([
            "a" => 1,
            "b" => 2,
            "c" => 3
        ],$wrapper->valid,fStatusCodeFactory::create(200));
    }
    
    public function display(wData $wrapper) : wResponse {
        $data = $wrapper->data;
        $buff = "";
        $buff2 = $wrapper->valid ? "True: " : "False: ";
        foreach($data as $d) {
            $buff = $buff.$d;
        }
        return new wResponse($buff2.$buff,"html");
    }
}

?>