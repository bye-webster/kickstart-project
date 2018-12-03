<?php 
namespace App\Repositories\Base;

use App\Models\Base\MayaPage;
use App\Interfaces\Base\MayaPageRepository;

/**
 * Class MayaPageRepository
 * @package Repositories\MayaPage
 * @author Bye Webster (bye.webster@gmail.com)
 */
class MayaPageEloquentRepository implements MayaPageRepository {
 
    /**
	 * @var $mayapage
	 */
	private $mayapage;
 
	/**
	 * MayaPage constructor.
	 *
	 * @param MayaPage $mayapage
	 */
	public function __construct(MayaPage $mayapage)
	{
		$this->mayapage = $mayapage;
	}
 
	/**
	 * Get all mayapage.
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function getAll()
	{
		return $this->mayapage->all();
	}
 
	/**
	 * Get mayapage by id.
	 *
	 * @param integer $id
	 *
	 * @return MayaPage
	 */
	public function getById($id)
	{
		return $this->mayapage->find($id);
	}
 
	/**
	 * Get mayapage by field.
	 *
     * @param string $field
     * @param string $keyword
	 *
	 * @return MayaPage
	 */
	public function getByField($field, $keyword)
	{
		return $this->mayapage->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new mayapage.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->mayapage->with($relations)->get();

    }
 
	/**
	 * Create a new mayapage.
	 *
	 * @param array $attributes
	 *
	 * @return MayaPage
	 */
	public function create(array $attributes)
	{
		return $this->mayapage->create($attributes);
	}
 
	/**
	 * Update a mayapage.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return MayaPage
	 */
	public function update($id, array $attributes)
	{
		return $this->mayapage->find($id)->update($attributes);
	}
 
	/**
	 * Delete a mayapage.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->mayapage->find($id)->delete();
	}

}