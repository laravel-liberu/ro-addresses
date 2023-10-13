<?php

use Illuminate\Database\Seeder;
use LaravelLiberu\Helpers\App\Classes\JsonReader;
use LaravelLiberu\RoAddresses\App\Models\County;

class CountySeeder extends Seeder
{
    private const Counties = __DIR__.'/../../vendor/laravel-liberu/ro-addresses/src/database/counties.json';

    public function run()
    {
        $this->counties()
            ->map(fn ($county) => $county + ['is_active' => true])
            ->each(fn ($county) => County::create($county));
    }

    public function counties()
    {
        return (new JsonReader(self::Counties))->collection();
    }
}
