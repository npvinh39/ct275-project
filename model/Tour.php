<?php

namespace CT275\Project;

class Tour
{
	private $db;

	private $tour_id = -1;
	public $category_id;
	public $tour_name;
	public $tour_title;
	public $tour_description;
	public $tour_map;
	public $tour_image;
	public $created_at;
	public $updated_at;
	private $errors = [];




	public function getId()
	{
		return $this->tour_id;
	}

	public function getValidationErrors()
	{
		return $this->errors;
	}

	public function validate()
	{
		if (!$this->tour_name) {
			$this->errors['tour_name'] = 'Invalid name.';
		}


		// if (!$this->tour_title) {
		// 	$this->errors['tour_title'] = 'Invalid tour_title.';
		// }

		// if (!$this->tour_description) {
		// 	$this->errors['tour_description'] = 'Invalid tour_description.';
		// }

		// if (!$this->tour_map) {
		// 	$this->errors['tour_map'] = 'Invalid tour_map.';
		// }

		// if (!$this->tour_image) {
		// 	$this->errors['tour_image'] = 'Invalid tour_image.';
		// }
		// if (strlen($this->phone) < 10 || strlen($this->phone) > 11) {
		// 	$this->errors['phone'] = 'Invalid phone number.';
		// }

		// if (strlen($this->notes) > 255) {
		// 	$this->errors['notes'] = 'Notes must be at most 255 characters.';
		// }

		return empty($this->errors);
	}

	public function save()
	{
	$result = false;
	if ($this->tour_id >= 0) {
	$stmt = $this->db->prepare('update tour set tour_name = :tour_name,
	category_id = :category_id, tour_title = :tour_title, tour_description = :tour_description, tour_map = :tour_map, tour_image = :tour_image, updated_at = now()
	where tour_id = :tour_id');
	$result = $stmt->execute([
	'tour_name' => $this->tour_name,
	'category_id' => $this->category_id,
	'tour_title' => $this->tour_title,
	'tour_description' => $this->tour_description,
	'tour_map' => $this->tour_map,
	'tour_image' => $this->tour_image,

	'tour_id' => $this->tour_id]);
	} else {
	$stmt = $this->db->prepare(
	'insert into tour (tour_name, category_id, tour_title, tour_description, tour_map, tour_image, created_at, updated_at)
	values (:tour_name, :category_id, :tour_title, :tour_description, :tour_map, :tour_image, now(), now())');
	$result = $stmt->execute([

		'tour_name' => $this->tour_name,
		'category_id' => $this->category_id,
		'tour_title' => $this->tour_title,
		'tour_description' => $this->tour_description,
		'tour_map' => $this->tour_map,
		'tour_image' => $this->tour_image
	]);
	if ($result) {
	$this->tour_id = $this->db->lastInsertId();
	}
	}
	return $result;
	}

	public function __construct($pdo)
	{
		$this->db = $pdo;
	}

	public function fill(array $data)
	{
		if (isset($data['tour_name'])) {
			$this->tour_name = trim($data['tour_name']);
		}



		if (isset($data['tour_tile'])) {
			$this->tour_tile = trim($data['tour_tile']);
		}


		return $this;
  	}

public function all()
  {
    $tours = [];
    $stmt = $this->db->prepare('select * from tour');
    $stmt->execute();
    while ($row = $stmt->fetch()) {
    $tour = new Tour($this->db);
    $tour->fillFromDB($row);
    $tours[] = $tour;
    }
    return $tours;
  }

  protected function fillFromDB(array $row)
	{
	[
	'tour_id' => $this->tour_id,
	'tour_name' => $this->tour_name,
	'tour_title' => $this->tour_title,
	'tour_description' => $this->tour_description,
	'tour_map' => $this->tour_map,
	'tour_image' => $this->tour_image,
	'created_at' => $this->created_at,
	'updated_at' => $this->updated_at
	] = $row;
	return $this;
	}

  public function find($tour_id)
  {
    $stmt = $this->db->prepare('select * from tour where tour_id = :tour_id');
    $stmt->execute(['tour_id' => $tour_id]);
    if ($row = $stmt->fetch()) {
      $this->fillFromDB($row);
      return $this;
    }
    return null;
  }

  	public function update(array $data)
	{
	$this->fill($data);
	if ($this->validate()) {
	return $this->save();
	}
	return false;
	}

	public function delete()
	{
	$stmt = $this->db->prepare('delete from tour where tour_id = :tour_id');
	return $stmt->execute(['tour_id' => $this->tour_id]);
	}

}

