<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    /**
     * Get the phone Instruction associated with the category.
     */
    public function instruction()
    {
        return $this->hasOne('App\Instruction');
    }
}
