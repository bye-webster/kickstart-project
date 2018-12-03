<?php 
namespace App\Repositories\Base;

use App\Models\Base\MyType;
use App\Interfaces\Base\MyTypeRepository;

/**
 * Class MyTypeRepository
 * @package Repositories\MyType
 * @author Bye Webster (bye.webster@gmail.com)
 */
class MyTypeEloquentRepository implements MyTypeRepository {
 
    /**
	 * @var $mytype
	 */
	private $mytype;
 
	/**
	 * MyType constructor.
	 *
	 * @param MyType $mytype
	 */
	public function __construct(MyType $mytype)
	{
		$this->mytype = $mytype;
	}
 
	/**
	 * Get all mytype.
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function getAll()
	{
		return $this->mytype->all();
	}
 
	/**
	 * Get mytype by id.
	 *
	 * @param integer $id
	 *
	 * @return MyType
	 */
	public function getById($id)
	{
		return $this->mytype->find($id);
	}
 
	/**
	 * Get mytype by field.
	 *
     * @param string $field
     * @param string $keyword
	 *
	 * @return MyType
	 */
	public function getByField($field, $keyword)
	{
		return $this->mytype->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new mytype.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->mytype->with($relations)->get();

    }
 
	/**
	 * Create a new mytype.
	 *
	 * @param array $attributes
	 *
	 * @return MyType
	 */
	public function create(array $attributes)
	{
		return $this->mytype->create($attributes);
	}
 
	/**
	 * Update a mytype.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return MyType
	 */
	public function update($id, array $attributes)
	{
		return $this->mytype->find($id)->update($attributes);
	}
 
	/**
	 * Delete a mytype.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->mytype->find($id)->delete();
	}

}