<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Page extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;


    protected $table = 'pages';

    protected $fillable = [
        "title",
        "definition",
        "inspiction",
        "act",
        "published"
    ];

    public function tabs()
    {
        return $this->hasMany(Tab::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
