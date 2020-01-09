<?php

namespace Massfice\SocialApp\Usage\Action;

interface iActionFactory {
    public function create(string $name) : iAction;
}

?>