<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application();

//	registering commands

$application->add(new GenerateAdminCommand());


$application->run();
?>