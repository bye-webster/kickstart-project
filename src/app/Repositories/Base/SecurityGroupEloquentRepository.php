<?php 
namespace App\Repositories\Base;

use App\Models\Base\SecurityGroup;
use App\Interfaces\Base\SecurityGroupRepository;

/**
 * Class SecurityGroupRepository
 * @package Repositories\SecurityGroup
 * @author Bye Webster (bye.webster@gmail.com)
 */
class SecurityGroupEloquentRepository implements SecurityGroupRepository {
 
    /**
	 * @var $securitygroup
	 */
	private $securitygroup;
 
	/**
	 * SecurityGroup constructor.
	 *
	 * @param SecurityGroup $securitygroup
	 */
	public function __construct(SecurityGroup $securitygroup)
	{
		$this->securitygroup = $securitygroup;
	}
 
	/**
	 * Get all securitygroup.
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function getAll()
	{
		return $this->securitygroup->all();
	}
 
	/**
	 * Get securitygroup by id.
	 *
	 * @param integer $id
	 *
	 * @return SecurityGroup
	 */
	public function getById($id)
	{
		return $this->securitygroup->find($id);
	}
 
	/**
	 * Get securitygroup by field.
	 *
     * @param string $field
     * @param string $keyword
	 *
	 * @return SecurityGroup
	 */
	public function getByField($field, $keyword)
	{
		return $this->securitygroup->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new securitygroup.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->securitygroup->with($relations)->get();

    }
 
	/**
	 * Create a new securitygroup.
	 *
	 * @param array $attributes
	 *
	 * @return SecurityGroup
	 */
	public function create(array $attributes)
	{
		return $this->securitygroup->create($attributes);
	}
 
	/**
	 * Update a securitygroup.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return SecurityGroup
	 */
	public function update($id, array $attributes)
	{
		return $this->securitygroup->find($id)->update($attributes);
	}
 
	/**
	 * Delete a securitygroup.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->securitygroup->find($id)->delete();
	}

}