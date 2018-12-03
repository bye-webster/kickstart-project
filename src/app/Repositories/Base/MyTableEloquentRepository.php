<?php 
namespace App\Repositories\Base;

use App\Models\Base\MyTable;
use App\Interfaces\Base\MyTableRepository;

/**
 * Class MyTableRepository
 * @package Repositories\MyTable
 * @author Bye Webster (bye.webster@gmail.com)
 */
class MyTableEloquentRepository implements MyTableRepository {
 
    /**
	 * @var $mytable
	 */
	private $mytable;
 
	/**
	 * MyTable constructor.
	 *
	 * @param MyTable $mytable
	 */
	public function __construct(MyTable $mytable)
	{
		$this->mytable = $mytable;
	}
 
	/**
	 * Get all mytable.
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function getAll()
	{
		return $this->mytable->all();
	}
 
	/**
	 * Get mytable by id.
	 *
	 * @param integer $id
	 *
	 * @return MyTable
	 */
	public function getById($id)
	{
		return $this->mytable->find($id);
	}
 
	/**
	 * Get mytable by field.
	 *
     * @param string $field
     * @param string $keyword
	 *
	 * @return MyTable
	 */
	public function getByField($field, $keyword)
	{
		return $this->mytable->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new mytable.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->mytable->with($relations)->get();

    }
 
	/**
	 * Create a new mytable.
	 *
	 * @param array $attributes
	 *
	 * @return MyTable
	 */
	public function create(array $attributes)
	{
		return $this->mytable->create($attributes);
	}
 
	/**
	 * Update a mytable.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return MyTable
	 */
	public function update($id, array $attributes)
	{
		return $this->mytable->find($id)->update($attributes);
	}
 
	/**
	 * Delete a mytable.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->mytable->find($id)->delete();
	}

}