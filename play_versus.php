
<?php include "customFunctions.php";?>
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

            <div class="col-6">
                <div class="text-center">
                    <img class="border border-danger" src=image/skins/nahida.png>
                </div>

                <div class="container text-center">
                    <div class="d-flex justify-content-center p-2">
                        <div class="col-3 border bg-light">Nahida</div>
                    </div>                   
                    <div class="d-flex justify-content-center p-2">
                        <div class="col-2 border bg-light">$1,000,000</div>
                    </div>                   
                </div>
            </div>

            <div class="col-6">
                <div class="text-center">
                    <img class="border border-danger" src=image/skins/nahida.png>
                </div>

                <div class="container text-center">
                    <div class="d-flex justify-content-center p-2">
                        <div class="col-3 border bg-light">Nahida</div>
                    </div>                   
                    <div class="d-flex justify-content-center p-2">
                        <div class="col-2 border bg-light">$1,000,000</div>
                    </div>                   
                </div>
            </div>
        </div>
        
        <div class="row gx-4 align-items-center">
            <div class="col-4">
                <div class="winnings text-center">
                    <div class="d-flex justify-content-center border">Your Winnings</div>
                    <div class="p-2">Lerum ipsum dolor sit amet, consectetur adipiscing elit.</div>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                </div>               
            </div>

            <div class="col-4 border">
                <div class="flex-column text-center">
                    <div class="p-2">Total earnings:</div>
                    <div class="p-2">Current Price:</div>
                </div>
                <div class="d-grid col-4 gap-1 mx-auto">
                    <button type="button" class="btn btn-primary">Roll</button>            
                    <button type="button" class="btn btn-primary">Sell Current</button>            
                    <button type="button" class="btn btn-primary">Sell All</button>            
                    <button type="button" class="btn btn-primary">Stop</button>            
                </div>
            </div>

            <div class="col-4">
                <div class="winnings text-center">
                    <div class="d-flex justify-content-center border">Winnings</div>
                    <div class="p-2">Lerum ipsum dolor sit amet, consectetur adipiscing elit.</div>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                    <img class="border border-danger" src=image/skins/Rezmo.png>
                </div>               
            </div>
        </div>


    </div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>