<?php

namespace Massfice\SocialApp\Usage\Action;

interface iAction {
    public function load(?array $config, array $okta) : ?array;
    public function validate(?array $data) : wValidateReturn;
    public function execute(?array $data, wValidateReturn $wrapper) : wExecuteReturn;
    public function display(wData $wrapper) : wResponse;
}

?>