<?php
include('../src/thipages/string/SPattern.php');
include('Tests.php');
include('../vendor/autoload.php');
use thipages\quick\tests\QTests;
$output=QTests::test(Tests::class);
echo($output);

