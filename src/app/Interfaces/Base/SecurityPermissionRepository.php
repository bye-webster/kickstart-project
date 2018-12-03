<?php 
namespace App\Interfaces\Base;

use App\Models\Base\SecurityPermission;

/**
 * Class SecurityPermissionRepository
 * @package App\Repositories\SecurityPermission
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface SecurityPermissionRepository {

    /**
     * @return SecurityPermission | object
     */
    public function getAll();
 
    /**
     * @param string $id
     * @return SecurityPermission | object
     */
	public function getById($id);
 
    /**
     * @param string $field
     * @param string $keyword
     * @return SecurityPermission | object
     */
    public function getByField($field, $keyword);
 
    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);
 
 
    /**
     * @param array $attributes
     * @return SecurityPermission | object
     */
	public function create(array $attributes);
 
    /**
     * @param string $id
     * @param array $attributes
     * @return SecurityPermission | object
     */
	public function update($id, array $attributes);
 
    /**
     * @param string $id
     * @return SecurityPermission | object
     */
	public function delete($id);

}