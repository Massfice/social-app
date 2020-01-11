<?php

namespace Massfice\SocialApp\Usage\Action;

use Massfice\SocialApp\aInit;

class fDefaultFactory implements iActionFactory {
    public function create(string $name) : iAction {

        if($name == "init") return new aInit();

        $action = '\\Massfice\\SocialApp\\Usage\\Action\\a'.ucfirst($name);

        if(class_exists($action) && isset(class_implements($action)['Massfice\SocialApp\Usage\Action\iAction'])) {
            return new $action();
        } else {
            return new aDefault();
        }
    }
}

?>