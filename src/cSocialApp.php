<?php

namespace Massfice\SocialApp;

use Massfice\SocialApp\DevMode\DevHelper; //Only for dev mode

use Massfice\SocialApp\Usage\Action\cActionFactoryFactory;
use Massfice\SocialApp\Usage\Config\cAppConfig;

class cSocialApp {

    private static function action(array $okta) {
        $role = cRoleManager::getRole($okta);
        $factory = cActionFactoryFactory::create($role);
        $action = $factory->create(cCleanUrl::getAction());
        
        $data = $action->load(cAppConfig::config(),$okta);
        $valid = $action->validate($data);
        $data = $action->execute($data,$valid);
        $display = $action->display($data);

        http_response_code($display->code);
        header("Content-Type: ".$display->type);
        if($display->code > 103 && $display->code < 300) echo $display->display;

    }

    private static function init() {
        cCleanUrl::init();
        cSmarty::init();
    }

    public static function start() {
        $okta = cOkta::run();
        self::init();
        self::action($okta);

        // header("Content-Type: application/json");
        // http_response_code(404);
        // echo \json_encode([123,123,123]);
        //
        
        //DevHelper::dump($_SERVER);
    }
}

?>