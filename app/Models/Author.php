<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public $fillable = ['first_name', 'last_name', 'display_name', 'institution_name', 'image_path'];

    public function essays() {
        return $this->hasMany(Essay::class);
    }
}
