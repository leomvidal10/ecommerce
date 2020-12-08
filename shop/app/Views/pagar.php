<?php
    $precoTotal = 0;
    if(isset($_POST['precoTotal'])) {
        $precoTotal = $_POST['precoTotal'];
    }

    MercadoPago\SDK::setAccessToken('TEST-6217672496200545-081121-2c0b602aabd46b570fee180999f60f12-608255711');
    $preference = new MercadoPago\Preference();
    $item = new MercadoPago\Item();
    $item->title = 'CactusStyl';
    $item->quantity = 1;
    $item->unit_price = $precoTotal;
    $preference->items = array($item);
    $preference->save();

    echo($preference->id);
?>