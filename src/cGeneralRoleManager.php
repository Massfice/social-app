<?php

namespace Massfice\SocialApp;

use Massfice\SocialApp\Usage\Config\cRoleManager;
use Massfice\Storage\ShelfBuilder;
use Massfice\Storage\Storage;

class cGeneralRoleManager {
    public static function init(array $okta) {
        $role = cRoleManager::getRole($okta);

        if($role == null) $role = "User";

        $shelf = ShelfBuilder::getBuilder()
            ->setJsonAllowed(false)
            ->setModifyAllowed(false)
            ->setOverrideAllowed(false)
            ->setOverrideSessionAllowed(false)
            ->build()
            ->addToStorage("System_Role");

        $shelf->addData("role",$role);

        return $role;
    }

    public static function getRole() : string {
        return Storage::getInstance()->getShelf("System_Role")->getData("role");
    }
}

?>