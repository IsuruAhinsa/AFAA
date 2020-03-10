<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Instruction extends Model
{
    /**
     * Get the category that owns the instruction.
     */
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
}
