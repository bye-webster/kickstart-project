<?php 
namespace App\Repositories\Base;

use App\Models\Base\Province;
use App\Interfaces\Base\ProvinceRepository;

/**
 * Class ProvinceRepository
 * @package Repositories\Province
 * @author Bye Webster (bye.webster@gmail.com)
 */
class ProvinceEloquentRepository implements ProvinceRepository {
 
    /**
	 * @var $province
	 */
	private $province;
 
	/**
	 * Province constructor.
	 *
	 * @param Province $province
	 */
	public function __construct(Province $province)
	{
		$this->province = $province;
	}
 
	/**
	 * Get all province.
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function getAll()
	{
		return $this->province->all();
	}
 
	/**
	 * Get province by id.
	 *
	 * @param integer $id
	 *
	 * @return Province
	 */
	public function getById($id)
	{
		return $this->province->find($id);
	}
 
	/**
	 * Get province by field.
	 *
     * @param string $field
     * @param string $keyword
	 *
	 * @return Province
	 */
	public function getByField($field, $keyword)
	{
		return $this->province->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new province.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->province->with($relations)->get();

    }
 
	/**
	 * Create a new province.
	 *
	 * @param array $attributes
	 *
	 * @return Province
	 */
	public function create(array $attributes)
	{
		return $this->province->create($attributes);
	}
 
	/**
	 * Update a province.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return Province
	 */
	public function update($id, array $attributes)
	{
		return $this->province->find($id)->update($attributes);
	}
 
	/**
	 * Delete a province.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->province->find($id)->delete();
	}

}