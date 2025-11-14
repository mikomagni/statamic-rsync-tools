<?php

namespace MikoMagni\RsyncCommands\Tests;

use MikoMagni\RsyncCommands\ServiceProvider;
use Statamic\Testing\AddonTestCase;

abstract class TestCase extends AddonTestCase
{
    protected string $addonServiceProvider = ServiceProvider::class;

    protected function resolveApplicationConfiguration($app)
    {
        parent::resolveApplicationConfiguration($app);

        // Add any custom configuration here if needed
    }
}