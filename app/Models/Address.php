<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * @property int id
 * @property integer user_id
 * @property string address
 * @property string city
 * @property string state
 * @property string zipcode
 * @property string district
 * @property string number
 * @property string complement
 * @property User user
 */

class Address extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'address',
        'city',
        'state',
        'zipcode',
        'district',
        'number',
        'complement',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
