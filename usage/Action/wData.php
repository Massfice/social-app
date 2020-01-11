<?php

namespace Massfice\SocialApp\Usage\Action;

use Massfice\SocialApp\StatusCode\iStatusCode;

class wData {

    public $data;
    public $valid;

    public function __construct(?array $data, bool $valid) {
        $this->data = $data;
        $this->valid = $valid;
    }
}

?>