<?php

// Change this value
$centimetre = 1;
$decimetre = 1;
$metre = 1;
$kilometre = 1;


$inch = 1;
$foot = 1;
$yard = 1;
$chain = 1;
$furlong = 1;
$mile = 1;



$millimetre = $centimetre * 10;
$centimetre_from_dm = $decimetre * 10;
$centimetre_from_m  = $metre * 100;
$metre_from_km = $kilometre * 1000;


$inches = $foot * 12;
$feet = $yard * 3;
$yards_from_chain = $chain * 22;
$yards_from_furlong = $furlong * 220;
$chains_from_furlong = $furlong * 10;
$yards_from_mile = $mile * 1760;
$furlongs_from_mile = $mile * 8;


$mm_to_inches = $millimetre * 0.03937;
$cm_to_inches = $centimetre * 0.39370;
$m_to_inches = $metre * 39.37008;
$m_to_feet = $metre * 3.28084;
$m_to_yards = $metre * 1.09361;
$km_to_yards = $kilometre * 1093.6133;
$km_to_miles = $kilometre * 0.62137;


$inch_to_cm = $inch * 2.54;
$foot_to_cm = $foot * 30.48;
$yard_to_cm = $yard * 91.44;
$yard_to_m = $yard * 0.9144;
$mile_to_m = $mile * 1609.344;
$mile_to_km = $mile * 1.609344;


// Output
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Metric Conversions</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            padding: 20px;
            margin: 0;
        }
        h1 {
            background-color: #ffff00;
            border: 2px solid #000;
            padding: 12px;
            text-align: center;
            margin: 0 0 20px 0;
            font-size: 18px;
            font-weight: bold;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h1>METRIC CONVERSIONS</h1>
        <table>
            <tr>
                <td class="row-header"><?= $centimetre ?> centimetre</td>
                <td>=</td>
                <td><?= $millimetre ?> millimetres</td>
                <td style="width: 40px;"></td>
                <td class="row-header"><?= $centimetre ?> cm</td>
                <td>=</td>
                <td><?= $millimetre ?> mm</td>
            </tr>
            <tr>
                <td class="row-header"><?= $decimetre ?> decimetre</td>
                <td>=</td>
                <td><?= $centimetre_from_dm ?> centimetres</td>
                <td></td>
                <td class="row-header"><?= $decimetre ?> dm</td>
                <td>=</td>
                <td><?= $centimetre_from_dm ?> cm</td>
            </tr>
            <tr>
                <td class="row-header"><?= $metre ?> metre</td>
                <td>=</td>
                <td><?= $centimetre_from_m ?> centimetres</td>
                <td></td>
                <td class="row-header"><?= $metre ?> m</td>
                <td>=</td>
                <td><?= $centimetre_from_m ?> cm</td>
            </tr>
            <tr>
                <td class="row-header"><?= $kilometre ?> kilometre</td>
                <td>=</td>
                <td><?= $metre_from_km ?> metres</td>
                <td></td>
                <td class="row-header"><?= $kilometre ?> km</td>
                <td>=</td>
                <td><?= $metre_from_km ?> m</td>
            </tr>
        </table>
    </div>

    <div class="container">
        <h1>IMPERIAL CONVERSIONS</h1>
        <table>
            <tr>
                <td class="row-header"><?= $foot ?> foot</td>
                <td>=</td>
                <td><?= $inches ?> inches</td>
                <td style="width: 40px;"></td>
                <td class="row-header"><?= $foot ?> ft</td>
                <td>=</td>
                <td><?= $inches ?> in</td>
            </tr>
            <tr>
                <td class="row-header"><?= $yard ?> yard</td>
                <td>=</td>
                <td><?= $feet ?> feet</td>
                <td></td>
                <td class="row-header"><?= $yard ?> yd</td>
                <td>=</td>
                <td><?= $feet ?> ft</td>
            </tr>
            <tr>
                <td class="row-header"><?= $chain ?> chain</td>
                <td>=</td>
                <td><?= $yards_from_chain ?> yards</td>
                <td></td>
                <td class="row-header"><?= $chain ?> ch</td>
                <td>=</td>
                <td><?= $yards_from_chain ?> yd</td>
            </tr>
            <tr>
                <td class="row-header"><?= $furlong ?> furlong</td>
                <td>=</td>
                <td><?= $yards_from_furlong ?> yards</td>
                <td></td>
                <td class="row-header"><?= $furlong ?> fur</td>
                <td>=</td>
                <td><?= $yards_from_furlong ?> yd</td>
            </tr>
             <tr>
                <td class="row-header"><?= $mile ?> mile</td>
                <td>=</td>
                <td><?= $yards_from_mile ?> yards</td>
                <td></td>
                <td class="row-header"><?= $mile ?> mi</td>
                <td>=</td>
                <td><?= $yards_from_mile ?> yd</td>
            </tr>
        </table>
    </div>

    <div class="container">
        <h1>METRIC -> IMPERIAL CONVERSIONS</h1>
        <table>
            <tr>
                <td class="row-header"><?= $millimetre ?> millimetre</td>
                <td>=</td>
                <td><?= $mm_to_inches ?> inches</td>
                <td style="width: 40px;"></td>
                <td class="row-header"><?= $millimetre ?> mm</td>
                <td>=</td>
                <td><?= $mm_to_inches ?> in</td>
            </tr>
            <tr>
                <td class="row-header"><?= $centimetre ?> centimetre</td>
                <td>=</td>
                <td><?= $cm_to_inches ?> inches</td>
                <td></td>
                <td class="row-header"><?= $centimetre ?> cm</td>
                <td>=</td>
                <td><?= $cm_to_inches ?> in</td>
            </tr>
            <tr>
                <td class="row-header"><?= $metre ?> metre</td>
                <td>=</td>
                <td><?= $m_to_inches ?> inches</td>
                <td></td>
                <td class="row-header"><?= $metre ?> m</td>
                <td>=</td>
                <td><?= $m_to_inches ?> in</td>
            </tr>
            <tr>
                <td class="row-header"><?= $metre ?> metre</td>
                <td>=</td>
                <td><?= $m_to_feet ?> feet</td>
                <td></td>
                <td class="row-header"><?= $metre ?> m</td>
                <td>=</td>
                <td><?= $m_to_feet ?> ft</td>
            </tr>
             <tr>
                <td class="row-header"><?= $metre ?> metre</td>
                <td>=</td>
                <td><?= $m_to_yards ?> yards</td>
                <td></td>
                <td class="row-header"><?= $metre ?> m</td>
                <td>=</td>
                <td><?= $m_to_yards ?> yd</td>
            </tr>
             <tr>
                <td class="row-header"><?= $kilometre ?> kilometre</td>
                <td>=</td>
                <td><?= $km_to_yards ?> yards</td>
                <td></td>
                <td class="row-header"><?= $kilometre ?> km</td>
                <td>=</td>
                <td><?= $km_to_yards ?> yd</td>
            </tr>
             <tr>
                <td class="row-header"><?= $kilometre ?> kilometre</td>
                <td>=</td>
                <td><?= $km_to_miles ?> miles</td>
                <td></td>
                <td class="row-header"><?= $kilometre ?> km</td>
                <td>=</td>
                <td><?= $km_to_miles ?> mi</td>
            </tr>
        </table>
    </div>

    <div class="container">
        <h1>IMPERIAL -> METRIC CONVERSIONS</h1>
        <table>
            <tr>
                <td class="row-header"><?= $inch ?> inch</td>
                <td>=</td>
                <td><?= $inch_to_cm ?> centimetres</td>
                <td style="width: 40px;"></td>
                <td class="row-header"><?= $inch ?> in</td>
                <td>=</td>
                <td><?= $inch_to_cm ?> cm</td>
            </tr>
            <tr>
                <td class="row-header"><?= $foot ?> foot</td>
                <td>=</td>
                <td><?= $foot_to_cm ?> centimetres</td>
                <td></td>
                <td class="row-header"><?= $foot ?> ft</td>
                <td>=</td>
                <td><?= $foot_to_cm ?> cm</td>
            </tr>
            <tr>
                <td class="row-header"><?= $yard ?> yard</td>
                <td>=</td>
                <td><?= $yard_to_cm ?> centimetres</td>
                <td></td>
                <td class="row-header"><?= $yard ?> yd</td>
                <td>=</td>
                <td><?= $yard_to_cm ?> cm</td>
            </tr>
            <tr>
                <td class="row-header"><?= $yard ?> yard</td>
                <td>=</td>
                <td><?= $yard_to_m ?> metres</td>
                <td></td>
                <td class="row-header"><?= $yard ?> yd</td>
                <td>=</td>
                <td><?= $yard_to_m ?> m</td>
            </tr>
             <tr>
                <td class="row-header"><?= $mile ?> mile</td>
                <td>=</td>
                <td><?= $mile_to_m ?> metres</td>
                <td></td>
                <td class="row-header"><?= $mile ?> mi</td>
                <td>=</td>
                <td><?= $mile_to_m ?> m</td>
            </tr>
             <tr>
                <td class="row-header"><?= $mile ?> mile</td>
                <td>=</td>
                <td><?= $mile_to_km ?> kilometres</td>
                <td></td>
                <td class="row-header"><?= $mile ?> mi</td>
                <td>=</td>
                <td><?= $mile_to_km ?> km</td>
            </tr>
        </table>
    </div>
</body>
</html>
