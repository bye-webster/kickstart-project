<?php

# App/Models/PartyAddress.php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class PartyAddress extends Model  
{
    protected $table = "party_address";

    protected $primaryKey = 'party_address_id';

	protected $fillable = array('party_address_id',
								'address',
								'area',
								'city',
								'country',
								'coordinate',
								'description',
								'created_at',
								'updated_at'
								);

	public function party()
	{
		return $this->belongsTo('App\Models\Base\Party', 'party_id');
	}
}
