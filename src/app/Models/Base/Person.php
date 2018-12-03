<?php

# App/Models/Person.php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class Person extends Model
{
    protected $table = "person";

    protected $primaryKey = 'party_id';

    protected $fillable = array('party_id',
        'subscribes',
        'first_name',
        'last_name',
        'nick_name',
        'personal_title',
        'gender',
        'birth_place',
        'birth_date',
        'mothers_maiden_name',
        'description',
        'created_at',
        'updated_at'
    );

    public function party()
    {
        return $this->belongsTo('App\Models\Base\Party', 'party_id');
    }

    public function user_login()
    {
        return $this->belongsTo('App\Models\Base\UserLogin', 'user_login_id');
    }
}
