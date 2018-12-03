<?php 
namespace App\Repositories\Base;

use App\Models\Base\Media;
use App\Interfaces\Base\MediaRepository;

/**
 * Class MediaRepository
 * @package Repositories\Media
 * @author Bye Webster (bye.webster@gmail.com)
 */
class MediaEloquentRepository implements MediaRepository {
 
    /**
	 * @var $media
	 */
	private $media;
 
	/**
	 * Media constructor.
	 *
	 * @param Media $media
	 */
	public function __construct(Media $media)
	{
		$this->media = $media;
	}
 
	/**
	 * Get all media.
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function getAll()
	{
		return $this->media->all();
	}
 
	/**
	 * Get media by id.
	 *
	 * @param integer $id
	 *
	 * @return Media
	 */
	public function getById($id)
	{
		return $this->media->find($id);
	}
 
	/**
	 * Get media by field.
	 *
     * @param string $field
     * @param string $keyword
	 *
	 * @return Media
	 */
	public function getByField($field, $keyword)
	{
		return $this->media->where($field, 'like', '%' . $keyword . '%')->get();
	}

	/**
	 * Create a new media.
	 *
	 * @param array|string $relations
	 *
     * @return mixed The current repository object relations instance.
	 */
	public function with($relations)
    {
        return $this->media->with($relations)->get();

    }
 
	/**
	 * Create a new media.
	 *
	 * @param array $attributes
	 *
	 * @return Media
	 */
	public function create(array $attributes)
	{
		return $this->media->create($attributes);
	}
 
	/**
	 * Update a media.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return Media
	 */
	public function update($id, array $attributes)
	{
		return $this->media->find($id)->update($attributes);
	}
 
	/**
	 * Delete a media.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->media->find($id)->delete();
	}

}