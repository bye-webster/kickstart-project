<?php 
namespace App\Interfaces\Base;

use App\Models\Base\Person;

/**
 * Class PersonRepository
 * @package App\Repositories\Person
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface PersonRepository {

    /**
     * @return Person | object
     */
    public function getAll();
 
    /**
     * @param string $id
     * @return Person | object
     */
	public function getById($id);
 
    /**
     * @param string $field
     * @param string $keyword
     * @return Person | object
     */
    public function getByField($field, $keyword);
 
    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);
 
 
    /**
     * @param array $attributes
     * @return Person | object
     */
	public function create(array $attributes);
 
    /**
     * @param string $id
     * @param array $attributes
     * @return Person | object
     */
	public function update($id, array $attributes);
 
    /**
     * @param string $id
     * @return Person | object
     */
	public function delete($id);

}