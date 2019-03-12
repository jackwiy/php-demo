<?php

require('./vendor/autoload.php');

use Controller\TestController;
use Model\Product\Collection;

$c = new Collection();
$c->test();

$t = new TestController();
$t->h();