<?php

namespace LaravelLiberu\RoAddresses\App\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelLiberu\RoAddresses\App\Models\County;
use LaravelLiberu\Select\App\Traits\OptionsBuilder;

class CountyOptions extends Controller
{
    use OptionsBuilder;

    protected $queryAttributes = ['name', 'abbreviation'];

    public function query()
    {
        return County::active();
    }
}
