<?php 
namespace App\Repositories\Base;

use App\Models\Base\PartyMedia;
use App\Interfaces\Base\PartyMediaRepository;

/**
 * Class PartyMediaRepository
 * @package Repositories\PartyMedia
 * @author Bye Webster (bye.webster@gmail.com)
 */
class PartyMediaEloquentRepository implements PartyMediaRepository {
 
    /**
	 * @var $partymedia
	 */
	private $partymedia;
 
	/**
	 * PartyMedia constructor.
	 *
	 * @param PartyMedia $partymedia
	 */
	public function __construct(PartyMedia $partymedia)
	{
		$this->partymedia = $partymedia;
	}
 
	/**
	 * Get all partymedia.
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function getAll()
	{
		return $this->partymedia->all();
	}
 
	/**
	 * Get partymedia by id.
	 *
	 * @param integer $id
	 *
	 * @return PartyMedia
	 */
	public function getById($id)
	{
		return $this->partymedia->find($id);
	}
 
	/**
	 * Get partymedia by field.
	 *
     * @param integer $field
     * @param integer $keyword
	 *
	 * @return PartyMedia
	 */
	public function getByField($field, $keyword)
	{
		return $this->partymedia->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new partymedia.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->partymedia->with($relations)->get();

    }
 
	/**
	 * Create a new partymedia.
	 *
	 * @param array $attributes
	 *
	 * @return PartyMedia
	 */
	public function create(array $attributes)
	{
		return $this->partymedia->create($attributes);
	}
 
	/**
	 * Update a partymedia.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return PartyMedia
	 */
	public function update($id, array $attributes)
	{
		return $this->partymedia->find($id)->update($attributes);
	}
 
	/**
	 * Delete a partymedia.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->partymedia->find($id)->delete();
	}

}