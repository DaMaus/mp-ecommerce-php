<?php
    // SDK de Mercado Pago
    require __DIR__ .  '/vendor/autoload.php';

    // Agrega credenciales
    MercadoPago\SDK::setAccessToken('APP_USR-8058997674329963-062418-89271e2424bb1955bc05b1d7dd0977a8-592190948');

    // Crea un objeto de preferencia
    $preference = new MercadoPago\Preference();

    // Crea un ítem en la preferencia
    $item = new MercadoPago\Item();
    $item->id = "1234";
    $item->title = $_POST['title'];
    $item->description = "Dispositivo móvil de Tienda e-commerce";
    $item->picture_url = "https://damaus-mp-commerce-php.herokuapp.com/assets/samsung-galaxy-s9-xxl.jpg";
    $item->quantity = $_POST['unit'];
    $item->unit_price = $_POST['price'];
    $item->external_reference = "mhernandez4204@gmail.com";

    // Datos del comprador

    $payer = new MercadoPago\Payer();
    $payer->name = "Lalo";
    $payer->surname = "Landa";
    $payer->email = "test_user_58295862@testuser.com";
    $payer->phone = array(
        "area_code" => "52",
        "number" => "5549737300"
    );
    
    $payer->address = array(
        "street_name" => "Insurgentes Sur",
        "street_number" => 1602,
        "zip_code" => "03940"
    );


    $preference->items = array($item);
    $preference->payer = array($payer);
    $preference->save();
?>