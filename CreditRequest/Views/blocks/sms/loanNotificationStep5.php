Sehr <?= ($creditRequest->getAnr() == 1) ? 'geehrter Herr' : 'geehrte Frau'  ?> <?= $creditRequest->getNachname() ?>, sollten wir bis zum <?= date ('d.m.Y' , strtotime("+3 days")) ?> keine Rückmeldung mehr erhalten, stellen wir Ihren Kreditvertrag bei der Bank in STORNO.