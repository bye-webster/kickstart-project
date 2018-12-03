<?php 
namespace App\Interfaces\Base;

use App\Models\Base\SecurityGroupPermission;

/**
 * Class SecurityGroupPermissionRepository
 * @package App\Repositories\SecurityGroupPermission
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface SecurityGroupPermissionRepository {

    /**
     * @return SecurityGroupPermission | object
     */
    public function getAll();
 
    /**
     * @param string $id
     * @return SecurityGroupPermission | object
     */
	public function getById($id);
 
    /**
     * @param string $field
     * @param string $keyword
     * @return SecurityGroupPermission | object
     */
    public function getByField($field, $keyword);
 
    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);
 
 
    /**
     * @param array $attributes
     * @return SecurityGroupPermission | object
     */
	public function create(array $attributes);
 
    /**
     * @param string $id
     * @param array $attributes
     * @return SecurityGroupPermission | object
     */
	public function update($id, array $attributes);
 
    /**
     * @param string $id
     * @return SecurityGroupPermission | object
     */
	public function delete($id);

}