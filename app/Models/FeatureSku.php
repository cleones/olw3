<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int id
 * @property int sku_id
 * @property int feature_id
 * @property string value
 */
class FeatureSku extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'sku_id',
        'feature_id',
        'value',
    ];
}
