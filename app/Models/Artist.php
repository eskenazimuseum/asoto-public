<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    public $fillable = ['name',
    'alternate_names',
    'display_dates',
    'life_dates',
    'active_locations',
    'media_used',
    'biography',
    'bibliography',
    'circle',
    'alphasort_name',
    'entry_notes'];

    public function timelines() {
        return $this->hasMany(Timeline::class);
    }

    public function artworks() {
        return $this->hasMany(Artwork::class);
    }

    public function relationships() {
        return $this->hasMany(Relationship::class);
    }
}
