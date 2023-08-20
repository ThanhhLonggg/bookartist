<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RequestActor extends Model
{
    use HasFactory;
    protected $table = 'requests';
    protected $primaryKey = 'id';
    protected $fillable = ['Firstname', 'Lastname','actors_id','users_id'];

    public function Customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
    public function Actor(): BelongsTo
    {
        return $this->belongsTo(Actor::class);
    }
}

