<?php

namespace Massfice\SocialApp\StatusCode;

class fStatusCodeFactory {
    public function create(Int $code) : iStatusCode {
        $code = '\\Massfice\\SocialApp\\StatusCode\c'.ucfirst($code);

        if(class_exists($code) && isset(class_implements($code)['Massfice\SocialApp\StatusCode\iStatusCode'])) {
            return new $code();
        } else {
            return new c500();
        }
    }
}

?>