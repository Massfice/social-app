<?php

namespace Massfice\SocialApp\Usage\Action;

class cActionFactoryFactory {
    public static function create(string $role) : iActionFactory {
        $factory = '\\Massfice\\SocialApp\\Usage\\Action\\f'.ucfirst($role).'Factory';

        if(class_exists($factory) && isset(class_implements($factory)['Massfice\SocialApp\Usage\Action\iActionFactory'])) {
            return new $factory();
        } else {
            return new fDefaultFactory();
        }
    }
}

?>