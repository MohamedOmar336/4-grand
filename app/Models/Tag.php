<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;

class Tag extends Model
{
    protected $table = 'tag';

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name');

    public function tags()
    {
        return $this->belongsToMany('App\Models\tag');
    }

    public function getTagIdAttribute($value)
    {
        $name = 0;
        if ($this->tag_id != 0) {
            $name = [];
            $values = explode('/', $this->tag_id);
            $values[] = $this->id;
            foreach ($values as $key => $value) {
                $item = Category::find($value);
            }
            $name = array_filter($name, 'strlen');
        }
        return $this->tag_id;
    }
}
