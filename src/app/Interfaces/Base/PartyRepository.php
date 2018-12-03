<?php 
namespace App\Interfaces\Base;

use App\Models\Base\Party;

/**
 * Class PartyRepository
 * @package App\Repositories\Party
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface PartyRepository {

    /**
     * @return Party | object
     */
    public function getAll();
 
    /**
     * @param string $id
     * @return Party | object
     */
	public function getById($id);
 
    /**
     * @param string $field
     * @param string $keyword
     * @return Party | object
     */
    public function getByField($field, $keyword);
 
    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);
 
 
    /**
     * @param array $attributes
     * @return Party | object
     */
	public function create(array $attributes);
 
    /**
     * @param string $id
     * @param array $attributes
     * @return Party | object
     */
	public function update($id, array $attributes);
 
    /**
     * @param string $id
     * @return Party | object
     */
	public function delete($id);

}