<?php

namespace Massfice\SocialApp;

use Massfice\SocialApp\Usage\Action\iAction;
use Massfice\SocialApp\Usage\Action\iActionFactory;
use Massfice\SocialApp\Usage\Config\cUnsupportedActions;

class cHtmlManager implements iManager {
    public function createAction(iActionFactory $factory, string $action) : iAction {
        $unsupported = cUnsupportedActions::html();

        return cActionCreatorHelper::create($factory,$action,$unsupported);
    }

    public function executeAction(iAction $action, array $okta) : wFinalResponse {
        $wrapper = cActionExecutorHelper::execute($action,$okta);
        $display = $action->display($wrapper->data);

        return new wFinalResponse($display->display,$display->type,$wrapper->code);
    }
}

?>