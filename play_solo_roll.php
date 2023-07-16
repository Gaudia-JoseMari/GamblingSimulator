<?php
include "customFunctions.php";

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

if (isset($_POST['roll'])) {
    var_dump($_POST);
    include "dbconn.php";
    $case = $_POST['roll'];
    $sql = "SELECT * FROM masteritem WHERE collection = '$_POST[roll]'";
    $query = $conn->query($sql);

    $prices = array();
    while ($record = $query->fetch_assoc()) {
        if ($record['item_type'] == "Case") {
            $caseimg = $record['image'];
            $caseprice = $record['price'];
            continue;
        }
        array_push($prices,
            $record['item_name'] = array (
                'masterid' => $record['masteritem_id'],
                'name' => str_replace("_", " ", $record['item_name']),
                'type' => $record['item_type'],
                'collection' => $record['collection'],
                'price' => $record['price'],
                'rarity' => $record['rarity'],
                'game' => $record['game'],
                'image' => $record['image']
            )
        );
    }
    $pricesJS = json_encode($prices);
    echo "<pre>";
    var_dump($pricesJS);
    echo "</pre>";

    //reduce credits
    $sql = "UPDATE user
            SET credits = credits - $caseprice
            WHERE user_id = '$_SESSION[user_id]'";
    $query = $conn->query($sql);

    $sql = "SELECT credits FROM user WHERE user_id = '$_SESSION[user_id]'";
    $query = $conn->query($sql);
    $record = $query->fetch_array();
    $_SESSION['credits'] = $record['credits'];

    $rand = rand(0, count($prices) - 1);
    $pricekey= array_keys($prices)[$rand];

    //add item to inventory
    $priceid = $prices[$pricekey]['masterid'];
    $pricename = $prices[$pricekey]['name'];
    echo $prices[$pricekey]['masterid'];
    $sql = "INSERT INTO item (user_id, masteritem_id, item_name)
            VALUES ('$_SESSION[user_id]', '$priceid', '$pricename')";
    $query = $conn->query($sql);
    $conn->close();
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
                <img id="skin" src="image/skins/Cases/<?php echo $case . '/' . $caseimg; ?>">
            </div>

            <div class="container text-center">
                <div class="d-flex justify-content-center p-2">
                    <div class="col-3 border bg-light" id="item_name">CS20</div>
                </div>
                <div class="d-flex justify-content-center p-2">
                    <div class="col-1 border bg-light" id="price">$179.022</div>
                </div>
            </div>
        </div>

        <div class="row gx-4 justify-content-center align-items-center">

            <div class="col-6 border">
                <div class="flex-column text-center">
                    <div class="p-2">Total earnings:</div>
                    <div class="p-2">Current Price:</div>
                </div>
                <form action="play_solo.php" method="post">
                    <div class="d-grid col-3 gap-1 mx-auto">
                        <button name="case" type="submit" class="btn btn-primary">Roll</button>

                        <!-- Modal after roll-->
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">You Won</h5>
                                    </div>
                                    <div class="modal-body">
                                        <p><?php echo $prices[$pricekey]['name']; ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="home.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Go home</button></a>
                                        <button name="case" value="<?php echo $_POST['roll'];?>" type="submit" class="btn btn-warning">Open more</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            // Delay the popup of the modal
                            setTimeout(function() {
                                var myModal = new bootstrap.Modal(document.getElementById('myModal'));
                                myModal.show();
                            }, 2000); // Delay of 2000 milliseconds (2 seconds)

                            var prices = <?php echo $pricesJS;?>;
                            var pricekey = <?php echo $pricekey;?>;
                            interval = setInterval(function() {
                                var rindex = Math.floor(Math.random() * Object.keys(prices).length);
                                var rkey = Object.keys(prices)[rindex];
                                var rimage = prices[rkey]['image'];
                                var skin = document.getElementById("skin");
                                document.getElementById("item_name").innerHTML = prices[rkey]['name'];
                                document.getElementById("price").innerHTML = prices[rkey]['price'];
                                var skinlink = skin.src.substring(0, skin.src.lastIndexOf("/") + 1);
                                skin.src = skinlink + rimage;

                                console.log(rkey, ":", rimage);
                            }, 20)

                            setTimeout(() => {
                                clearInterval(interval);
                                    var price = prices[pricekey]['image'];
                                    document.getElementById("item_name").innerHTML = prices[pricekey]['name'];
                                    document.getElementById("price").innerHTML = prices[pricekey]['price'];
                                    var skin = document.getElementById("skin");
                                    var skinlink = skin.src.substring(0, skin.src.lastIndexOf("/") + 1);
                                    skin.src = skinlink + price;
                                
                                // var xhr = new XMLHttpRequest();
                                // xhr.open('POST', 'test.php', true);
                                // xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                // xhr.onreadystatechange = function() {
                                //     if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                                //         console.log('Response from PHP:', xhr.responseText);
                                //     }
                                // };
                                // xhr.send('price=' + encodeURIComponent(price));
                            }, 2000);
                        </script>
                    </div>
                </form>
            </div>
        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>