<?php
$posts = array(
    array('id' => '17976', 'text' => 'Viešbutis Šventojoje ,, Pajūrio sodyba\'\' nuolatiniam darbui ieško administratorių ir virėjos vasaros sezonui. Skambinti 869333133 ', 'cost' => '542', 'onPay' => '1493195731'),
    array('id' => '17885', 'text' => 'Ieskoma Valytoja nedideliam viesbutukui Palangoje, vasaros sezonui. Patirtis dirbant viesbutyje privalumas.', 'cost' => '214', 'onPay' => '0'),
    array('id' => '17533', 'text' => 'TINKAVIMAS KALKINIU SKIEDINIU KOKYBIŠKAI IR NEBRANGIAI.TURIME 20 METŲ PATIRTĮ IR LABAI GERĄ REPUTACIJĄ. 868408837', 'cost' => '884', 'onPay' => '1490043275'),
    array('id' => '17532', 'text' => 'Parduodamas tvarkingas didelis mūrinis garažas su rūsiu,45kvadratai bendro ploto,bangu g. prie Medvalakio 860584184', 'cost' => '512', 'onPay' => '1489947320'),
    array('id' => '17485', 'text' => 'Ieskoma Valytoja nedideliam viesbutukui Palangoje, vasaros sezonui. Patirtis dirbant viesbutyje privalumas.', 'cost' => '214', 'onPay' => '0'),
    array('id' => '17303', 'text' => 'Perkame įvairius automobilius, mikroautobusus. Tvarkingus, su defektais, daužtus. 864691263', 'cost' => '800', 'onPay' => '1488368780'),
    array('id' => '17302', 'text' => 'Pirkčiau katerį-valtį su varikliu. Gali būti su defektu, apleistas. 864691263', 'cost' => '400', 'onPay' => '1488368133'),
    array('id' => '17102', 'text' => 'Parduodu geros būklės jūrinį konteinerį. Galima naudoti kaip sandėlį. Tel. 865988820', 'cost' => '400', 'onPay' => '1485962389'),
    array('id' => '16992', 'text' => 'Parduodu dideli mūrini garažą  Bangų g. prie Medvalakio,garažas sausas, tvarkingas su rūsiu,yra elektra .Garažas 22m²  rūsys taip pat 22m²', 'cost' => '382', 'onPay' => '0'),
    array('id' => '16989', 'text' => 'Ieškau apleisto 6 arų sklypo soduose: sodinimui, mašinos nusiplovimui. Gal kas turi nereikalingą ir neparduoda. Galėčiau prižiūrėti. Tel. 8 609 76193.', 'cost' => '168', 'onPay' => '1484996260'),
    array('id' => '16694', 'text' => 'Sportiškas ir išsilavinęs vyriškis, skaitantis ir informaciją suvokiantis daugeliu Europos kalbų, ieško bet kokio darbo (3 dienas per savaitę) su oriu atlyginimu. Darbo pasiūlymus siųsti el. paštu jamamsitadarba@gmail.com', 'cost' => '466', 'onPay' => '1481212052'),
    array('id' => '16626', 'text' => 'Parduodu avieną (gimę š. m. kovą – balandį ), mėsa puikaus skonio, neturi būdingo specifinio kvapo, galima pirkti ir po pusę avinuko ar užsisakyti artėjančioms šventėms, atvežu. Kaina 5 €/ kg., tel.nr. 8 678 35 932.', 'cost' => '1864', 'onPay' => '1480663237'),
    array('id' => '16554', 'text' => 'Kokybiškai klijuoju plyteles. Turiu ilgametę patirtį.', 'cost' => '200', 'onPay' => '0'),
    array('id' => '16515', 'text' => 'Dazymo,glaistymo darbai su amerikietiska įranga.Didele darbo patirtis.+37062700070', 'cost' => '400', 'onPay' => '0'),
    array('id' => '16311', 'text' => 'Pirkčiau 2 kambarių butą iki 30000 eurų.', 'cost' => '200', 'onPay' => '0'),
    array('id' => '16172', 'text' => 'Parduodamas naujos statybos 122 kv. m. namas Vydmantuose. Kaina - 78000 Eur. Tel. 8 659 88820', 'cost' => '214', 'onPay' => '0'),
    array('id' => '16171', 'text' => 'Parduodamas naujos statybos 122 kv. m. namas Vydmantuose. Kaina - 78000 Eur. Tel. 8 659 88820', 'cost' => '214', 'onPay' => '0'),
    array('id' => '16169', 'text' => '5 mergaitiškas (150-170 cm) žiemines striukes. 846053024', 'cost' => '100', 'onPay' => '0'),
    array('id' => '16168', 'text' => 'Eko BRIKETAI Gamintoju kainomis', 'cost' => '500', 'onPay' => '0')
);
$amount = sizeof($posts);
$paidPosts = 0;
$sumForPaidPosts = 0;
$sumForNotPaidPosts = 0;

foreach ($posts as $post) {
    if ($post['onPay'] != 0) {
        $sumForPaidPosts += $post['cost'];
        $paidPosts++;

    } else {
        $sumForNotPaidPosts += $post['cost'];
    }
}

$order = isset($_GET['order']) ?? "";
if (!array_key_exists($order, $posts[0])) {
    $order = "id";
}

usort($posts, fn($a, $b) => $a[$order] <=> $b[$order]);


//antras budas
//usort($posts, function ($a, $b) use ($order) {
//    return $a[$order] <=> $b[$order];
//
//});
//vienas budas
//if ($order == 'cost') {
//    usort($posts, function ($a, $b) {
//        return $a['cost'] <=> $b['cost'];
//    });
//}
//if ($order == 'onPay') {
//    usort($posts, function ($a, $b) {
//        return $a['onPay'] <=> $b['onPay'];
//    });
//}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ads</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<?php include "header.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">Skelbimų sąrašas</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="col-1">ID</th>
                            <th class="col-5">Aprašymas</th>
                            <th class="col-3">
                                <a href="?order=cost">
                                    Kaina </a></th>
                            <th class="col-3">
                                <a href="?order=onPay">
                                    Apmokėjimo data</a></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($posts as $post) { ?>
                            <tr>
                                <td>
                                    <?= $post['id'] ?>
                                </td>
                                <td>
                                    <?= $post['text'] ?>
                                </td>
                                <td>
                                    <?= $post['cost'] ?>
                                </td>
                                <td>
                                    <?php
                                    echo (date(' jS \of F Y h:i:s A', $post['onPay']) == date(' jS \of F Y h:i:s A', 0)) ? '0' : date(' jS \of F Y h:i:s A', $post['onPay']);
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header"> Paskaičiavimai</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="col-1">Viso skelbimų</th>
                                <th class="col-5">Apmokėti skelbimai</th>
                                <th class="col-3">Suma, gauta už skelbimus</th>
                                <th class="col-3">Suma, laukiama už skelbimus</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <?= $amount ?>
                                </td>
                                <td>
                                    <?= $paidPosts ?>
                                </td>
                                <td>
                                    <?= $sumForPaidPosts ?>
                                </td>
                                <td>
                                    <?= $sumForNotPaidPosts ?>
                                </td>
                            </tr>
                            </tbody
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>