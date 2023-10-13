<?php

namespace LaravelLiberu\RoAddresses\App\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelLiberu\Helpers\App\Contracts\Activatable;
use LaravelLiberu\Helpers\App\Traits\ActiveState;

class Locality extends Model implements Activatable
{
    use ActiveState;

    protected $fillable = [
        'county_id', 'name', 'township', 'siruta', 'lat', 'long', 'is_active',
    ];

    protected $appends = ['label'];

    protected $casts = ['is_active' => 'boolean'];

    public function county()
    {
        return $this->belongsTo(County::class);
    }

    public function getLabelAttribute()
    {
        $label = $this->siruta
            ? $this->name.' - '.$this->siruta
            : $this->name;

        return $this->township
            ? $label.' ('.$this->township.')'
            : $label;
    }
}
