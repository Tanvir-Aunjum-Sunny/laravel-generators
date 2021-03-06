<?php

namespace Webfactor\Laravel\Generators\Recipes;

use Webfactor\Laravel\Generators\Contracts\OpenInIdeAbstract;
use Webfactor\Laravel\Generators\Contracts\OpenInIdeInterface;

class SublimeOpener extends OpenInIdeAbstract implements OpenInIdeInterface
{
    /**
     *  Opens all given files in Sublime
     */
    public function open()
    {
        foreach ($this->files as $file) {
            exec('subl ' . $file->getPathname());
        }
    }
}
