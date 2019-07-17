<?php

namespace App\modules\CreditRequest\Block\Mail\FormReply\MainApplicant;

use App\modules\CreditRequest\Block\Mail\Base as BaseMailBlock;

class Red extends BaseMailBlock{
    public $availableRecipients = self::AVAILABLE_RECIPIENTS_APPLICANT;
    public $template = 'mail/formReply/mainApplicant/redType';
    public $mailSubject = 'Ihre Anfrage bei credicom.de';
    public $creditRequestNote = "Ablehnung";
    public $sender;
    public $to;
    public $client;
    public $creditRequest;

    public function __construct($array=array())
    {
        $this->to=$array['creditRequest']->email;
        $this->sender=$array['sender'];
        $this->client=$array['client'];
        $this->creditRequest=$array['creditRequest'];
        parent::__construct($this->creditRequest);

    }
}




