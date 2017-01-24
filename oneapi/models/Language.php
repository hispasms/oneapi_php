<?php

namespace hispasms\models;

use hispasms\Conversions;
use hispasms\Models;
use hispasms\utils\Logs;
use hispasms\models\SmsException;

class Language {
    public $languageCode;
    public $useSingleShift;
    public $useLockingShift;

    public function __construct($array=null, $success=true) {
        if( ! $success) {
            $this->exception = new SmsException($array);
        } else if($array) {
            Logs::warn('Constructor with JSON params in '.get_class($this).' is deprecated, use Conversions utility class!');
            Conversions::fillFromJSON($this, $array, !$success);
        }
    }

}
Models::register('hispasms\models\Language');


?>