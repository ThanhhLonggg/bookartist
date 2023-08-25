<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Request extends Model
{
    use HasFactory;
    protected $table = 'requests';
    protected $primaryKey = 'id';
    protected $fillable = ['Name', 'Img','Price','artists_id','users_id','Time'];

    public function Artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }
}
