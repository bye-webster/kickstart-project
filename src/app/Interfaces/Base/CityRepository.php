<?php 
namespace App\Interfaces\Base;

use App\Models\City;

/**
 * Class CityRepository
 * @package App\Repositories\City
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface CityRepository {

    /**
     * @return City | object
     */
    public function getAll();
 
    /**
     * @param string $id
     * @return City | object
     */
	public function getById($id);
 
    /**
     * @param string $field
     * @param string $keyword
     * @return City | object
     */
    public function getByField($field, $keyword);
 
    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);
 
 
    /**
     * @param array $attributes
     * @return City | object
     */
	public function create(array $attributes);
 
    /**
     * @param string $id
     * @param array $attributes
     * @return City | object
     */
	public function update($id, array $attributes);
 
    /**
     * @param string $id
     * @return City | object
     */
	public function delete($id);

}