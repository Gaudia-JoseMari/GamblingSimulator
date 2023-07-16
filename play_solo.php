<?php
include "customFunctions.php";
$test = "message";

$border = array(
    "Consumer" => "border-light",
    "Industrial" => "border-info-subtle",
    "Mil-Spec" => "border-info",
    "Restricted" => "border-success",
    "Classified" => "border-primary",
    "Covert" => "border-danger",
    "Contraband" => "border-warning"
);

$rarity = "Covert";

if (isset($_POST['case'])) {
    var_dump($_POST);
    include "dbconn.php";
    $sql = "SELECT * FROM masteritem WHERE collection = '$_POST[case]'";
    $query = $conn->query($sql);
    $conn->close();

    $prices = array();
    while ($record = $query->fetch_assoc()) {
        if ($record['item_type'] == "Case"){
            $caseimg = $record['image'];
            $caseprice = $record['price'];
            continue;
        }
        $prices[$record['item_name']] = $record['image'];
    }

    if ($_SESSION['credits'] < $caseprice) {
        echo "<script>alert('Not enough credits!');</script>";
        echo "<script>window.location.replace('choose_case_versus.php');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<style>
    .price {
        background-color: bisque;
    }

    .price-desc {
        width: 800px;
        background-color: aquamarine;
    }

    .price img {
        max-width: 500px;
    }

    .buttons {
        height: 200px;
    }

    .winnings {
        height: 400px;
        max-height: 400vh;
        max-width: 400ch;
        overflow-y: auto;
    }
</style>

<body>
    <?php
    navbar();
    ?>
    <div class="container">
        <div class="price p-4 row justify-content-center align-items-center">

            <div class="text-center">
                <img id="skin" src="image/Cases/<?php echo $caseimg; ?>">
            </div>

            <div class="container text-center">
                <div class="d-flex justify-content-center p-2">
                    <div class="col-3 border bg-light"><?php echo $_POST['case'];?></div>
                </div>
                <div class="d-flex justify-content-center p-2">
                    <div class="col-1 border bg-light">$<?php echo $caseprice;?></div>
                </div>
            </div>
        </div>

        <div class="row gx-4 justify-content-center align-items-center">

            <div class="col-6 border">
                <div class="flex-column text-center">
                    <div class="p-2">Current Credits:<br><?php echo $_SESSION['credits'];?></div>
                    <div class="p-2">Current Price:</div>
                </div>

                <form action="play_solo_roll.php" method="post">
                    <div class="d-grid col-3 gap-1 mx-auto">
                        <button name="roll" value="<?php echo $_POST['case'];?>" type="submit" class="btn btn-primary">Roll</button>
                    </div>
                </form>

            </div>
        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>