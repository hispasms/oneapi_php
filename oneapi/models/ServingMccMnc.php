<?php

namespace hispaSMS\models;

use hispaSMS\Models;

class ServingMccMnc extends AbstractObject {

    public $mcc;
    public $mnc;

    public function __construct() {
        parent::__construct();
    }

}

Models::register('hispaSMS\models\ServingMccMnc');

