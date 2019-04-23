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
}
