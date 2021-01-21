<?php

namespace App\Console\Commands;

use Navel\Helpers\Console\ArgvInput;
use Navel\Helpers\Console\Question;
use Navel\Foundation\Console\Commands\Command;

class UserCreateCommand extends Command
{
    /**
     * [public description]
     *
     * @var [type]
     */
    public $name = 'user:create --username={username} --email={email}';

    /**
     * [public description]
     *
     * @var [type]
     */
    public $description = 'The first test command';

    /**
     * [public description]
     *
     * @var [type]
     */
    public $help = 'No information provided.';

    /**
     * [public description]
     *
     * @var [type]
     */
    public $hidden = false;

    /**
     * [run description]
     *
     * @return [type] [description]
     */
    public function run()
    {
        $argv = ArgvInput::test();

        $username = $argv->parameter('username') ?? $this->ask('Whats your name?');
        $email = $argv->parameter('email') ?? $this->ask('Whats your email?');
        $password = $this->secret('Whats your password?');

        print_r([
            'username' => $username,
            'email' => $email,
            'password' => $password
        ]);
    }
}
