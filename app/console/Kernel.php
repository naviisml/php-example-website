<?php

namespace App\Console;

use Navel\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The commands
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\UserCreateCommand::class,
        \App\Console\Commands\QuestionCommand::class,
        \App\Console\Commands\TestCommand::class,
    ];
}
