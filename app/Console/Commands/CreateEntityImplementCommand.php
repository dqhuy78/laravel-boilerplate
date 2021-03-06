<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class CreateEntityImplementCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'repository:make-impl';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new implement of repository interface';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Repository Implement';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/StubTemplate/repository-implement.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Repositories\Eloquents';
    }

    /**
     * Get the desired class name from the input.
     *
     * @return string
     */
    protected function getNameInput()
    {
        return trim($this->argument('name')) . 'Repository';
    }

    /**
     * Replace the namespace for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return $this
     */
    protected function replaceNamespace(&$stub, $name)
    {
        $stub = str_replace(
            [
                'DummyNamespace',
                'DummyRootNamespace',
                'NamespacedDummyUserModel',
                'DummyModel',
                'DummyContract'
            ],
            [
                $this->getNamespace($name),
                $this->rootNamespace(),
                config('auth.providers.users.model'),
                str_replace('Repository', '', $this->getNameInput()),
                $this->getNameInput() . 'Interface'
            ],
            $stub
        );

        return $this;
    }
}
