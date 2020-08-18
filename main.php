#! usr/bin/env php
<?php

namespace Structural\Registry;

require_once "vendor/autoload.php";

Registry::setData("stdClass", new \stdClass());

$object = Registry::getData("stdClass");

print_r($object);
