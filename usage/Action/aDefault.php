<?php

namespace Massfice\SocialApp\Usage\Action;

class aDefault implements iAction {
    public function load(?array $config, array $okta) : ?array {
        return null;
    }

    public function validate(?array $data) : bool {
        return true;
    }

    public function execute(?array $data, bool $valid) : ?array {
        return null;
    }
    
    public function display(?array $data) : cResponse {
        return new cResponse("Tada","html",201);
    }
}

?>