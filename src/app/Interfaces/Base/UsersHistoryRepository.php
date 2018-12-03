<?php 
namespace App\Interfaces\Base;

use App\Models\Base\UsersHistory;

/**
 * Class UsersHistoryRepository
 * @package App\Repositories\UsersHistory
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface UsersHistoryRepository {

    /**
     * @return UsersHistory | object
     */
    public function getAll();
 
    /**
     * @param string $id
     * @return UsersHistory | object
     */
	public function getById($id);
 
    /**
     * @param string $field
     * @param string $keyword
     * @return UsersHistory | object
     */
    public function getByField($field, $keyword);
 
    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);
 
 
    /**
     * @param array $attributes
     * @return UsersHistory | object
     */
	public function create(array $attributes);
 
    /**
     * @param string $id
     * @param array $attributes
     * @return UsersHistory | object
     */
	public function update($id, array $attributes);
 
    /**
     * @param string $id
     * @return UsersHistory | object
     */
	public function delete($id);

}