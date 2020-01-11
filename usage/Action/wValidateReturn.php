<?php

namespace Massfice\SocialApp\Usage\Action;

class wValidateReturn {
    public $errors;
    public $valid;

    public function __construct(?array $errors, bool $valid) {
        $this->errors = $errors;
        $this->valid = $valid;
    }
}

?>