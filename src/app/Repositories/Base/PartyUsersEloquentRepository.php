<?php 
namespace App\Repositories\Base;

use App\Models\Base\PartyUsers;
use App\Interfaces\Base\PartyUsersRepository;

/**
 * Class PartyUsersRepository
 * @package Repositories\PartyUsers
 * @author Bye Webster (bye.webster@gmail.com)
 */
class PartyUsersEloquentRepository implements PartyUsersRepository {
 
    /**
	 * @var $partyusers
	 */
	private $partyusers;
 
	/**
	 * PartyUsers constructor.
	 *
	 * @param PartyUsers $partyusers
	 */
	public function __construct(PartyUsers $partyusers)
	{
		$this->partyusers = $partyusers;
	}
 
	/**
	 * Get all partyusers.
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function getAll()
	{
		return $this->partyusers->all();
	}
 
	/**
	 * Get partyusers by id.
	 *
	 * @param integer $id
	 *
	 * @return PartyUsers
	 */
	public function getById($id)
	{
		return $this->partyusers->find($id);
	}
 
	/**
	 * Get partyusers by field.
	 *
     * @param string $field
     * @param string $keyword
	 *
	 * @return PartyUsers
	 */
	public function getByField($field, $keyword)
	{
		return $this->partyusers->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new partyusers.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->partyusers->with($relations)->get();

    }
 
	/**
	 * Create a new partyusers.
	 *
	 * @param array $attributes
	 *
	 * @return PartyUsers
	 */
	public function create(array $attributes)
	{
		return $this->partyusers->create($attributes);
	}
 
	/**
	 * Update a partyusers.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return PartyUsers
	 */
	public function update($id, array $attributes)
	{
		return $this->partyusers->find($id)->update($attributes);
	}
 
	/**
	 * Delete a partyusers.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->partyusers->find($id)->delete();
	}

}