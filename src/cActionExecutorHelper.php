<?php

namespace Massfice\SocialApp;

use Massfice\SocialApp\Usage\Action\iAction;
use Massfice\SocialApp\Usage\Action\wExecuteReturn;
use Massfice\SocialApp\Usage\Config\cAppConfig;

class cActionExecutorHelper {
    public static function execute(iAction $action, array $okta) : wExecuteReturn {
        $data = $action->load(cAppConfig::config(),$okta);
        $valid = $action->validate($data);
        $wrapper = $action->execute($data,$valid);

        return $wrapper;
    }
}

?>