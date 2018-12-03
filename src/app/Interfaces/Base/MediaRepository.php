<?php 
namespace App\Interfaces\Base;

use App\Models\Base\Media;

/**
 * Class MediaRepository
 * @package App\Repositories\Media
 * @author Bye Webster (bye.webster@gmail.com)
 */
interface MediaRepository {

    /**
     * @return Media | object
     */
    public function getAll();
 
    /**
     * @param string $id
     * @return Media | object
     */
	public function getById($id);
 
    /**
     * @param string $field
     * @param string $keyword
     * @return Media | object
     */
    public function getByField($field, $keyword);
 
    /**
     * @param array|string $relation
     * @return mixed The current repository object relations instance.
     */
    public function with($relation);
 
 
    /**
     * @param array $attributes
     * @return Media | object
     */
	public function create(array $attributes);
 
    /**
     * @param string $id
     * @param array $attributes
     * @return Media | object
     */
	public function update($id, array $attributes);
 
    /**
     * @param string $id
     * @return Media | object
     */
	public function delete($id);

}