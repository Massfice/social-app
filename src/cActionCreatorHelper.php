<?php

namespace Massfice\SocialApp;

use Massfice\SocialApp\Usage\Action\iAction;
use Massfice\SocialApp\Usage\Action\iActionFactory;

class cActionCreatorHelper {
    public static function create(iActionFactory $factory, string $action, array $unsupported) : iAction {
        if(\in_array($action,$unsupported,true)) {
            $type = cCleanUrl::getType();
            return new aBadRequest("Unsupported action for ".$type.".");
        } else {
            return $factory->create($action);
        }       
    }
}

?>