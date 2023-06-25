<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>II DAJI DOWNLOADER</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img src="down.png" class='cover' />
    <div class="container">

        <form action="./download.php" method="post">

            <?php
            if (isset($_GET['message'])) {
            ?>
                <h6 class="error">
                    <?php echo $_GET['message']?>
                </h6>
            <?php
            }
            ?>

            <h1>Download From Everywhere</h1>
            <p>Download Every file from everywhere in a seconds</p>
            <div class="download-content">
                <input type="text" name="file" />
                <button name="download" type="submit">Download</button>
            </div>

            <div class="steps">
                <h6>FOLLOW STEPS</h6>
                <ul>
                    <li>Copy the file address from the internet </li>
                    <li>Past file address content to the input</li>
                    <li>Hit The Download Button </li>
                </ul>

                <h5>We Appreciate if you share this web with your friends. Thanks You</h5>
            </div>
        </form>
    </div>
</body>

</html>