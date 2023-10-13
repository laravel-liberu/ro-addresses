<?php

namespace LaravelLiberu\RoAddresses;

use Illuminate\Support\ServiceProvider;
use LaravelLiberu\Addresses\App\Forms\Builders\AddressForm;
use LaravelLiberu\Addresses\App\Http\Requests\ValidateAddressRequest;
use LaravelLiberu\Addresses\App\Models\Address;
use LaravelLiberu\RoAddresses\App\Forms\Builders\AddressForm as Form;
use LaravelLiberu\RoAddresses\App\Http\Requests\ValidateAddressRequest as ValidateRoAddressRequest;
use LaravelLiberu\RoAddresses\App\Models\Address as RoAddress;

class AppServiceProvider extends ServiceProvider
{
    public $bindings = [
        ValidateAddressRequest::class => ValidateRoAddressRequest::class,
        AddressForm::class => Form::class,
        Address::class => RoAddress::class,
    ];

    public function boot()
    {
        $this->loadDependencies()
            ->publishesDependencies();
    }

    private function loadDependencies()
    {
        $this->mergeConfigFrom(__DIR__.'/config/addresses.php', 'liberu.addresses');

        $this->loadRoutesFrom(__DIR__.'/routes/api.php');

        $this->loadMigrationsFrom([__DIR__.'/database/migrations', __DIR__.'/database/migrations/localities']);

        return $this;
    }

    private function publishesDependencies()
    {
        $this->publishes([
            __DIR__.'/database/factories' => database_path('factories'),
        ], ['ro-addresses-factory', 'liberu-factories']);

        $this->publishes([
            __DIR__.'/database/seeds' => database_path('seeds'),
        ], ['ro-addresses-seeders', 'liberu-seeders']);

        $this->publishes([
            __DIR__.'/config' => config_path('liberu'),
        ], ['ro-addresses-config', 'liberu-config']);

        $this->publishes([
            __DIR__.'/app/Forms/Templates' => app_path('Forms/vendor/'),
        ], 'ro-addresses-form');

        $this->publishes([
            __DIR__.'/app/Imports' => app_path('Imports/'),
        ], 'ro-addresses-import');
    }
}
