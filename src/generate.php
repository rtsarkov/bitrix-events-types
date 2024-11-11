<?php

include __DIR__ . "/../vendor/autoload.php";

(new \MioCode\BitrixEventTypes\Generator())->generateEvents();
(new \MioCode\BitrixEventTypes\Generator())->generateTypes();
