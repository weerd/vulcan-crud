<?php

namespace Weerd\VulcanCrud\Console;

use Illuminate\Console\Command;
use Illuminate\Console\DetectsApplicationNamespace;


class MakeCommand extends Command
{
    use DetectsApplicationNamespace;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vulcan:make';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scaffold CRUD files for a specified resource.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

    }
}
