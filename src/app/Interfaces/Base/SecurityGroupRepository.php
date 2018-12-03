<?php 
namespace App\Interfaces\Base;

use App\Models\Base\SecurityGroup;

/**
 * Class SecurityGroupRepository
 * @package App\Repositories\SecurityGroup
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface SecurityGroupRepository {

    /**
     * @return SecurityGroup | object
     */
    public function getAll();
 
    /**
     * @param string $id
     * @return SecurityGroup | object
     */
	public function getById($id);
 
    /**
     * @param string $field
     * @param string $keyword
     * @return SecurityGroup | object
     */
    public function getByField($field, $keyword);
 
    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);
 
 
    /**
     * @param array $attributes
     * @return SecurityGroup | object
     */
	public function create(array $attributes);
 
    /**
     * @param string $id
     * @param array $attributes
     * @return SecurityGroup | object
     */
	public function update($id, array $attributes);
 
    /**
     * @param string $id
     * @return SecurityGroup | object
     */
	public function delete($id);

}