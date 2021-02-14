<?php

namespace GenesysLite\GenesysBusiness\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Establishment extends Model
{
    protected $with = ['country', 'department', 'province', 'district'];
    protected $fillable = [
        'description',
        'country_id',
        'department_id',
        'province_id',
        'district_id',
        'address',
        'email',
        'telephone',
        'code',
        'trade_address',
        'web_address',
        'aditional_information',
        'customer_id',
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(config('genesysBusiness.models.country'));
    }
    public function department(): BelongsTo
    {
        return $this->belongsTo(config('genesysBusiness.models.department'));
    }
    public function province(): BelongsTo
    {
        return $this->belongsTo(config('genesysBusiness.models.province'));
    }
    public function district(): BelongsTo
    {
        return $this->belongsTo(config('genesysBusiness.models.district'));
    }

    public function getAddressFullAttribute(): string
    {
        $address = ($this->address != '-')? $this->address.' ,' : '';
        return "{$address} {$this->department->description} - {$this->province->description} - {$this->district->description}";
    }


}
