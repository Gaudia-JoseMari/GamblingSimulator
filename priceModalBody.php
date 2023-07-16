<?php
function priceModalBody()
{
?>
    <p class="text-center"><?php echo $prices[$pricekey]['name']; ?></p>
    <img src="./image/skins/Cases/<?php echo $case . "/" . $prices[$pricekey]['image']; ?>">
    <div class="flex-column text-center">
        <div class="p-2">$<?php echo $prices[$pricekey]['price'] ?></div>
        <div class="p-2"><?php echo $prices[$pricekey]['rarity'] ?></div>
    </div>
<?php
}
?>