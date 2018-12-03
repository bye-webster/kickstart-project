<?php 
namespace App\Interfaces\Base;

use App\Models\Base\MyStatus;

/**
 * Class MyStatusRepository
 * @package App\Repositories\MyStatus
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface MyStatusRepository {

    /**
     * @return MyStatus | object
     */
    public function getAll();
 
    /**
     * @param string $id
     * @return MyStatus | object
     */
	public function getById($id);
 
    /**
     * @param string $field
     * @param string $keyword
     * @return MyStatus | object
     */
    public function getByField($field, $keyword);
 
    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);
 
 
    /**
     * @param array $attributes
     * @return MyStatus | object
     */
	public function create(array $attributes);
 
    /**
     * @param string $id
     * @param array $attributes
     * @return MyStatus | object
     */
	public function update($id, array $attributes);
 
    /**
     * @param string $id
     * @return MyStatus | object
     */
	public function delete($id);

}