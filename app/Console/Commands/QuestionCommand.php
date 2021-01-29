<?php

namespace App\Console\Commands;

use Navel\Foundation\Console\Commands\Command;

class QuestionCommand extends Command
{
    /**
     * [public description]
     *
     * @var [type]
     */
    public $name = 'question';

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
        $this->askName();

        $this->askQuestion();

        $this->askPassword();
    }

    public function askName()
    {
        $name = $this->ask('Whats your name?');

        $this->prompt("Your name is {$name}");
    }

    public function askQuestion()
    {
        $answer = $this->question('This is a question, do you wanna continue? (yes/no)', ['yes', 'no'], 'You can only respond with yes or no.');

        if( $answer === 'no') {
            $this->prompt('Okay, bye!');
            exit;
        }

        $this->prompt("Your answer is {$answer}");
    }

    public function askPassword()
    {
        $password = $this->secret('Whats your password?');

        $this->prompt("Your password is *CENSORED*");
    }
}
