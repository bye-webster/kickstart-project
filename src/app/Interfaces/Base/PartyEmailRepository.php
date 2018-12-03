<?php 
namespace App\Interfaces\Base;

use App\Models\Base\PartyEmail;

/**
 * Class PartyEmailRepository
 * @package App\Repositories\PartyEmail
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface PartyEmailRepository {

    /**
     * @param string $request
     * @return PartyEmail | object
     */
    public function getAll();
 
    /**
     * @param string $id
     * @return PartyEmail | object
     */
	public function getById($id);
 
    /**
     * @param string $request
     * @param string $keyword
     * @return PartyEmail | object
     */
    public function getByField($field, $keyword);
 
    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);
 
 
    /**
     * @param array $attributes
     * @return PartyEmail | object
     */
	public function create(array $attributes);
 
    /**
     * @param string $id
     * @param array $attributes
     * @return PartyEmail | object
     */
	public function update($id, array $attributes);
 
    /**
     * @param string $request
     * @return PartyEmail | object
     */
	public function delete($id);

}