<?php 
namespace App\Interfaces\Base;

use App\Models\Base\MyTable;

/**
 * Class MyTableRepository
 * @package App\Repositories\MyTable
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface MyTableRepository {

    /**
     * @return MyTable | object
     */
    public function getAll();
 
    /**
     * @param string $id
     * @return MyTable | object
     */
	public function getById($id);
 
    /**
     * @param string $field
     * @param string $keyword
     * @return MyTable | object
     */
    public function getByField($field, $keyword);
 
    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);
 
 
    /**
     * @param array $attributes
     * @return MyTable | object
     */
	public function create(array $attributes);
 
    /**
     * @param string $id
     * @param array $attributes
     * @return MyTable | object
     */
	public function update($id, array $attributes);
 
    /**
     * @param string $id
     * @return MyTable | object
     */
	public function delete($id);

}