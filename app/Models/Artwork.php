<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use HasFactory;

    public $fillable = [
        'primary_title',
        'alternate_titles',
        'artist_id',
        'credit_line',
        'home_institution',
        'institution_link',
        'image_path',
        'date'];

    public function artist() {
        return $this->belongsTo(Artist::class);
    }
}
