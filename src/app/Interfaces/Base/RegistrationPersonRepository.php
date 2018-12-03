<?php
namespace App\Interfaces\Base;

use App\Models\Base\RegistrationPerson;

/**
 * Class RegistrationPersonRepository
 * @package App\Repositories\RegistrationPerson
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface RegistrationPersonRepository {

    /**
     * @return RegistrationPerson | object
     */
    public function getAll();

    /**
     * @param string $id
     * @return RegistrationPerson | object
     */
    public function getById($id);

    /**
     * @param string $field
     * @param string $keyword
     * @return RegistrationPerson | object
     */
    public function getByField($field, $keyword);

    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);


    /**
     * @param array $attributes
     * @return RegistrationPerson | object
     */
    public function create(array $attributes);

    /**
     * @param string $id
     * @param array $attributes
     * @return RegistrationPerson | object
     */
    public function update($id, array $attributes);

    /**
     * @param string $id
     * @return RegistrationPerson | object
     */
    public function delete($id);

}