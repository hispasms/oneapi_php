<?php

namespace hispasms\models;
use hispasms\Models;
use hispasms\ObjectArrayConversionRule;

/**
 * Description of Encodings
 *
 * @author rbelusic
 */
class Encodings extends AbstractObject {

    public $encodings;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register(
        'hispasms\models\Encodings',
        new ObjectArrayConversionRule('hispasms\models\Encoding', 'encodings')
);
        


?>
