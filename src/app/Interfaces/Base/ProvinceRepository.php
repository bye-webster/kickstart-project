<?php 
namespace App\Interfaces\Base;

use App\Models\Base\Province;

/**
 * Class ProvinceRepository
 * @package App\Repositories\Province
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface ProvinceRepository {

    /**
     * @return Province | object
     */
    public function getAll();
 
    /**
     * @param string $id
     * @return Province | object
     */
	public function getById($id);
 
    /**
     * @param string $field
     * @param string $keyword
     * @return Province | object
     */
    public function getByField($field, $keyword);
 
    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);
 
 
    /**
     * @param array $attributes
     * @return Province | object
     */
	public function create(array $attributes);
 
    /**
     * @param string $id
     * @param array $attributes
     * @return Province | object
     */
	public function update($id, array $attributes);
 
    /**
     * @param string $id
     * @return Province | object
     */
	public function delete($id);

}