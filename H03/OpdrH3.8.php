<?php
$kappersagenda["Mevr.Pietersen"] = 9.15;
$kappersagenda["Mevr.Willems"] = 9.30;
$kappersagenda[""] = 9.45;
$kappersagenda["Paul van den Broek"] = 10.00;
$kappersagenda["Karel de Meeuw"] = 10.15;
$kappersagenda[""] = 10.3;

print("De volgende momenten zijn nog beschikbaar:<ul>");

foreach($kappersagenda as $afspraak => $tijd) {
    if ($afspraak == "") {
        print("<li>" . $tijd . "</li>");
    }
}

