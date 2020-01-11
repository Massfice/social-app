<?php

namespace Massfice\SocialApp\StatusCode;

interface iStatusCode {
    public function code() : Int;
    public function headers();
}

?>