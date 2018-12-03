<?php

# App/Models/Party.php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class Party extends Model
{
    protected $table = "party";

    protected $primaryKey = 'party_id';

    protected $fillable = array('party_id',
        'type_id',
        'status_id',
        'created_by_user_login',
        'description',
        'created_at',
        'updated_at'
    );

    public function person()
    {
        return $this->hasOne('App\Models\Base\Person', 'party_id');
    }

    public function party_address()
    {
        return $this->hasMany('App\Models\Base\PartyAddress', 'party_id');
    }

    public function party_email()
    {
        return $this->hasMany('App\Models\Base\PartyEmail', 'party_id');
    }

    public function party_media()
    {
        return $this->hasMany('App\Models\Base\PartyMedia', 'party_id');
    }

    public function party_phone()
    {
        return $this->hasMany('App\Models\Base\PartyPhone', 'party_id');
    }

    public function party_user_login()
    {
        return $this->hasOne('App\Models\Base\PartyUsers', 'party_id');
    }

}
