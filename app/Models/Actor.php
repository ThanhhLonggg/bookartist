<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Actor extends Model
{
    use HasFactory;
    protected $table = 'actors';
    protected $primaryKey = 'id';
    protected $fillable = ['Name', 'Product','Img', 'Sex','BirthDate','Description','Price'];

    public function Request(): BelongsToMany
    {
        return $this->belongsToMany(Request::class);
    }
}
