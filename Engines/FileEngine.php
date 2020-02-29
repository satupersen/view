<?php

namespace Satupersen\View\Engines;

use Satupersen\Contracts\View\Engine;

class FileEngine implements Engine
{
    /**
     * Get the evaluated contents of the view.
     *
     * @param  string  $path
     * @param  array  $data
     * @return string
     */
    public function get($path, array $data = [])
    {
        return file_get_contents($path);
    }
}
