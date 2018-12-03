<?php

# App/Models/Media.php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class Media extends Model  
{
    protected $table = "media";

    protected $primaryKey = 'media_id';

	protected $fillable = array('media_id',
								'parent_media_id',
								'media_title', 
								'media_synopsis',
								'mime_type',
								'type_id',
								'status_id',
								'created_by_user_login',
								'media_url',
								'description',
								'created_at',
								'updated_at'
								);

	public function party_media()
	{
		return $this->hasMany('App\Models\Base\PartyMedia', 'media_id');
	}

}
