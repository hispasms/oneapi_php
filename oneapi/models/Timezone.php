<?php

namespace hispasms\models;

use hispasms\Models;

class Timezone extends AbstractObject {
    public $id;
    public $name;
    public $standardUtcOffset;
    public $dstOffset;
    public $dstStartTime;
    public $dstEndTime;
    public $countryId;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}    
Models::register('hispasms\models\Timezone');

?>
