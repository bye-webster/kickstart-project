<?php 
namespace App\Repositories\Base;

use App\Models\Base\PartyAddress;
use App\Interfaces\Base\PartyAddressRepository;

/**
 * Class PartyAddressRepository
 * @package Repositories\PartyAddress
 * @author Bye Webster (bye.webster@gmail.com)
 */
class PartyAddressEloquentRepository implements PartyAddressRepository {
 
    /**
	 * @var $partyaddress
	 */
	private $partyaddress;
 
	/**
	 * PartyAddress constructor.
	 *
	 * @param PartyAddress $partyaddress
	 */
	public function __construct(PartyAddress $partyaddress)
	{
		$this->partyaddress = $partyaddress;
	}
 
	/**
	 * Get all partyaddress.
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function getAll()
	{
		return $this->partyaddress->all();
	}
 
	/**
	 * Get partyaddress by id.
	 *
	 * @param integer $id
	 *
	 * @return PartyAddress
	 */
	public function getById($id)
	{
		return $this->partyaddress->find($id);
	}
 
	/**
	 * Get partyaddress by field.
	 *
     * @param string $field
     * @param string $keyword
	 *
	 * @return PartyAddress
	 */
	public function getByField($field, $keyword)
	{
		return $this->partyaddress->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new partyaddress.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->partyaddress->with($relations)->get();

    }
 
	/**
	 * Create a new partyaddress.
	 *
	 * @param array $attributes
	 *
	 * @return PartyAddress
	 */
	public function create(array $attributes)
	{
		return $this->partyaddress->create($attributes);
	}
 
	/**
	 * Update a partyaddress.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return PartyAddress
	 */
	public function update($id, array $attributes)
	{
		return $this->partyaddress->find($id)->update($attributes);
	}
 
	/**
	 * Delete a partyaddress.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->partyaddress->find($id)->delete();
	}

}