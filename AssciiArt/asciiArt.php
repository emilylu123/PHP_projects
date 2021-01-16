<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Yingyao Lu PHP</title>
</head>
<body>
    <h1>Yingyao Lu PHP</h1>
    <p>The SHA256 hash for "Yingyao Lu" is
    <?php
        print hash('sha256', 'Yingyao Lu');
    ?>
    </p>

    <pre>ASCII ART:
            /$$     /$$
            |  $$   /$$/
             \  $$ /$$/
              \  $$$$/
               \  $$/
                | $$
                | $$
                |__/ </pre>

    <p><a href="check.php">Click here to check the error setting</a></p>
    <p><a href="fail.php">Click here to cause a traceback</a></p>

</body>
</html>