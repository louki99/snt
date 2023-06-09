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
        "published",
        "content"
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function parent()
    {
        return $this->belongsTo(Page::class, 'parent_id');
    }

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function childs()
    {
        return $this->hasMany(Page::class, 'parent_id');
    }


    public function getImagesByModule(string $moduleName)
    {
        // Retrieve media items from a specific module
        $mediaItems = $this->getMedia($moduleName);

        // Access the URLs of the media items
        // $imageUrls = $mediaItems->map(function ($media) {
        //     return $media->getUrl();
        // });

        return $mediaItems;
    }


}
