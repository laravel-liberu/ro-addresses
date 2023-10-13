<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use LaravelLiberu\Helpers\App\Classes\JsonReader;

class LocalitySeeder extends Seeder
{
    final public const Localities = __DIR__.'/../../vendor/laravel-enso/ro-addresses/src/database/localities';

    public function run()
    {
        $this->counties()->each(fn ($county) => DB::table('localities')
            ->insert($this->localities($county)));
    }

    private function localities($county): array
    {
        $fileName = self::Localities.DIRECTORY_SEPARATOR.$county->getFileName();

        return (new JsonReader($fileName))->collection()
            ->map(fn ($locality) => ['is_active' => true] + $locality)
            ->toArray();
    }

    private function counties(): Collection
    {
        return (new Collection(File::files(self::Localities)))
            ->when(App::runningUnitTests(), fn ($counties) => $counties->slice(0, 1));
    }
}
