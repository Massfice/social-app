<?php

namespace Massfice\SocialApp;

use Smarty;
use Massfice\Storage\ShelfBuilder;
use Massfice\Storage\Storage;

class cSmarty {
    public static function init() {
        $shelf = ShelfBuilder::getBuilder()
            ->setJsonAllowed(false)
            ->setSessionAllowed(false)
            ->setOverrideAllowed(false)
            ->setOverrideSessionAllowed(false)
            ->build()
            ->addToStorage("System_Smarty");

        $smarty = new Smarty();
        $smarty->template_dir = dirname(__DIR__,1)."/usage/Views";
        $shelf->addData("smarty",$smarty);
    }

    public static function get() : Smarty {
        $shelf = Storage::getInstance()->getShelf("System_Smarty");
        return $shelf->getData("smarty");
    }
}

?>