<?php
include 'customFunctions.php';
if (isset($_POST['sell'])) {
    $item_id = $_POST['sell'];
    include 'dbconn.php';

    $sql = "UPDATE item
            SET user_id = 0
            WHERE item_id = '$item_id'";
    $query = $conn->query($sql);
    
    $sql = "SELECT * FROM item WHERE item_id = '$item_id'";
    $query = $conn->query($sql);
    $record = $query->fetch_assoc();
    $item_id = $record['masteritem_id'];

    $sql = "SELECT * FROM masteritem WHERE masteritem_id = '$item_id'";
    $query = $conn->query($sql);
    $record = $query->fetch_assoc();
    $item_price = $record['price'];

    $sql = "UPDATE user
            SET credits = credits + '$item_price'
            WHERE user_id = '$_SESSION[user_id]'";
    $query = $conn->query($sql);

    $conn->close();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gambling</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    <link rel="icon" type="image/png" href="image/icon.png" />
    
</head>
<style>
    .Industrial {
        color: #6496d4;
    }
    .Mil-spec {
        color: #5e98d9;
    }
    .Restricted {
        color: #4b69ff;
    }
    .Classified {
        color: #8847ff;
    }
    .Covert {
        color: #d32ce6;
    }
    .Contraband {
        color: #eb4b4b;
    }
</style>
<body>
    <?php navbar(); ?>
    <h1 class="text-center">Inventory</h1>
    <div class="container-fluid">
        <h2>Total Balance:</h2>
    </div>
    <!-- Container with cards -->
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5">
            <?php
            // Display the items dynamically
            include 'dbconn.php';
            $sql = "SELECT i.*, m.* FROM item i
                INNER JOIN masteritem m ON i.masteritem_id = m.masteritem_id
                WHERE user_id = '$_SESSION[user_id]'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <form action="" method="post">
                        <div class="col">
                            <div class="card">
                                <?php
                                ?>
                                <img src="image/skins/Cases/<?php echo $row['collection'] . "/" . $row['image']; ?>" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                                <div class="card-body text-center">
                                    <h5 class="card-title"><?php echo $row['item_name']; ?></h5>
                                    <p class="card-text <?php echo $row['rarity'];?>"><?php echo $row['rarity']; ?></p>
                                        <div class="row justify-content-center">
                                            <div class="d-grid col-6 text-center">
                                                <button type="submit" name="sell" value="<?php echo $row['item_id'];?>" class="btn btn-primary">Sell</button>
                                            </div>
                                        </div>
                                    <p class="card-text">
                                        <small class="text-body-secondary">$<?php echo $row['price']; ?></small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php
                }
            } else {
                echo "No items found.";
            }
            $conn -> close();
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>
