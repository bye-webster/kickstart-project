<?php

# App/Models/MayaPage.php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class MayaPage extends Model  
{
    protected $table = "maya_page";

    protected $primaryKey = 'page_id';

	protected $fillable = array('page_id',
								'parent_page_id',
								'page_name', 
								'type_id',
								'status_id',
								'description',
								'created_at',
								'updated_at'
								);

	public function my_status()
	{
		return $this->hasMany('App\Models\Base\MyStatus', 'status_id');
	}
    
	public function my_type()
	{
		return $this->hasMany('App\Models\Base\MyType', 'type_id');
	}
}
