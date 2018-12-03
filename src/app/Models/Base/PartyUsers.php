<?php

# App/Http/Models/PartyUsers.php
namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class PartyUsers extends Model  
{

    protected $table = "party_users";

    protected $primaryKey = 'party_users_id';

	protected $fillable = array('party_users_id',
								'party_id',
								'email',
								'created_at',
								'updated_at'
								);

	public function party()
	{
		return $this->belongsTo('App\Models\Base\Party', 'party_id');
	}

	public function users()
	{
		return $this->belongsTo('App\Models\Base\User', 'email');
	}

}
