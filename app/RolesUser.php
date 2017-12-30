<?php

namespace gestion_academica;

use Illuminate\Database\Eloquent\Model;

class RolesUser extends Model
{
    /**
     * The attributes that are fillable via mass assignment.
     *
     * @var array
     */
    protected $fillable = ['role_id', 'user_id'];
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'role_user';

}
