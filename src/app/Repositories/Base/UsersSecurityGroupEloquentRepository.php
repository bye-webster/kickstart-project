<?php 
namespace App\Repositories\Base;

use App\Models\Base\UsersSecurityGroup;
use App\Interfaces\Base\UsersSecurityGroupRepository;

/**
 * Class UsersSecurityGroupRepository
 * @package Repositories\UsersSecurityGroup
 * @author Bye Webster (bye.webster@gmail.com)
 */
class UsersSecurityGroupEloquentRepository implements UsersSecurityGroupRepository {
 
    /**
	 * @var $userssecuritygroup
	 */
	private $userssecuritygroup;
 
	/**
	 * UsersSecurityGroup constructor.
	 *
	 * @param UsersSecurityGroup $userssecuritygroup
	 */
	public function __construct(UsersSecurityGroup $userssecuritygroup)
	{
		$this->userloginsecuritygroup = $userssecuritygroup;
	}
 
	/**
	 * Get all userloginsecuritygroup.
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function getAll()
	{
		return $this->userloginsecuritygroup->all();
	}
 
	/**
	 * Get userloginsecuritygroup by id.
	 *
	 * @param integer $id
	 *
	 * @return UsersSecurityGroup
	 */
	public function getById($id)
	{
		return $this->userloginsecuritygroup->find($id);
	}
 
	/**
	 * Get userloginsecuritygroup by field.
	 *
     * @param string $field
     * @param string $keyword
	 *
	 * @return UsersSecurityGroup
	 */
	public function getByField($field, $keyword)
	{
		return $this->userloginsecuritygroup->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new userloginsecuritygroup.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->userloginsecuritygroup->with($relations)->get();

    }
 
	/**
	 * Create a new userloginsecuritygroup.
	 *
	 * @param array $attributes
	 *
	 * @return UsersSecurityGroup
	 */
	public function create(array $attributes)
	{
		return $this->userloginsecuritygroup->create($attributes);
	}
 
	/**
	 * Update a userloginsecuritygroup.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return UsersSecurityGroup
	 */
	public function update($id, array $attributes)
	{
		return $this->userloginsecuritygroup->find($id)->update($attributes);
	}
 
	/**
	 * Delete a userloginsecuritygroup.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->userloginsecuritygroup->find($id)->delete();
	}

}