<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Tab extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $table = 'tabs';

    protected $fillable = [
        'title',
        'content',
    ];


    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
