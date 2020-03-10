<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Attachment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'applicant_id',
        'file',
    ];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
}
