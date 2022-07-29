<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;

class Advertisement extends Model
{
    protected $table = 'advertisement';

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('titile' , 'description' , 'type' , 'category_id' , 'tag_id');

    public function tags()
    {
        return $this->hasMany(Tag::class , 'id' , 'tag_id');
    }

    public function category()
    {
        return $this->hasOne(Category::class , 'id' , 'category_id');
    }

}
