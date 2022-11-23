<?php

namespace CT275\Project;

class Tour
{
	private $db;

	private $tour_id = -1;
	public $category_id;
	public $tour_name;
	public $tour_titles;
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

	public function __construct($pdo)
	{
		$this->db = $pdo;
	}

	public function fill(array $data)
	{
		if (isset($data['name'])) {
			$this->tour_name = trim($data['name']);
		}
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
}

