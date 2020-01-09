<?php

namespace Massfice\SocialApp\Usage\Action;

interface iAction {
    public function load(?array $config, array $okta) : ?array;
    public function validate(?array $data) : bool;
    public function execute(?array $data, bool $valid) : ?array;
    public function display(array $data) : cResponse;
}

?>