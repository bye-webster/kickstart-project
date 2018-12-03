<?php

# App/Models/City.php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class City extends Model  
{
    protected $table = "city";

    protected $primaryKey = 'city_id';

	protected $fillable = array('city_id',
								'city_name',
								'airport_code', 
								'province_id',
								'created_at',
								'updated_at'
								);

	public function province()
	{
		return $this->belongsTo('App\Models\Base\Province','city_id');
	}
}
