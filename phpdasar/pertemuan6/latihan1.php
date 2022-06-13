<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            background-color: green;
            transition: 1s;
            float: left;
            margin: 3px;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>

    <?php
    $angka = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    ?>

    <?php foreach ($angka as $a) : ?>
        <?php foreach ($a as $b) : ?>
            <div class="kotak"><?= $b ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>


</body>

</html>