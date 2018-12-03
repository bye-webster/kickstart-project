<?php 
namespace App\Repositories\Base;

use App\Models\Base\MyStatus;
use App\Interfaces\Base\MyStatusRepository;

/**
 * Class MyStatusRepository
 * @package Repositories\MyStatus
 * @author Bye Webster (bye.webster@gmail.com)
 */
class MyStatusEloquentRepository implements MyStatusRepository {
 
    /**
	 * @var $mystatus
	 */
	private $mystatus;
 
	/**
	 * MyStatus constructor.
	 *
	 * @param MyStatus $mystatus
	 */
	public function __construct(MyStatus $mystatus)
	{
		$this->mystatus = $mystatus;
	}
 
	/**
	 * Get all mystatus.
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function getAll()
	{
		return $this->mystatus->all();
	}
 
	/**
	 * Get mystatus by id.
	 *
	 * @param integer $id
	 *
	 * @return MyStatus
	 */
	public function getById($id)
	{
		return $this->mystatus->find($id);
	}
 
	/**
	 * Get mystatus by field.
	 *
     * @param string $field
     * @param string $keyword
	 *
	 * @return MyStatus
	 */
	public function getByField($field, $keyword)
	{
		return $this->mystatus->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new mystatus.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->mystatus->with($relations)->get();

    }
 
	/**
	 * Create a new mystatus.
	 *
	 * @param array $attributes
	 *
	 * @return MyStatus
	 */
	public function create(array $attributes)
	{
		return $this->mystatus->create($attributes);
	}
 
	/**
	 * Update a mystatus.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return MyStatus
	 */
	public function update($id, array $attributes)
	{
		return $this->mystatus->find($id)->update($attributes);
	}
 
	/**
	 * Delete a mystatus.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->mystatus->find($id)->delete();
	}

}