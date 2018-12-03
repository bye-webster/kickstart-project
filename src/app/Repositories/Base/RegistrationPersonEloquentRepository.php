<?php
namespace App\Repositories\Base;

use App\Models\Base\RegistrationPerson;
use App\Interfaces\Base\RegistrationPersonRepository;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use App\Mails\RegistrationEmail;
use Illuminate\Support\Facades\Mail;

/**
 * Class RegistrationPersonRepository
 * @package Repositories\RegistrationPerson
 * @author Bye Webster (bye.webster@gmail.com)
 */
class RegistrationPersonEloquentRepository implements RegistrationPersonRepository {

    const TYPE_ID = 'MEMBER';
    const STATUS_ID = 'PTY_NOT_ACTIVE';

    /**
     * @var $registrationperson
     */
    private $registrationperson;

    /**
     * RegistrationPerson constructor.
     *
     * @param RegistrationPerson $registrationperson
     */
    public function __construct(RegistrationPerson $registrationperson)
    {
        $this->registrationperson = $registrationperson;
    }

    /**
     * Get all registrationperson.
     *
     * @return mixed The current repository object relations instance.
     */
    public function getAll()
    {
        return $this->registrationperson->all();
    }

    /**
     * Get registrationperson by id.
     *
     * @param integer $id
     *
     * @return RegistrationPerson
     */
    public function getById($id)
    {
        return $this->registrationperson->find($id);
    }

    /**
     * Get registrationperson by field.
     *
     * @param string $field
     * @param string $keyword
     *
     * @return RegistrationPerson
     */
    public function getByField($field, $keyword)
    {
        return $this->registrationperson->where($field, 'like', '%' . $keyword . '%')->get();
    }

    /**
     * Create a new registrationperson.
     *
     * @param array|string $relations
     *
     * @return mixed The current repository object relations instance.
     */
    public function with($relations)
    {
        return $this->registrationperson->with($relations)->get();

    }

    /**
     * Create a new registrationperson.
     *
     * @param array $attributes
     *
     * @return RegistrationPerson
     */
    public function create(array $attributes)
    {

        if (isset($attributes['password'])) {
            $attributes['password'] = Hash::make($attributes['password']); /* $data['password']; */
        }

        $attributes['activation_key'] = randomer_number();
        $attributes['activation_link'] = 'http://dev.kongkow.nusantara.com/api/v1/account_confirmation/'.$attributes['activation_key'];

        $attributes['type_id'] = self::TYPE_ID;
        $attributes['status_id'] = self::STATUS_ID;
        $registrationPerson = $this->registrationperson->create($attributes);

        //Mail::to($data['email_address'])->send(new RegistrationEmail($registrationPerson));

        return $registrationPerson;
    }

    /**
     * Update a registrationperson.
     *
     * @param integer $id
     * @param array $attributes
     *
     * @return RegistrationPerson
     */
    public function update($id, array $attributes)
    {
        return $this->registrationperson->find($id)->update($attributes);
    }

    /**
     * Delete a registrationperson.
     *
     * @param integer $id
     *
     * @return boolean
     */
    public function delete($id)
    {
        return $this->registrationperson->find($id)->delete();
    }

}