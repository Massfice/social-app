<?php

namespace Massfice\SocialApp\DevMode;

class DevHelper {
    public static function dump(array $array) {
        header("content-type:application/json");
        echo \json_encode($array);
    }
}

?>