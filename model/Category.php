<?php

namespace CT275\Project;

class Category
{
	private $db;

	public $category_id = -1;
	public $category_name;
	public $created_at;
	public $updated_at;
	private $errors = [];

	public function getId()
	{
		return $this->category_id;
	}

	public function __construct($pdo)
	{
		$this->db = $pdo;
	}

	public function all()
  	{
    $categorys = [];
    $stmt = $this->db->prepare('select * from tour_category');
    $stmt->execute();
    while ($row = $stmt->fetch()) {
    $category = new Category($this->db);
    $category->fillFromDB($row);
    $categorys[] = $category;
    }
    return $categorys;
  	}

  	protected function fillFromDB(array $row)
	{
	[
	'category_id' => $this->category_id,
	'category_name' => $this->category_name,
	'created_at' => $this->created_at,
	'updated_at' => $this->updated_at
	] = $row;
	return $this;
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
	$stmt = $this->db->prepare('delete from tour_category where category_id = :category_id');
	return $stmt->execute(['category_id' => $this->category_id]);
	}

	public function save()
	{
	$result = false;
	if ($this->category_id >= 0) {
	$stmt = $this->db->prepare('update tour_category set category_name = :category_name');
	$result = $stmt->execute([
	'category_name' => $this->category_name,

	'category_id' => $this->category_id]);
	} else {
	$stmt = $this->db->prepare(
	// 'insert into tour_category (category_name, now(), now())');
	'insert into tour_category (category_name, created_at, updated_at)
	values (:category_name, now(), now())');
	$result = $stmt->execute([
		'category_name' => $this->category_name,

	]);
	if ($result) {
	$this->category_id = $this->db->lastInsertId();
	}
	}
	return $result;
	}

	public function validate()
	{
		if (!$this->category_name) {
			$this->errors['category_name'] = 'Invalid name.';
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

	public function getValidationErrors()
	{
		return $this->errors;
	}

	public function fill(array $data)
	{
		if (isset($data['category_name'])) {
			$this->category_name = trim($data['category_name']);
		}


		return $this;
  	}

	  public function find($category_id)
  	{
    $stmt = $this->db->prepare('select * from tour where category_id = :category_id');
    $stmt->execute(['category_id' => $category_id]);
    if ($row = $stmt->fetch()) {
      $this->fillFromDB($row);
      return $this;
    }
    return null;
  	}


}

