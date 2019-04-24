<?php

namespace Hackerpair;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Cviebrock\EloquentSluggable\Sluggable; 
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Event extends Model
{
    use SoftDeletes;
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
