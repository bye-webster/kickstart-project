<?php

# App/Models/Province.php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class Province extends Model  
{
    protected $table = "province";

    protected $primaryKey = 'province_id';

	protected $fillable = array('province_id',
								'province_name',
								'description',
								'created_at',
								'updated_at'
								);
    
	public function city()
	{
		return $this->hasMany('App\Models\Base\City', 'city_id');
	}

}
