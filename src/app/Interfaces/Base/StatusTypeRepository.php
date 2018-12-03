<?php 
namespace App\Interfaces\Base;

use App\Models\Base\StatusType;

/**
 * Class StatusTypeRepository
 * @package App\Repositories\StatusType
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface StatusTypeRepository {

    /**
     * @return StatusType | object
     */
    public function getAll();
 
    /**
     * @param string $id
     * @return StatusType | object
     */
	public function getById($id);
 
    /**
     * @param string $field
     * @param string $keyword
     * @return StatusType | object
     */
    public function getByField($field, $keyword);
 
    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);
 
 
    /**
     * @param array $attributes
     * @return StatusType | object
     */
	public function create(array $attributes);
 
    /**
     * @param string $id
     * @param array $attributes
     * @return StatusType | object
     */
	public function update($id, array $attributes);
 
    /**
     * @param string $id
     * @return StatusType | object
     */
	public function delete($id);

}