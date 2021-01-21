<?php

namespace App\Console\Commands;

use Navel\Foundation\Console\Commands\Command;

class TestCommand extends Command
{
    /**
     * [public description]
     *
     * @var [type]
     */
    public $name = 'test';

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
    public $hidden = true;

    /**
     * [run description]
     *
     * @return [type] [description]
     */
    public function run()
    {
        $this->saticRequest();
    }

    public function saticRequest()
    {
        print_r( \Navel\Helpers\Facades\Request::test() );
    }

    public function privateRequest()
    {
        $request = new \Navel\Helpers\Request();

        print_r( $request->test() );
    }
}
