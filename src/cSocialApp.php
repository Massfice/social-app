<?php

namespace Massfice\SocialApp;

use Massfice\SocialApp\DevMode\DevHelper; //Only for dev mode

use Massfice\SocialApp\Usage\Action\cActionFactoryFactory;

class cSocialApp {

    private static function action(array $okta) {
        $role = cGeneralRoleManager::getRole();
        $factory = cActionFactoryFactory::create($role);

        $manager = fManagerFactory::create(cCleanUrl::getType());

        $action = $manager->createAction($factory,cCleanUrl::getAction());
        $response = $manager->executeAction($action,$okta);

        http_response_code($response->code->code());
        $response->code->headers();
        header("Content-Type: ".$response->type);
        echo $response->display;

    }

    private static function init(array $okta) {
        cCleanUrl::init();
        cSmarty::init();
        cGeneralRoleManager::init($okta);
    }

    public static function start() {
        $okta = cOkta::run();
        self::init($okta);
        self::action($okta);

        // header("Content-Type: application/json");
        // http_response_code(404);
        // echo \json_encode([123,123,123]);
        //
        
        //DevHelper::dump($_SERVER);
    }
}

?>