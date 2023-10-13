<?php

namespace LaravelLiberu\RoAddresses\App\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelLiberu\Helpers\App\Contracts\Activatable;
use LaravelLiberu\Helpers\App\Traits\ActiveState;

class County extends Model implements Activatable
{
    use ActiveState;

    protected $fillable = ['abbreviation', 'name'];

    public function localities()
    {
        return $this->hasMany(Locality::class);
    }
}
