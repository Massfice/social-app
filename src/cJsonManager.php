<?php

namespace Massfice\SocialApp;

use Massfice\SocialApp\Usage\Action\iAction;
use Massfice\SocialApp\Usage\Action\iActionFactory;
use Massfice\SocialApp\Usage\Config\cUnsupportedActions;

class cJsonManager implements iManager {
    public function createAction(iActionFactory $factory, string $action) : iAction {
        if($action == "init") $action = "default";

        $unsupported = cUnsupportedActions::json();

        return cActionCreatorHelper::create($factory,$action,$unsupported);
    }

    public function executeAction(iAction $action, array $okta) : wFinalResponse {
        $wrapper = cActionExecutorHelper::execute($action,$okta);

        return new wFinalResponse(json_encode($wrapper->data),"application/json",$wrapper->code);
    }
}

?>