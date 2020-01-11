<?php

namespace Massfice\SocialApp;

use Massfice\SocialApp\Usage\Action\wValidateReturn;
use Massfice\SocialApp\Usage\Action\wExecuteReturn;
use Massfice\SocialApp\Usage\Action\wData;
use Massfice\SocialApp\StatusCode\c400;
use Massfice\SocialApp\Usage\Action\wResponse;
use Massfice\SocialApp\Usage\Action\iAction;

class aBadRequest implements iAction {
    
    private $error;

    public function __construct(string $error) {
        $this->error = $error;
    }

    public function load(?array $config, array $okta) : ?array {
        return null;
    }
    public function validate(?array $data) : wValidateReturn {
        return new wValidateReturn([
            $this->error
        ],false);
    }
    public function execute(?array $data, wValidateReturn $wrapper) : wExecuteReturn {
        return new wExecuteReturn($wrapper->errors,false,new c400());
    }
    public function display(wData $wrapper) : wResponse {
        return new wResponse(null,"html");
    }
}

?>