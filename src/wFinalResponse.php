<?php

namespace Massfice\SocialApp;

use Massfice\SocialApp\StatusCode\iStatusCode;

class wFinalResponse {
    public $type;
    public $display;
    public $code;

    public function __construct(?string $display, string $type, iStatusCode $code) {
        $this->type = $type;
        $this->display = $display;
        $this->code = $code;
    }
}

?>