<?php

namespace Massfice\SocialApp;

class fManagerFactory {
    public static function create(string $type) : iManager {
        if($type == "html") {
            return new cHtmlManager();
        } else if($type == "json") {
            return new cJsonManager();
        } else {
            return new cUnknownManager();
        }
    }
}

?>