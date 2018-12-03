<?php 
namespace App\Interfaces\Base;

use App\Models\Base\MyTableDefinition;

/**
 * Class MyTableDefinitionRepository
 * @package App\Repositories\MyTableDefinition
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface MyTableDefinitionRepository {

    /**
     * @return MyTableDefinition | object
     */
    public function getAll();
 
    /**
     * @param string $id
     * @return MyTableDefinition | object
     */
	public function getById($id);
 
    /**
     * @param string $field
     * @param string $keyword
     * @return MyTableDefinition | object
     */
    public function getByField($field, $keyword);
 
    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);
 
 
    /**
     * @param array $attributes
     * @return MyTableDefinition | object
     */
	public function create(array $attributes);
 
    /**
     * @param string $id
     * @param array $attributes
     * @return MyTableDefinition | object
     */
	public function update($id, array $attributes);
 
    /**
     * @param string $id
     * @return MyTableDefinition | object
     */
	public function delete($id);

}