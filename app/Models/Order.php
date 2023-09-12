<?php

namespace App\Models;

use App\Enums\OrderStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;


/**
 * @property int id
 * @property int user_id
 * @property int session_id
 * @property float total
 * @property OrderStatusEnum status
 * @property User user
 * @property Collection skus
 * @property Collection payments
 * @property Collection shippings
 */
class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'session_id',
        'total',
        'status',
    ];

    protected $casts = [
        'status' => OrderStatusEnum::class
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function skus(): BelongsToMany
    {
        return $this->belongsToMany(Sku::class)->using(OrderSku::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function shippings(): HasMany
    {
        return $this->hasMany(Shipping::class);
    }
}
