<?php 
namespace App\Repositories\Base;

use App\Models\Base\PartyEmail;
use App\Interfaces\Base\PartyEmailRepository;

/**
 * Class PartyEmailRepository
 * @package Repositories\PartyEmail
 * @author Bye Webster (bye.webster@gmail.com)
 */
class PartyEmailEloquentRepository implements PartyEmailRepository {
 
    /**
	 * @var $partyemail
	 */
	private $partyemail;
 
	/**
	 * PartyEmail constructor.
	 *
	 * @param PartyEmail $partyemail
	 */
	public function __construct(PartyEmail $partyemail)
	{
		$this->partyemail = $partyemail;
	}
 
	/**
	 * Get all partyemail.
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function getAll()
	{
		return $this->partyemail->all();
	}
 
	/**
	 * Get partyemail by id.
	 *
	 * @param integer $id
	 *
	 * @return PartyEmail
	 */
	public function getById($id)
	{
		return $this->partyemail->find($id);
	}
 
	/**
	 * Get partyemail by field.
	 *
     * @param string $field
     * @param string $keyword
	 *
	 * @return PartyEmail
	 */
	public function getByField($field, $keyword)
	{
		return $this->partyemail->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new partyemail.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->partyemail->with($relations)->get();

    }
 
	/**
	 * Create a new partyemail.
	 *
	 * @param array $attributes
	 *
	 * @return PartyEmail
	 */
	public function create(array $attributes)
	{
		return $this->partyemail->create($attributes);
	}
 
	/**
	 * Update a partyemail.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return PartyEmail
	 */
	public function update($id, array $attributes)
	{
		return $this->partyemail->find($id)->update($attributes);
	}
 
	/**
	 * Delete a partyemail.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->partyemail->find($id)->delete();
	}

}