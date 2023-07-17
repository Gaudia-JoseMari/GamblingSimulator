<?php
include "customFunctions.php";

if (isset($_POST['roll'])) {
    $case = $_POST['roll'];
    include "dbconn.php";
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

    //reduce credits
    $sql = "UPDATE user
            SET credits = credits - $caseprice
            WHERE user_id = '$_SESSION[user_id]'";
    $query = $conn->query($sql);

    $sql = "SELECT credits FROM user WHERE user_id = '$_SESSION[user_id]'";
    $query = $conn->query($sql);
    $record = $query->fetch_array();
    $_SESSION['credits'] = $record['credits'];

    $pricesJS = json_encode($prices);
    $rand = rand(0, count($prices) - 1);
    $pricekey = array_keys($prices)[$rand];
    $rand = rand(0, count($prices) - 1);
    $pricekeyai = array_keys($prices)[$rand];

    //add item to inventory
    $priceid = $prices[$pricekey]['masterid'];
    date_default_timezone_set("Asia/Hong_Kong");
    $date_received = date("Y-m-d H:i:s", time());
    $sql = "INSERT INTO item (user_id, masteritem_id, item_name, date_received)
            VALUES ('$_SESSION[user_id]', '$priceid', '$pricename', '$date_received')";
    $query = $conn->query($sql);
    $conn->close();

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
    <title>Play VS AI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="image/icon.png" />
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
    <?php
    navbar();
    ?>
    <div class="container">
        <div class="price p-4 row justify-content-center align-items-center">

            <div class="col-6">
                <div class="text-center">
                    <img id="skin" src="image/skins/Cases/<?php echo $case . '/' . $caseimg; ?>">
                </div>

                <div class="container text-center">
                    <div class="d-flex justify-content-center p-2">
                        <div class="col-4 border bg-light" id="item_name"><?php echo $_POST['case'];?></div>
                    </div>
                    <div class="d-flex justify-content-center p-2">
                        <div class="col-2 border bg-light" id="price">$<?php echo $caseprice;?></div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="text-center">
                    <img id="skinai" src="image/skins/Cases/<?php echo $case . '/' . $caseimg; ?>">
                </div>

                <div class="container text-center">
                    <div class="d-flex justify-content-center p-2">
                        <div class="col-4 border bg-light" id="item_name_ai"><?php echo $_POST['case'];?></div>
                    </div>
                    <div class="d-flex justify-content-center p-2">
                        <div class="col-2 border bg-light" id="priceai">$<?php echo $caseprice;?></div>
                    </div>
                </div>
            </div>

        <div class="row gx-4 justify-content-center align-items-center">

            <div class="col-6">
                <div class="flex-column text-center">
                    <div class="p-2">Current Credits:<br><?php echo $_SESSION['credits'];?></div>
                    <div class="p-2"></div>
                </div>
                <form action="play_versus.php" method="post">
                    <div class="d-grid col-3 gap-1 mx-auto">
                        <button name="case" value="<?php echo $_POST['roll'];?>" type="submit" class="btn btn-primary">Roll</button>

                        <!-- Modal after roll-->
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">You Won</h5>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-center"><?php echo $prices[$pricekey]['name']; ?></p>
                                        <img src="./image/skins/Cases/<?php echo $case . "/" . $prices[$pricekey]['image'];?>">
                                        <div class="flex-column text-center">
                                            <div class="p-2">$<?php echo $prices[$pricekey]['price']?></div>
                                            <div class="p-2 <?php echo $prices[$pricekey]['rarity'];?>"><?php echo $prices[$pricekey]['rarity']?></div>
                                        </div>
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
                            var pricekeyai = <?php echo $pricekeyai;?>;

                            interval = setInterval(function() {
                                var rindex = Math.floor(Math.random() * Object.keys(prices).length);
                                var rkey = Object.keys(prices)[rindex];
                                var rimage = prices[rkey]['image'];
                                var skin = document.getElementById("skin");
                                document.getElementById("item_name").innerHTML = prices[rkey]['name'];
                                document.getElementById("price").innerHTML = "$" + prices[rkey]['price'];
                                var skinlink = skin.src.substring(0, skin.src.lastIndexOf("/") + 1);
                                skin.src = skinlink + rimage;

                                var rindex = Math.floor(Math.random() * Object.keys(prices).length);
                                var rkey = Object.keys(prices)[rindex];
                                var rimage = prices[rkey]['image'];
                                var skin = document.getElementById("skinai");
                                document.getElementById("item_name_ai").innerHTML = prices[rkey]['name'];
                                document.getElementById("priceai").innerHTML = "$" + prices[rkey]['price'];
                                var skinlink = skin.src.substring(0, skin.src.lastIndexOf("/") + 1);
                                skin.src = skinlink + rimage;

                                // console.log(rkey, ":", rimage);
                            }, 30)

                            setTimeout(() => {
                                clearInterval(interval);

                                    var price = prices[pricekey]['image'];
                                    document.getElementById("item_name").innerHTML = prices[pricekey]['name'];
                                    document.getElementById("price").innerHTML = "$" + prices[pricekey]['price'];
                                    var skin = document.getElementById("skin");
                                    var skinlink = skin.src.substring(0, skin.src.lastIndexOf("/") + 1);
                                    skin.src = skinlink + price;
                                
                                    price = prices[pricekeyai]['image'];
                                    document.getElementById("item_name_ai").innerHTML = prices[pricekeyai]['name'];
                                    document.getElementById("priceai").innerHTML = "$" + prices[pricekeyai]['price'];
                                    var skin = document.getElementById("skinai");
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