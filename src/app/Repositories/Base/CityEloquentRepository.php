<?php 
namespace App\Repositories;

use App\Models\Base\City;
use App\Interfaces\Base\CityRepository;

/**
 * Class CityRepository
 * @package Repositories\City
 * @author Bye Webster (bye.webster@gmail.com)
 */
class CityEloquentRepository implements CityRepository {
 
    /**
	 * @var $city
	 */
	private $city;
 
	/**
	 * City constructor.
	 *
	 * @param City $city
	 */
	public function __construct(City $city)
	{
		$this->city = $city;
	}
 
	/**
	 * Get all city.
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function getAll()
	{
		return $this->city->all();
	}
 
	/**
	 * Get city by id.
	 *
	 * @param integer $id
	 *
	 * @return City
	 */
	public function getById($id)
	{
		return $this->city->find($id);
	}
 
	/**
	 * Get city by field.
	 *
     * @param string $field
     * @param string $keyword
	 *
	 * @return City
	 */
	public function getByField($field, $keyword)
	{
		return $this->city->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new city.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->city->with($relations)->get();

    }
 
	/**
	 * Create a new city.
	 *
	 * @param array $attributes
	 *
	 * @return City
	 */
	public function create(array $attributes)
	{
		return $this->city->create($attributes);
	}
 
	/**
	 * Update a city.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return City
	 */
	public function update($id, array $attributes)
	{
		return $this->city->find($id)->update($attributes);
	}
 
	/**
	 * Delete a city.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->city->find($id)->delete();
	}

}