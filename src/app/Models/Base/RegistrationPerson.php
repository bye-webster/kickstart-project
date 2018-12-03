<?php

# App/Http/Models/RegistrationPerson.php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

final class RegistrationPerson extends Model  
{
    protected $table = "registration_person";
    protected $primaryKey = 'activation_key';

    protected $fillable = array(
                                'activation_key',
                                'activation_link',
                                'first_name',
                                'last_name',
                                'gender',
                                'birth_date',
                                'birth_place',
                                'email_address',
                                'terms_and_conditions',
                                'subscribes',
                                'phone_number',
                                'password',
                                'status_id');
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];
}

