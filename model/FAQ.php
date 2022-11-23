<?php

namespace CT275\Project;

class FAQ
{
	private $db;

	private $faq_id = -1;
	public $faq_question;
	public $faq_answer;
	public $created_at;
	public $updated_at;
	private $errors = [];

	public function getId()
	{
		return $this->faq_id;
	}

	public function __construct($pdo)
	{
		$this->db = $pdo;
	}

public function all()
  {
    $faqs = [];
    $stmt = $this->db->prepare('select * from tour_faq');
    $stmt->execute();
    while ($row = $stmt->fetch()) {
    $faq = new faq($this->db);
    $faq->fillFromDB($row);
    $faqs[] = $faq;
    }
    return $faqs;
  }

  protected function fillFromDB(array $row)
	{
	[
	'faq_id' => $this->faq_id,
	'faq_question' => $this->faq_question,
	'faq_answer' => $this->faq_answer,
	'created_at' => $this->created_at,
	'updated_at' => $this->updated_at
	] = $row;
	return $this;
	}
}

