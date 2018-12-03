<?php

# App/Models/PartyPhone.php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class PartyPhone extends Model  
{
    protected $table = "party_phone";

    protected $primaryKey = 'party_phone_id';

	protected $fillable = array('party_phone_id',
								'party_id',
								'phone_number',
								'phone_number2',
								'phone_number3',
								'type_id',
								'status_id',
								'description',
								'created_at',
								'updated_at'
								);

	public function party()
	{
		return $this->belongsTo('App\Models\Base\Party', 'party_id');
	}
}
