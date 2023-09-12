<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int id
 * @property int | null external_id
 * @property int order_id
 * @property int method
 * @property int status
 * @property int installments
 * @property Carbon approved_at
 * @property string qr_code_64
 * @property string qr_code
 * @property string ticket_url
 * @property Order order
 */
class Payment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'external_id',
        'order_id',
        'method',
        'status',
        'installments',
        'approved_at',
        'qr_code_64',
        'qr_code',
        'ticket_url',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
