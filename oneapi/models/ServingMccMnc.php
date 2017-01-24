<?php

namespace hispasms\models;

use hispasms\Models;

class ServingMccMnc extends AbstractObject {

    public $mcc;
    public $mnc;

    public function __construct() {
        parent::__construct();
    }

}

Models::register('hispasms\models\ServingMccMnc');

