<?php 
namespace App\Repositories\Base;

use App\Models\Base\StatusType;
use App\Interfaces\Base\StatusTypeRepository;

/**
 * Class StatusTypeRepository
 * @package Repositories\StatusType
 * @author Bye Webster (bye.webster@gmail.com)
 */
class StatusTypeEloquentRepository implements StatusTypeRepository {
 
    /**
	 * @var $statustype
	 */
	private $statustype;
 
	/**
	 * StatusType constructor.
	 *
	 * @param StatusType $statustype
	 */
	public function __construct(StatusType $statustype)
	{
		$this->statustype = $statustype;
	}
 
	/**
	 * Get all statustype.
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function getAll()
	{
		return $this->statustype->all();
	}
 
	/**
	 * Get statustype by id.
	 *
	 * @param integer $id
	 *
	 * @return StatusType
	 */
	public function getById($id)
	{
		return $this->statustype->find($id);
	}
 
	/**
	 * Get statustype by field.
	 *
     * @param string $field
     * @param string $keyword
	 *
	 * @return StatusType
	 */
	public function getByField($field, $keyword)
	{
		return $this->statustype->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new statustype.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->statustype->with($relations)->get();

    }
 
	/**
	 * Create a new statustype.
	 *
	 * @param array $attributes
	 *
	 * @return StatusType
	 */
	public function create(array $attributes)
	{
		return $this->statustype->create($attributes);
	}
 
	/**
	 * Update a statustype.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return StatusType
	 */
	public function update($id, array $attributes)
	{
		return $this->statustype->find($id)->update($attributes);
	}
 
	/**
	 * Delete a statustype.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->statustype->find($id)->delete();
	}

}