<?php 
namespace App\Interfaces\Base;

use App\Models\Base\PartyUsers;

/**
 * Class PartyUsersRepository
 * @package App\Repositories\PartyUsersRepository
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface PartyUsersRepository {

    /**
     * @return PartyUsers | object
     */
    public function getAll();
 
    /**
     * @param string $id
     * @return PartyUsers | object
     */
	public function getById($id);
 
    /**
     * @param string $field
     * @param string $keyword
     * @return PartyUsers | object
     */
    public function getByField($field, $keyword);
 
    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);
 
 
    /**
     * @param array $attributes
     * @return PartyUsers | object
     */
	public function create(array $attributes);
 
    /**
     * @param string $id
     * @param array $attributes
     * @return PartyUsers | object
     */
	public function update($id, array $attributes);
 
    /**
     * @param string $id
     * @return PartyUsers | object
     */
	public function delete($id);

}