<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //  protected $fillable = [
    //     'title', 'description', 'image',
    // ];
     // protected $guarded = [];
    protected $fillable = array('title', 'description', 'image');

    public function job(){
         return $this->belongsToMany('App\Job');
    }
    public function rules()
    {
        return [
            'image' => 'required | mimes:jpeg,jpg,png | max:5000',

        ];
    }
}
