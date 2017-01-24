<?php

namespace hispasms\models;
use hispasms\Models;

/**
 * Social Invite request object.
 */
class SocialInviteRequest extends AbstractObject {

  public $senderAddress;

  public $recipients;

  public $messageKey;

    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}

Models::register('hispasms\models\SocialInviteRequest');

?>
