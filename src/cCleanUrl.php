<?php

namespace Massfice\SocialApp;

use Massfice\Storage\ShelfBuilder;
use Massfice\Storage\Storage;
use Massfice\SocialApp\DevMode\DevHelper; //Only for dev mode

class cCleanUrl {
    public static function init() {
        $shelf = ShelfBuilder::getBuilder()
            ->setJsonAllowed(false)
            ->setSessionAllowed(false)
            ->setOverrideAllowed(false)
            ->setOverrideSessionAllowed(false)
            ->build()
            ->addToStorage("System_CleanUrl");
        
        $uri = $_SERVER["REQUEST_URI"];

        $cleans = explode('public/',$uri);
        $cleans = isset($cleans[1]) ? $cleans[1] : "";
        $cleans = explode("/",$cleans);
        

        $type = isset($cleans[0]) ? $cleans[0] : "html";
        $action = isset($cleans[1]) ? $cleans[1] : "default";  

        $shelf->addData("type",$type);
        $shelf->addData("action",$action);

        $data = [];
        for($i = 2; $i < count($cleans); $i++) {
            $item = $cleans[$i];
            $item = explode("=",$item);
            if(isset($item[0]) && isset($item[1])) $data[$item[0]] = $item[1];
            else $data[] = $cleans[$i];
        }

        // DevHelper::dump($data);
        // var_dump($data);
        $shelf->addData("data",$data);

    }

    public static function getAction() : String {
        return Storage::getInstance()->getShelf("System_CleanUrl")->getData("action");
    }

    public static function getType() : String {
        return Storage::getInstance()->getShelf("System_CleanUrl")->getData("type");
    }

    public static function get($key) : ?String {
        $data = Storage::getInstance()->getShelf("System_CleanUrl")->getData("data");

        return isset($data[$key]) && is_string($data[$key]) ? $data[$key] : null; 

    }

}

?>