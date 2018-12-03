<?php 
namespace App\Repositories\Base;

use App\Models\Base\UsersHistory;
use App\Interfaces\Base\UsersHistoryRepository;

/**
 * Class UsersHistoryRepository
 * @package Repositories\UsersHistory
 * @author Bye Webster (bye.webster@gmail.com)
 */
class UsersHistoryEloquentRepository implements UsersHistoryRepository {
 
    /**
	 * @var $usershistory
	 */
	private $usershistory;
 
	/**
	 * UsersHistory constructor.
	 *
	 * @param UsersHistory $usershistory
	 */
	public function __construct(UsersHistory $usershistory)
	{
		$this->usershistory = $usershistory;
	}
 
	/**
	 * Get all usershistory.
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function getAll()
	{
		return $this->usershistory->all();
	}
 
	/**
	 * Get usershistory by id.
	 *
	 * @param integer $id
	 *
	 * @return UsersHistory
	 */
	public function getById($id)
	{
		return $this->usershistory->find($id);
	}
 
	/**
	 * Get usershistory by field.
	 *
     * @param string $field
     * @param string $keyword
	 *
	 * @return UsersHistory
	 */
	public function getByField($field, $keyword)
	{
		return $this->usershistory->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new usershistory.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->usershistory->with($relations)->get();

    }
 
	/**
	 * Create a new usershistory.
	 *
	 * @param array $attributes
	 *
	 * @return UsersHistory
	 */
	public function create(array $attributes)
	{
		return $this->usershistory->create($attributes);
	}
 
	/**
	 * Update a usershistory.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return UsersHistory
	 */
	public function update($id, array $attributes)
	{
		return $this->usershistory->find($id)->update($attributes);
	}
 
	/**
	 * Delete a usershistory.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->usershistory->find($id)->delete();
	}

}