<?php 
namespace App\Repositories\Base;

use App\Models\Base\Person;
use App\Interfaces\Base\PersonRepository;

/**
 * Class PersonRepository
 * @package Repositories\Person
 * @author Bye Webster (bye.webster@gmail.com)
 */
class PersonEloquentRepository implements PersonRepository {
 
    /**
	 * @var $person
	 */
	private $person;
 
	/**
	 * Person constructor.
	 *
	 * @param Person $person
	 */
	public function __construct(Person $person)
	{
		$this->person = $person;
	}
 
	/**
	 * Get all person.
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function getAll()
	{
		return $this->person->all();
	}
 
	/**
	 * Get person by id.
	 *
	 * @param integer $id
	 *
	 * @return Person
	 */
	public function getById($id)
	{
		return $this->person->find($id);
	}
 
	/**
	 * Get person by field.
	 *
     * @param string $field
     * @param string $keyword
	 *
	 * @return Person
	 */
	public function getByField($field, $keyword)
	{
		return $this->person->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new person.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->person->with($relations)->get();

    }
 
	/**
	 * Create a new person.
	 *
	 * @param array $attributes
	 *
	 * @return Person
	 */
	public function create(array $attributes)
	{
		return $this->person->create($attributes);
	}
 
	/**
	 * Update a person.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return Person
	 */
	public function update($id, array $attributes)
	{
		return $this->person->find($id)->update($attributes);
	}
 
	/**
	 * Delete a person.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->person->find($id)->delete();
	}

}