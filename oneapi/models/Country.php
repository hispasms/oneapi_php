<?php

namespace hispasms\models;

use hispasms\Models;

class Country  extends AbstractObject {
    public $id;
    public $code;
    public $prefix;
    public $name;
    public $locale;
    
    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}    
Models::register('hispasms\models\Country');


?>
