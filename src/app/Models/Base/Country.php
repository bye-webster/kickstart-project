<?php

# App/Models/Country.php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class Country extends Model  
{
    protected $table = 'country';
    
    protected $primaryKey = 'country_id';

    protected $fillable = array('country_id',
                                'country_name',
                                'type_id',
                                'status_id',
                                'description',
                                'created_at',
                                'updated_at'
                                );
}
