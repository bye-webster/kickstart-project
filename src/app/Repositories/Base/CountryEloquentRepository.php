<?php 
namespace App\Repositories\Base;

use App\Models\Base\Country;
use App\Interfaces\Base\CountryRepository;

/**
 * Class CountryRepository
 * @package Repositories\Country
 * @author Bye Webster (bye.webster@gmail.com)
 */
class CountryEloquentRepository implements CountryRepository {
 
    /**
	 * @var $country
	 */
	private $country;
 
	/**
	 * Country constructor.
	 *
	 * @param Country $country
	 */
	public function __construct(Country $country)
	{
		$this->country = $country;
	}
 
	/**
	 * Get all country.
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function getAll()
	{
		return $this->country->all();
	}
 
	/**
	 * Get country by id.
	 *
	 * @param integer $id
	 *
	 * @return Country
	 */
	public function getById($id)
	{
		return $this->country->find($id);
	}
 
	/**
	 * Get country by field.
	 *
     * @param string $field
     * @param string $keyword
	 *
	 * @return Country
	 */
	public function getByField($field, $keyword)
	{
		return $this->country->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new country.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->country->with($relations)->get();

    }
 
	/**
	 * Create a new country.
	 *
	 * @param array $attributes
	 *
	 * @return Country
	 */
	public function create(array $attributes)
	{
		return $this->country->create($attributes);
	}
 
	/**
	 * Update a country.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return Country
	 */
	public function update($id, array $attributes)
	{
		return $this->country->find($id)->update($attributes);
	}
 
	/**
	 * Delete a country.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->country->find($id)->delete();
	}

}