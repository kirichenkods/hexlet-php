<?php

// $autoloadPath1 = __DIR__ . '/home/omega/.config/composer/vendor/autoload.php';

// $autoloadPath2 = __DIR__ . '/vendor/autoload.php';

// if (file_exists($autoloadPath1)) {
//     require_once $autoloadPath1;
// } else {
//     require_once $autoloadPath2;
// }

// echo 'Hello, Hexlet!';


require_once __DIR__ . '/vendor/autoload.php';

use Hexlet\Php\Runner;

print_r(Runner\run());