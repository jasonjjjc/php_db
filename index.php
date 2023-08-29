<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET Superglobal</title>
</head>

<body>
    <?php
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
    } else {
        $name = "World";
    }
    function greeting()
    {
        if (isset($_GET['name'])) {
            $name = $_GET['name'];
            echo "Hello, " . $name;
        }
    }
    greeting()
    ?>
    <form method="get" action="index.php">
        <input type="text" name="name">
        <input type="text" name="lang">
        <input type="submit" value="submit">
    </form>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Random Picsum Images</title>
        <style>
            .image-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 20px;
            }

            img {
                max-width: 100%;
                height: auto;
            }
        </style>
    </head>

    <body>

        <div class="db-display">
            <h1>Database Content</h1>

            <?php
            try {
                $db = new PDO("sqlite:" . __DIR__ . "/daaatabase.db");
                var_dump($db);
            } catch (Exception $e) {
                echo "Unable to connect";
                echo $e->getMessage();
                exit;
            }
            ?>
        </div>

        <div class="image-container">
            <h1>Random Picsum Images</h1>
            <?php
            // Define the number of images to display
            $numOfImages = 6;

            for ($i = 0; $i < $numOfImages; $i++) {
                // Use Picsum API to get a random image each time
                $width = rand(200, 400);  // Random width between 200 and 400 pixels
                $height = rand(200, 400); // Random height between 200 and 400 pixels
                echo "<img src='https://picsum.photos/{$width}/{$height}' alt='Random Image'>";
            }
            ?>
        </div>

    </body>

    </html>


</body>

</html>