<?php

# App/Models/PartyMedia.php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class PartyMedia extends Model  
{

    protected $table = "party_media";

    protected $primaryKey = 'party_media_id';

	protected $fillable = array('party_media_id',
								'party_id',
								'media_id',
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

    public function media()
    {
        return $this->belongsTo('App\Models\Base\Media', 'media_id');
    }
}
