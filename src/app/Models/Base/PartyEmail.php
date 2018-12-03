<?php

# App/Models/PartyEmail.php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class PartyEmail extends Model  
{
    protected $table = "party_email";

    protected $primaryKey = 'party_email_id';

	protected $fillable = array('party_email_id',
								'party_id',
								'email',
								'email2',
								'email3',
								'description',
								'created_at',
								'updated_at'
								);

	public function party()
	{
		return $this->belongsTo('App\Models\Base\Party', 'party_id');
	}
}
