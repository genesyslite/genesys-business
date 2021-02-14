<?php

namespace GenesysLite\GenesysBusiness\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Configuration extends Model
{
    protected $fillable = [
        'field',
        'value',
        'type'
    ];

    public function scopeBusiness($query)
    {
        return $query->where('type', 'Business')->get();
    }

    public function scopeSoapType($query)
    {
        return $query->where('field', 'soap_type_id')->first();
    }

    public function scopeOperationAmazonia($query): bool
    {
        $select = $query->where('field', 'operation_amazonia')->first();
        return (boolean)$select->value;
    }

    public function scopeSendAuto($query): bool
    {
        $select = $query->where('field', 'send_auto')->first();
        return (boolean)$select->value;
    }


    public function scopeBusinessData($query)
    {
        $data = $query->get();
        $result = array();
        foreach ($data as $file) {
            $result[$file->field] = $file->value;
        }
        return (object)$result;
    }
}
