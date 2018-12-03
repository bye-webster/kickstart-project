<?php 
namespace App\Repositories\Base;

use App\Models\Base\PartyPhone;
use App\Interfaces\Base\PartyPhoneRepository;

/**
 * Class PartyPhoneRepository
 * @package Repositories\PartyPhone
 * @author Bye Webster (bye.webster@gmail.com)
 */
class PartyPhoneEloquentRepository implements PartyPhoneRepository {
 
    /**
	 * @var $partyphone
	 */
	private $partyphone;
 
	/**
	 * PartyPhone constructor.
	 *
	 * @param PartyPhone $partyphone
	 */
	public function __construct(PartyPhone $partyphone)
	{
		$this->partyphone = $partyphone;
	}
 
	/**
	 * Get all partyphone.
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function getAll()
	{
		return $this->partyphone->all();
	}
 
	/**
	 * Get partyphone by id.
	 *
	 * @param integer $id
	 *
	 * @return PartyPhone
	 */
	public function getById($id)
	{
		return $this->partyphone->find($id);
	}
 
	/**
	 * Get partyphone by field.
	 *
     * @param string $field
     * @param string $keyword
	 *
	 * @return PartyPhone
	 */
	public function getByField($field, $keyword)
	{
		return $this->partyphone->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new partyphone.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->partyphone->with($relations)->get();

    }
 
	/**
	 * Create a new partyphone.
	 *
	 * @param array $attributes
	 *
	 * @return PartyPhone
	 */
	public function create(array $attributes)
	{
		return $this->partyphone->create($attributes);
	}
 
	/**
	 * Update a partyphone.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return PartyPhone
	 */
	public function update($id, array $attributes)
	{
		return $this->partyphone->find($id)->update($attributes);
	}
 
	/**
	 * Delete a partyphone.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->partyphone->find($id)->delete();
	}

}