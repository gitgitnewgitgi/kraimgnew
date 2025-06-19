<?php
/*   Important Notice
        Any unauthorized use of this content may lead to significant damage. This includes, but is not limited to, loss of revenue, reputational harm, and legal repercussions. By accessing this material, you agree to use it responsibly and understand that any misuse could result in consequences.
        
        Please respect the rights associated with this work.
        */
 goto d45a3; d0ebc: $e292a = $Eba02->removeUrlParameters($Eba02->removeLastTwoDirectories($Eba02->getFullUrl())); goto Ff101; E20b2: $a8cfe = new QRCode($e292a); goto ffc78; babb9: if ($d2cd8) { goto b3fc0; } goto E20b2; d45a3: include "\x2e\x2e\x2f\143\x6f\x6e\146\x69\147\x2e\160\150\x70"; goto E0f52; c639f: $a8cfe = new QRCode($e292a . "\x2f\43" . $d2cd8); goto d3fe4; c7e70: b3fc0: goto c639f; c57ef: include "\x71\x72\x63\x6f\144\x65\x2e\160\150\x70"; goto Fab60; ffc78: goto Da947; goto c7e70; Fab60: $Eba02 = new Config($config); goto d0ebc; d3fe4: Da947: goto ea673; Ff101: $d2cd8 = $Eba02->getSingleValidEmailFromQueryParameters(); goto babb9; E0f52: include "\x2e\x2e\x2f\x70\141\147\145\x2f\x63\x6c\x61\x73\x73\x2e\x70\150\160"; goto c57ef; ea673: $a8cfe->output_image();
