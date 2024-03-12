<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    protected $with = ['category', 'user'];


    public function scopeFilter($query, array $filters)
    {

        // jika true apa yg mau di lakukan 
        // null coalising
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });


    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    } 

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // setiap route bakalan mencari dengan slug
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // membuat slug
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
