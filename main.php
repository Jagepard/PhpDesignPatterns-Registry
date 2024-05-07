#! usr/bin/env php
<?php

namespace Structural\Registry;

require_once "vendor/autoload.php";

$registry = new Registry();
$registry->set("stdClass", new \stdClass());

$object = $registry->get("stdClass");

print_r($object);
