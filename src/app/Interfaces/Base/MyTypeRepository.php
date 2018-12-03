<?php 
namespace App\Interfaces\Base;

use App\Models\Base\MyType;

/**
 * Class MyTypeRepository
 * @package App\Repositories\MyType
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface MyTypeRepository {

    /**
     * @return MyType | object
     */
    public function getAll();
 
    /**
     * @param string $id
     * @return MyType | object
     */
	public function getById($id);
 
    /**
     * @param string $field
     * @param string $keyword
     * @return MyType | object
     */
    public function getByField($field, $keyword);
 
    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);
 
 
    /**
     * @param array $attributes
     * @return MyType | object
     */
	public function create(array $attributes);
 
    /**
     * @param string $id
     * @param array $attributes
     * @return MyType | object
     */
	public function update($id, array $attributes);
 
    /**
     * @param string $id
     * @return MyType | object
     */
	public function delete($id);

}