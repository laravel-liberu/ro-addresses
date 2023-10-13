<?php

namespace LaravelLiberu\RoAddresses\App\Traits;

use LaravelLiberu\Addresses\App\Traits\Addressable as BaseAddressable;
use LaravelLiberu\RoAddresses\App\Models\Address;

trait Addressable
{
    use BaseAddressable;

    public function address()
    {
        return $this->morphOne(Address::class, 'addressable');
    }

    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }
}
