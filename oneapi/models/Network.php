<?php

namespace hispasms\models;

use hispasms\Models;
use hispasms\SubObjectConversionRule;

class Network extends AbstractObject {
    public $id;
    public $name;
    public $country;
    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }
}
Models::register(
    'hispasms\models\Network',
    new SubObjectConversionRule('hispasms\models\Country', 'country')
);
?>