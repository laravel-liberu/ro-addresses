<?php

namespace LaravelLiberu\RoAddresses\App\Forms\Builders;

use LaravelLiberu\Addresses\App\Forms\Builders\AddressForm as BaseAddressForm;
use LaravelLiberu\Addresses\App\Models\Address;
use LaravelLiberu\Countries\App\Models\Country;
use LaravelLiberu\RoAddresses\App\Enums\Sectors;
use LaravelLiberu\RoAddresses\App\Models\County;
use LaravelLiberu\RoAddresses\App\Models\Locality;

class AddressForm extends BaseAddressForm
{
    protected const TemplatePath = __DIR__.'/../Templates/address.json';

    public function create(?Country $countryId)
    {
        $this->prepare();
        $this->form->value('country_id', Country::whereName('Romania')->first()->id);

        return parent::create();
    }

    public function edit(Address $address, ?-> $countryId)
    {
        $this->prepare();

        return parent::edit($address);
    }

    private function prepare(): void
    {
        $this->form->options('county_id', County::active()->get(['name', 'id']))
            ->options('sector', Sectors::select())
            ->value('country', 'Romania')
            ->append('bucharestId', optional($this->capital())->id);
    }

    private function capital(): ?Locality
    {
        return Locality::whereName('Bucuresti')->first();
    }
}
