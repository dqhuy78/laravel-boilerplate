<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RepositoryGenerateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'repository:generate {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate repository contract and implementation';

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
        $this->callSilent('repository:make-entt', ['name' => $this->argument('name')]);
        $this->callSilent('repository:make-intf', ['name' => $this->argument('name')]);
        $this->callSilent('repository:make-impl', ['name' => $this->argument('name')]);

        $this->info('Contract and implement generated successfully!');
    }
}
