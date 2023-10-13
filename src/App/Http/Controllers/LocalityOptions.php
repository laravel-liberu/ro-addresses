<?php

namespace LaravelLiberu\RoAddresses\App\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelLiberu\RoAddresses\App\Models\Locality;
use LaravelLiberu\Select\App\Traits\OptionsBuilder;

class LocalityOptions extends Controller
{
    use OptionsBuilder;

    protected $queryAttributes = ['name', 'siruta', 'township'];

    public function query()
    {
        return Locality::active();
    }
}
