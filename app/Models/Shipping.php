<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * @property int id
* @property string address
* @property string city
* @property string state
* @property string zipcode
* @property string district
* @property string number
* @property string complement
* @property string tracking_code
* @property string status
* @property Order order
 */
class Shipping extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_id',
        'address',
        'city',
        'state',
        'zipcode',
        'district',
        'number',
        'complement',
        'tracking_code',
        'status',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
