<?php

namespace LaravelLiberu\RoAddresses\App\Imports\Validators;

use LaravelLiberu\DataImport\App\Services\Validators\Validator;
use LaravelLiberu\Helpers\App\Classes\Obj;
use LaravelLiberu\RoAddresses\App\Models\County;
use LaravelLiberu\RoAddresses\App\Models\Locality;

class LocalityUpdateValidator extends Validator
{
    public function run(Obj $row, \LaravelLiberu\Core\App\Models\User $user, \LaravelLiberu\Helpers\App\Classes\Obj $params)
    {
        $county = County::whereName($row->county)->first();

        $count = Locality::whereName($row->locality)
            ->where('county_id', $county->id)
            ->when($row->township !== null, fn ($query) => $query->whereTownship($row->township))
            ->count();

        if ($count === 0) {
            $this->addError(__(
                'The locality is not present in the database'
            ));
        }

        if ($count > 1) {
            $this->addError(__(
                'There are more localities that match the criteria'
            ));
        }
    }
}
