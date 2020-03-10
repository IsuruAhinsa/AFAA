<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Applicant extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category',
        'avatar',
        'first_name',
        'last_name',
        'nic',
        'gender',
        'birthday',
        'body_color',
        'body_weight',
        'body_height',
        'hair_color',
        'country',
        'telephone_1',
        'telephone_2',
        'state',
        'city',
        'email',
        'street',
        'nationality',
        'zip',
        'language_skill',
        'year',
        'university',
        'degree',
        'experience',
    ];

    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }
}
