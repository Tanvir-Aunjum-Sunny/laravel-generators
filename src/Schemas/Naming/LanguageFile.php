<?php

namespace Webfactor\Laravel\Generators\Schemas\Naming;

use Webfactor\Laravel\Generators\Contracts\NamingAbstract;

class LanguageFile extends NamingAbstract
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return snake_case($this->entity);
    }

    /**
     * @return string
     */
    public function getSingular(): string
    {
        return ucfirst($this->entity);
    }

    /**
     * @return string
     */
    public function getPlural(): string
    {
        return ucfirst(str_plural($this->entity));
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return 'models.php';
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return resource_path('lang/' . \Lang::locale());
    }

    /**
     * @return string
     */
    public function getRelativeFilePath(): string
    {
        return 'resources/lang/'.\Lang::locale().'/'.$this->getFileName();
    }
}
