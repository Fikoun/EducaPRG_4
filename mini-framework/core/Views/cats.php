<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cats</title>
</head>

<body>

        Seznam koček <br><br>

        <?php for ($i = 1; $i <= 10; $i++): ?>

            <a href='/cats/catId?id=<?= $i ?>'>
                Cat #<?= $i ?>
            </a>

            <a style='font-size: 8px; color: red;' href='/cats/remove?id=<?= $i ?>'>
                SMAZAT
            </a> <br>
       
        <?php endfor; ?>


    
</body>

</html>