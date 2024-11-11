<?php

include __DIR__ . "/../vendor/autoload.php";

(new \MioCode\BitrixEventTypes\Generator\Generator())->generateEvents();
(new \MioCode\BitrixEventTypes\Generator\Generator())->generateTypes();
