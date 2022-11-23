<?php

namespace CT275\Project;

class Category
{
	private $db;

	private $category_id = -1;
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

}

