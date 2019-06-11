<?php

namespace FreeWijmo;

class WijmoHelpers {
    public static function loadWijmoAngularJsScript() {
        include __DIR__ . '/headers/angularJsScript.tpl';
    }
    public static function loadWijmoRemoveLicenseScript() {
        include __DIR__ . '/headers/remove_wijmoLicense.tpl';
    }
}