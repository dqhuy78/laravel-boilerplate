<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class CreateEntityMutatorCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'repository:make-muta';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a model mutator';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Mutator';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/StubTemplate/entity-mutator.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Entities\Eloquents\Mutators';
    }

    /**
     * Get the desired class name from the input.
     *
     * @return string
     */
    protected function getNameInput()
    {
        return trim($this->argument('name')) . 'Mutator';
    }
}
