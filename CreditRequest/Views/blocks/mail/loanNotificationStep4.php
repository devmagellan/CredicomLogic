<?= $this->render('creditRequest/blocks/mail/layout/header.php', [
    'client' => $client,
    'creditRequest' => $creditRequest
]) ?>

<br /><br />
leider haben Sie weder auf unser Kreditangebot noch auf unsere Kontaktversuche reagiert - dabei k&ouml;nnten Sie bereits &uuml;ber Ihren <strong>Wunschkredit</strong> verf&uuml;gen!<br /><br />
Bitte informieren Sie uns, ob dieses Angebot f&uuml;r Sie noch von Interesse ist oder ob es nicht Ihren Vorstellungen entspricht, sehr gerne auch per <strong>E-Mail</strong> an <strong>info@credicom.de</strong>. Da wir an einer hohen Kundenzufriedenheit interessiert sind, w&auml;re es nett von Ihnen, uns ein Feedback zum Vertrag zu geben.<br /><br />
Wir sind Montag bis Freitag in der Zeit von 09:00 bis 18:00 Uhr unter der <strong>Rufnummer 030-6098 5721</strong> f&uuml;r Sie erreichbar und beantworten gerne Ihre Fragen.

<?= $this->render( 'creditRequest/blocks/mail/layout/footer.php', [
    'sender' => $sender,
    'senderName' => $senderName,
]) ?>