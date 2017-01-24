<?php

namespace hispasms\models;


use hispasms\Models;

class Encoding  extends AbstractObject {
    public $name;
    
    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}    
Models::register('hispasms\models\Encoding');


?>
