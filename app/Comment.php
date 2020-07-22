<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'comment' => 'required',
    );
    
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
