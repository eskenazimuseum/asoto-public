<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Essay extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'preview',
        'cite_mla',
        'cite_chicago',
        'body',
        'bibliography'
    ];

    public function author() {
        return $this->belongsTo(Author::class);
    }
}
