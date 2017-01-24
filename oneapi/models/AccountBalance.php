<?php

namespace hispasms\models;

use hispasms\Models;
use hispasms\SubObjectConversionRule;

class AccountBalance extends AbstractObject {

	public $balance;

	public $currency;

    public function __construct() {
        parent::__construct();
    }

}

Models::register(
        'hispasms\models\AccountBalance',
        new SubObjectConversionRule('hispasms\models\Currency', 'currency')
);
