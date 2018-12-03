<?php 
namespace App\Repositories\Base;

use App\Models\Base\Party;
use App\Interfaces\Base\PartyRepository;

/**
 * Class PartyRepository
 * @package Repositories\Party
 * @author Bye Webster (bye.webster@gmail.com)
 */
class PartyEloquentRepository implements PartyRepository {
 
    /**
	 * @var $party
	 */
	private $party;
 
	/**
	 * Party constructor.
	 *
	 * @param Party $party
	 */
	public function __construct(Party $party)
	{
		$this->party = $party;
	}
 
	/**
	 * Get all party.
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function getAll()
	{
		return $this->party->all();
	}
 
	/**
	 * Get party by id.
	 *
	 * @param integer $id
	 *
	 * @return Party
	 */
	public function getById($id)
	{
		return $this->party->find($id);
	}
 
	/**
	 * Get party by field.
	 *
     * @param string $field
     * @param string $keyword
	 *
	 * @return Party
	 */
	public function getByField($field, $keyword)
	{
		return $this->party->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new party.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->party->with($relations)->get();

    }
 
	/**
	 * Create a new party.
	 *
	 * @param array $attributes
	 *
	 * @return Party
	 */
	public function create(array $attributes)
	{
		return $this->party->create($attributes);
	}
 
	/**
	 * Update a party.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return Party
	 */
	public function update($id, array $attributes)
	{
		return $this->party->find($id)->update($attributes);
	}
 
	/**
	 * Delete a party.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->party->find($id)->delete();
	}

}