<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','slug','content','category_id','description','posted','imagen'];
    
    public  function category(){
        return $this->belongsto(Category::class);

    }

}
