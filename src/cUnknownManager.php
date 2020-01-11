<?php

namespace Massfice\SocialApp;

use Massfice\SocialApp\Usage\Action\iAction;
use Massfice\SocialApp\Usage\Action\iActionFactory;

class cUnknownManager implements iManager {
    public function createAction(iActionFactory $factory, string $action) : iAction {
        return new aBadRequest("Unknown type.");
    }

    public function executeAction(iAction $action, array $okta) : wFinalResponse {
        $manager = new cHtmlManager();
        return $manager->executeAction($action,$okta);
    }   
}

?>