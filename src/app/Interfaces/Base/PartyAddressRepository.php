<?php 
namespace App\Interfaces\Base;

use App\Models\Base\PartyAddress;

/**
 * Class PartyAddressRepository
 * @package App\Repositories\PartyAddress
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface PartyAddressRepository {

    /**
     * @param string $request
     * @return PartyAddress | object
     */
    public function getAll();
 
    /**
     * @param string $id
     * @return PartyAddress | object
     */
	public function getById($id);
 
    /**
     * @param string $request
     * @param string $keyword
     * @return PartyAddress | object
     */
    public function getByField($field, $keyword);
 
    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);
 
 
    /**
     * @param array $attributes
     * @return PartyAddress | object
     */
	public function create(array $attributes);
 
    /**
     * @param string $id
     * @param array $attributes
     * @return PartyAddress | object
     */
	public function update($id, array $attributes);
 
    /**
     * @param string $request
     * @return PartyAddress | object
     */
	public function delete($id);

}