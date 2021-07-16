<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>tablo</title>
    </head>
    <body>
        <table border = "1" height = "300" witdh = "500" >
            <tr>
                <td widht = "200"><b>Ad</b></td>
                <td><?php echo $_POST["isim"];?></td>
            </tr>

            <tr>
                <td ><b>E-mail</b></td>
                <td><?php echo $_POST["email"];?></td>
            </tr>

            <tr>
                <td ><b>Diiler</b></td>
                <td><?php 
                    if(isset($_POST['dil'])) {
                    $sporlar = $_POST['dil'];
                    foreach($sporlar as $spor) {
                    echo ' * ' . $spor . ' <br/>';
                    }
                    } else {
                    echo 'Hiç hobi seçmediniz.';
                    }
                    ?></td>
            </tr>

            <tr>
                <td><b>Şehir</b></td>
                <td><?php echo $_POST["şehir"];?></td>
            </tr>

            <tr>
                <td ><b>Dil Seviyesi</b></td>
                <td><?php echo $_POST["derece"];?></td>
            </tr>

            <tr>
                <td ><b>Şifre</b></td>
                <td><?php echo $_POST["sifre"];?></td>
            </tr>

            <tr>
                <td ><b>Açıklama</b></td>
                <td><?php echo $_POST["comments"];?></td>
            </tr>

        </table>
    </body>
</html>