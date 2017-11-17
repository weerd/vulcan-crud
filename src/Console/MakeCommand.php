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
    protected $signature = 'vulcan:make {resource?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scaffold CRUD files for a specified resource.';

    protected $directories = [
        'Http/Controllers/Admin' => 'controller',
        'Http/Controllers/Client' => 'controller',
    ];

    // protected $controllers = [
    //     //
    // ];

    // protected $views = [
    //     //
    // ];

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
        $resource = $this->argument('resource') ?: $this->ask('What is the singular name of the resource you would like Vulcan to make?');

        $this->info("Ok! Vulcan is forging a new \"{$resource}\" resource Migration, Model, Controllers, and Views.");

        $stub = str_replace(
            '{{namespace}}',
            $this->getAppNamespace(),
            file_get_contents(__DIR__.'/stubs/make/controllers/admin/pagecontroller.stub')
        );

        dd($stub);
    }
}
