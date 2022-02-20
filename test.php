<?php
if(empty($argv) || (1 > $argc)) {
    // tried to access outside of CLI : it is a nope.
    http_response_code(404); // let's trick into a not found
    exit;
}

require_once './_autoload.php';

echo PHP_EOL;
echo 'Testing PHP version : ';

echo '.';
assert(
        'version_compare(PHP_VERSION, "8.0")',
        'PHP Version has to be at least 8.0'
);

echo ' Done.';
echo PHP_EOL;

echo PHP_EOL;
echo 'Testing PHP version : ';

echo '.';
assert(
        'version_compare(PHP_VERSION, "8.0")',
        'PHP Version has to be at least 8.0'
);

echo ' Done.';
echo PHP_EOL;

echo PHP_EOL;
echo 'Testing ClassLoader : ';

echo '.';
assert(
        'try { ClassLoader::getInstance("lib\\ClassLoader"); return true; } catch() { return false; }',
        'ClassLoader should be found'
);

echo '.';
assert(
        'try { new UnexistingClass(); return false; } catch() { return true; }',
        'UnexistingClass should not be found'
);

echo ' Done.';
echo PHP_EOL;


echo PHP_EOL;
echo 'Testing Basic Config : ';

echo '.';
try {
    lib\Config::getInstance('general');
} catch(Exception $e) {
    echo 'general config should be here';
}

echo ' Done.';
echo PHP_EOL;

echo PHP_EOL;
echo 'Testing integrity : ';

echo '.';
assert(
        lib\Config::getInstance('general')->get('test.crc') === md5(file_get_contents(__FILE__)),
        'Test file was altered'
);

echo ' Done.';
echo PHP_EOL;
