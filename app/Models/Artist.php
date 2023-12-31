<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Artist extends Model
{
    use HasFactory;
    protected $table = 'artists';
    protected $primaryKey = 'id';
    protected $fillable = ['Name', 'Product','Sex', 'BirthDate','Img','Price','Description'];

    public function Request(): BelongsToMany
    {
        return $this->belongsToMany(Request::class);
    }
}
