<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class MessageModel extends Model
{
    use HasFactory;
    protected $table = 'messages';
    protected $fillable = [
       'sender_id',
'recipient_id',
'content',
'file',
'is_publish',
'is_confirm',
'is_read',
       
    ];

    public function sender(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'sender_id')->withDefault();
    }
    public function recipient(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'recipient_id')->withDefault();
    }
}
