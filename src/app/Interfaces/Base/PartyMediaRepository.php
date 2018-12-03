<?php 
namespace App\Interfaces\Base;

use App\Models\Base\PartyMedia;

/**
 * Class PartyMediaRepository
 * @package App\Repositories\PartyMedia
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface PartyMediaRepository {

    /**
     * @return PartyMedia | object
     */
    public function getAll();
 
    /**
     * @param string $id
     * @return PartyMedia | object
     */
	public function getById($id);
 
    /**
     * @param string $field
     * @param string $keyword
     * @return PartyMedia | object
     */
    public function getByField($field, $keyword);
 
    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);
 
 
    /**
     * @param array $attributes
     * @return PartyMedia | object
     */
	public function create(array $attributes);
 
    /**
     * @param string $id
     * @param array $attributes
     * @return PartyMedia | object
     */
	public function update($id, array $attributes);
 
    /**
     * @param string $id
     * @return PartyMedia | object
     */
	public function delete($id);

}