<?php

namespace LaravelLiberu\RoAddresses\App\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelLiberu\Addresses\App\Http\Requests\ValidateAddressFetch;
use LaravelLiberu\RoAddresses\App\Http\Resources\Address as Resource;
use LaravelLiberu\RoAddresses\App\Models\Address;

class Index extends Controller
{
    public function __invoke(ValidateAddressFetch $request)
    {
        return Resource::collection(
            Address::for($request->get('addressable_id'), $request->get('addressable_type'))
                ->with(['locality', 'county'])
                ->ordered()
                ->get()
        );
    }
}
