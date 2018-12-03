<?php 
namespace App\Interfaces\Base;

use App\Models\Base\Country;

/**
 * Class CountryRepository
 * @package App\Repositories\Country
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface CountryRepository {

    /**
     * @return Country | object
     */
    public function getAll();
 
    /**
     * @param string $id
     * @return Country | object
     */
	public function getById($id);
 
    /**
     * @param string $field
     * @param string $keyword
     * @return Country | object
     */
    public function getByField($field, $keyword);
 
    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);
 
 
    /**
     * @param array $attributes
     * @return Country | object
     */
	public function create(array $attributes);
 
    /**
     * @param string $id
     * @param array $attributes
     * @return Country | object
     */
	public function update($id, array $attributes);
 
    /**
     * @param string $id
     * @return Country | object
     */
	public function delete($id);

}