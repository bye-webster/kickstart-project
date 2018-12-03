<?php 
namespace App\Interfaces\Base;

use App\Models\Base\PartyPhone;

/**
 * Class PartyPhoneRepository
 * @package App\Repositories\PartyPhone
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface PartyPhoneRepository {

    /**
     * @return PartyPhone | object
     */
    public function getAll();
 
    /**
     * @param string $id
     * @return PartyPhone | object
     */
	public function getById($id);
 
    /**
     * @param string $field
     * @param string $keyword
     * @return PartyPhone | object
     */
    public function getByField($field, $keyword);
 
    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);
 
 
    /**
     * @param array $attributes
     * @return PartyPhone | object
     */
	public function create(array $attributes);
 
    /**
     * @param string $id
     * @param array $attributes
     * @return PartyPhone | object
     */
	public function update($id, array $attributes);
 
    /**
     * @param string $id
     * @return PartyPhone | object
     */
	public function delete($id);

}