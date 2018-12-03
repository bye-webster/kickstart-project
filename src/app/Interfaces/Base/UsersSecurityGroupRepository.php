<?php 
namespace App\Interfaces\Base;

use App\Models\Base\UsersSecurityGroup;

/**
 * Class UsersSecurityGroupRepository
 * @package App\Repositories\UsersSecurityGroup
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface UsersSecurityGroupRepository {

    /**
     * @return UsersSecurityGroup | object
     */
    public function getAll();
 
    /**
     * @param string $id
     * @return UsersSecurityGroup | object
     */
	public function getById($id);
 
    /**
     * @param string $field
     * @param string $keyword
     * @return UsersSecurityGroup | object
     */
    public function getByField($field, $keyword);
 
    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);
 
 
    /**
     * @param array $attributes
     * @return UsersSecurityGroup | object
     */
	public function create(array $attributes);
 
    /**
     * @param string $id
     * @param array $attributes
     * @return UsersSecurityGroup | object
     */
	public function update($id, array $attributes);
 
    /**
     * @param string $id
     * @return UsersSecurityGroup | object
     */
	public function delete($id);

}