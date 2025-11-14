<?php

namespace MikoMagni\RsyncCommands\Tests;

class ExampleTest extends TestCase
{
    /** @test */
    public function it_registers_commands()
    {
        $this->assertTrue(
            $this->app->make('Illuminate\Contracts\Console\Kernel')
                ->all()['assets:pull'] !== null
        );

        $this->assertTrue(
            $this->app->make('Illuminate\Contracts\Console\Kernel')
                ->all()['assets:push'] !== null
        );
    }

    /** @test */
    public function it_loads_config()
    {
        $this->assertNotNull(config('rsync'));
        $this->assertTrue(config('rsync.display_ascii_art'));
    }
}
