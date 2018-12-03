<?php 
namespace App\Repositories\Base;

use App\Models\Base\SecurityPermission;
use App\Interfaces\Base\SecurityPermissionRepository;

/**
 * Class SecurityPermissionRepository
 * @package Repositories\SecurityPermission
 * @author Bye Webster (bye.webster@gmail.com)
 */
class SecurityPermissionEloquentRepository implements SecurityPermissionRepository {
 
    /**
	 * @var $securitypermission
	 */
	private $securitypermission;
 
	/**
	 * SecurityPermission constructor.
	 *
	 * @param SecurityPermission $securitypermission
	 */
	public function __construct(SecurityPermission $securitypermission)
	{
		$this->securitypermission = $securitypermission;
	}
 
	/**
	 * Get all securitypermission.
	 *
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function getAll()
	{
		return $this->securitypermission->all();
	}
 
	/**
	 * Get securitypermission by id.
	 *
	 * @param integer $id
	 *
	 * @return SecurityPermission
	 */
	public function getById($id)
	{
		return $this->securitypermission->find($id);
	}
 
	/**
	 * Get securitypermission by field.
	 *
     * @param string $field
     * @param string $keyword
	 *
	 * @return SecurityPermission
	 */
	public function getByField($field, $keyword)
	{
		return $this->securitypermission->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new securitypermission.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->securitypermission->with($relations)->get();

    }
 
	/**
	 * Create a new securitypermission.
	 *
	 * @param array $attributes
	 *
	 * @return SecurityPermission
	 */
	public function create(array $attributes)
	{
		return $this->securitypermission->create($attributes);
	}
 
	/**
	 * Update a securitypermission.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return SecurityPermission
	 */
	public function update($id, array $attributes)
	{
		return $this->securitypermission->find($id)->update($attributes);
	}
 
	/**
	 * Delete a securitypermission.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->securitypermission->find($id)->delete();
	}

}