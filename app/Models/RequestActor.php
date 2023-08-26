<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RequestActor extends Model
{
    use HasFactory;
    protected $table = 'requestactors';
    protected $primaryKey = 'id';
    protected $fillable = ['Name', 'Img','Price','actors_id','users_id','Time'];


    public function Actor(): BelongsTo
    {
        return $this->belongsTo(Actor::class);
    }
}
