<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEMBUAT TABEL DENGAN PERULANGAN PHP</title>
    <style>
        .warnaBaris{
            background-color: silver;
        }
    </style>
</head>
<body>
    <h1>MEMBUAT TABEL DENGAN PERULANGAN PHP</h1>

    <h2>MODEL 1</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 
            for( $i = 1; $i <= 5; $i++ ) {
                echo "<tr>";
                    for( $j = 1; $j <=7; $j++ ) {
                        echo "<td>$i, $j</td>";
                    }
                echo "</tr>";
            }
        ?>
    </table>

    <br><hr>

    <h2>MODEL 2 (TEMPLATING)</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for( $i = 1; $i <=5; $i++) : ?>
            <?php if(  $i % 2 ==1) : ?>
            <tr class="warnaBaris">
            <?php else : ?>
            <tr>
            <?php endif; ?>
                <?php for($j = 1; $j <= 7; $j++) : ?>
                    <td><?php echo "$i, $j" ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>