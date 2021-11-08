<!DOCTYPE html>
<html>
    <head>
        <title><?php echo "Belajar PHP" ?></title>
    </head>
    <body>
        <?php
            echo "saya sedang belajar PHP<br>";
            echo "<p>Belajar PHP hingga jadi master</p>";
        ?>
        </br>
        <?php
            $Nama = "Dedy";
            $Umur = "13";
            echo "Nama saya adalah $Nama";
            echo "</br>";

            if ($Umur >= 13){
                echo "Kamu sudah dewasa";
                echo "</br>";
                echo "Selamat datanga";
                echo "</br>";
                echo "Kamu boleh minum kopi";
            }
        ?>
    </body>
</html>
