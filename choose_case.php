<?php
include 'customFunctions.php';
// Retrieve items from the database
include 'dbconn.php';
$sql = "SELECT * FROM masteritem WHERE item_type = 'Case'";
$result = $conn->query($sql);
var_dump($result);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gambling</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <?php navbar(); ?>
    <h1 class="text-center">Cases</h1>
    <div class="container-fluid">
        <h2>Total Balance:</h2>
    </div>
    <!-- Container with cards -->
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5">
            <?php
            // Display the items dynamically
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col">
                        <div class="card">
                            <img src="image/Cases/<?php echo $row['image']; ?>" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['item_name']; ?></h5>
                                <p class="card-text"><?php echo $row['rarity']; ?></p>
                                <p class="card-text">
                                    <small class="text-body-secondary"><?php echo $row['price']; ?></small>
                                </p>
                                <form action="play_solo.php" method="post">
                                    <button type="submit" name="case" value="<?php echo $row['collection']?>"class="btn btn-primary" href="#" role="button">Open</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "No items found.";
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>
