<?php

require_once __DIR__ . '/../src/vendor/autoload.php';

// 变量名这么长是为了防重复
$laravelTarsTmpTarsConfig = include __DIR__ . '/../src/config/tars.php';
return $laravelTarsTmpTarsConfig['proto'];
