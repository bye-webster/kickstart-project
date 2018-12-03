<?php

namespace App\Transformers;

use App\Models\Base\RegistrationPerson;
use League\Fractal\TransformerAbstract;

class RegistrationPersonTransformer extends TransformerAbstract
{
    public function transform(RegistrationPerson $registrationPerson)
    {
        $formattedRegistrationPerson = [
            'first_name'        => $registrationPerson->first_name,
            'last_name'       => $registrationPerson->last_name,
            'email_address'      => $registrationPerson->email_address,
            'activation_link'      => $registrationPerson->activation_link
        ];

        return $formattedRegistrationPerson;
    }
}