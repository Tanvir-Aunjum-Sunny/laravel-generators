<?php

namespace Webfactor\Laravel\Generators\Schemas\Naming;

use Webfactor\Laravel\Generators\Contracts\NamingAbstract;

class CrudRequest extends NamingAbstract
{
    private $path = 'Http/Requests/Admin';

    /**
     * @return string
     */
    public function getNamespace(): string
    {
        return $this->getAppNamespace() . 'Http\\Requests\\Admin';
    }

    /**
     * @return string
     */
    public function getClassName(): string
    {
        return ucfirst($this->entity) . 'Request';
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->getClassName() . '.php';
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return app_path($this->path);
    }

    /**
     * @return string
     */
    public function getRelativeFilePath(): string
    {
        return str_replace("\\", '/', $this->getAppNamespace()).$this->path.'/'.$this->getFileName();
    }

    /**
     * @return string
     */
    public function getStub(): string
    {
        return __DIR__ . '/../../../stubs/crud-request.stub';
    }
}
