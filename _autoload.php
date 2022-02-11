<?php
define('ROOTDIR', __DIR__);
define('DEFAULTLANG', 'en-US');

require_once './lib/ClassLoader.php'; // force load ClassLoader

spl_autoload_register(function($cls) { \lib\ClassLoader::autoload($cls); });

// register special functions, like gettext-style translate
function _(string $msg, array $args = []) {
    $httpLang = empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])? null:Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']);
    $cfgLang = lib\Config::getInstance('general')->get('lang', DEFAULTLANG);
    $defLang = DEFAULTLANG;
    $l = null;
    if(!empty($httpLang)) {
        $l = \lib\Lang::getInstance($httpLang);
    }
    if(empty($l) || !$l->exists()) {
        $l = \lib\Lang::getInstance($cfgLang);
    }
    if(empty($l) || !$l->exists()) {
        $l = \lib\Lang::getInstance($defLang);
    }
    return $l->translate($msg, $args);
}
