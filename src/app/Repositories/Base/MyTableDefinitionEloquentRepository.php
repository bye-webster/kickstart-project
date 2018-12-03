<?php 
namespace App\Repositories\Base;

use App\Models\Base\MyTableDefinition;
use App\Interfaces\Base\MyTableDefinitionRepository;

/**
 * Class MyTableDefinitionRepository
 * @package Repositories\MyTableDefinition
 * @author Bye Webster (bye.webster@gmail.com)
 */
class MyTableDefinitionEloquentRepository implements MyTableDefinitionRepository {
 
    /**
	 * @var $mytabledefinition
	 */
	private $mytabledefinition;
 
	/**
	 * MyTableDefinition constructor.
	 *
	 * @param MyTableDefinition $mytabledefinition
	 */
	public function __construct(MyTableDefinition $mytabledefinition)
	{
		$this->mytabledefinition = $mytabledefinition;
	}
 
	/**
	 * Get all mytabledefinition.
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function getAll()
	{
		return $this->mytabledefinition->all();
	}
 
	/**
	 * Get mytabledefinition by id.
	 *
	 * @param integer $id
	 *
	 * @return MyTableDefinition
	 */
	public function getById($id)
	{
		return $this->mytabledefinition->find($id);
	}
 
	/**
	 * Get mytabledefinition by field.
	 *
     * @param string $field
     * @param string $keyword
	 *
	 * @return MyTableDefinition
	 */
	public function getByField($field, $keyword)
	{
		return $this->mytabledefinition->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new mytabledefinition.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->mytabledefinition->with($relations)->get();

    }
 
	/**
	 * Create a new mytabledefinition.
	 *
	 * @param array $attributes
	 *
	 * @return MyTableDefinition
	 */
	public function create(array $attributes)
	{
		return $this->mytabledefinition->create($attributes);
	}
 
	/**
	 * Update a mytabledefinition.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return MyTableDefinition
	 */
	public function update($id, array $attributes)
	{
		return $this->mytabledefinition->find($id)->update($attributes);
	}
 
	/**
	 * Delete a mytabledefinition.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->mytabledefinition->find($id)->delete();
	}

}