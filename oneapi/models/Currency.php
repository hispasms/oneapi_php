<?php

namespace hispasms\models;

use hispasms\Models;

class Currency extends AbstractObject {

	public $id;
	public $currencyName;
	public $symbol;

    public function __construct() {
        parent::__construct();
    }

}

Models::register('hispasms\models\Currency');
