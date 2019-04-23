<?php

namespace Hackerpair;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable; 
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Event extends Model
{
    use Sluggable, SluggableScopeHelpers; 

    public function sluggable() {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return $this->getSlugKeyName();
    }

    protected $fillable = [
        'name',
        'venue',
        'city',
        'description',
    ];
}
