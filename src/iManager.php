<?php

namespace Massfice\SocialApp;

use Massfice\SocialApp\Usage\Action\iAction;
use Massfice\SocialApp\Usage\Action\iActionFactory;

interface iManager {
    public function createAction(iActionFactory $factory, string $action) : iAction;
    public function executeAction(iAction $action, array $okta) : wFinalResponse;
}

?>