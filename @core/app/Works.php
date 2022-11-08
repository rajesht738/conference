<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    protected $table = 'works';
    protected $fillable = [
        'title',
        'lang',
        'categories_id',
        'start_date',
        'end_date',
        'clients',
        'description',
        'whatweare',
        'why_do_attend',
        'conference_topics',
        'key_dates',
        'sponsherships',
        'ocm',
        'venue',
        'image',
        'banner_image',
        'notice',
        'gallery',
        'slug',
        'meta_tags',
        'meta_description',
        'gallery',
        'status',
    ];

    public function getCategoriesIdAttribute($value)
    {
        return unserialize($value);
    }
}
