<?php 
namespace App\Repositories\Base;

use App\Models\Base\SecurityGroupPermission;
use App\Interfaces\Base\SecurityGroupPermissionRepository;

/**
 * Class SecurityGroupPermissionRepository
 * @package Repositories\SecurityGroupPermission
 * @author Bye Webster (bye.webster@gmail.com)
 */
class SecurityGroupPermissionEloquentRepository implements SecurityGroupPermissionRepository {
 
    /**
	 * @var $securitygrouppermission
	 */
	private $securitygrouppermission;
 
	/**
	 * SecurityGroupPermission constructor.
	 *
	 * @param SecurityGroupPermission $securitygrouppermission
	 */
	public function __construct(SecurityGroupPermission $securitygrouppermission)
	{
		$this->securitygrouppermission = $securitygrouppermission;
	}
 
	/**
	 * Get all securitygrouppermission.
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function getAll()
	{
		return $this->securitygrouppermission->all();
	}
 
	/**
	 * Get securitygrouppermission by id.
	 *
	 * @param integer $id
	 *
	 * @return SecurityGroupPermission
	 */
	public function getById($id)
	{
		return $this->securitygrouppermission->find($id);
	}
 
	/**
	 * Get securitygrouppermission by field.
	 *
     * @param string $field
     * @param string $keyword
	 *
	 * @return SecurityGroupPermission
	 */
	public function getByField($field, $keyword)
	{
		return $this->securitygrouppermission->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new securitygrouppermission.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->securitygrouppermission->with($relations)->get();

    }
 
	/**
	 * Create a new securitygrouppermission.
	 *
	 * @param array $attributes
	 *
	 * @return SecurityGroupPermission
	 */
	public function create(array $attributes)
	{
		return $this->securitygrouppermission->create($attributes);
	}
 
	/**
	 * Update a securitygrouppermission.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return SecurityGroupPermission
	 */
	public function update($id, array $attributes)
	{
		return $this->securitygrouppermission->find($id)->update($attributes);
	}
 
	/**
	 * Delete a securitygrouppermission.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->securitygrouppermission->find($id)->delete();
	}

}