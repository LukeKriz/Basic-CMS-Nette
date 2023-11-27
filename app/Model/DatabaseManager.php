<?php

declare(strict_types = 1);

namespace app\Model;

use Nette;
use Nette\Database\Context;
use Nette\SmartObject;


abstract class	DatabaseManager{
	use SmartObject;

	protected $database;

	public function __construct(Context $database) {
		$this->database = $database;
	}

}
