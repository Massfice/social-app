<?php

namespace Massfice\SocialApp\Usage\Action;

use Massfice\SocialApp\StatusCode\iStatusCode;

class wExecuteReturn {

    public $code;
    public $data;

    public function __construct(?array $data, bool $valid, iStatusCode $code) {
        $this->data = new wData($data,$valid);
        $this->code = $code;
    }
}

?>