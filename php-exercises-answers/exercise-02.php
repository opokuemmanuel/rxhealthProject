<?php
require_once "db.php";

function get_order($id)
{
    global $db;
    $orders_query = $db->prepare("SELECT * FROM `order`  WHERE id = ?");
    $orders_query->execute(array($id));
    $result = $orders_query->fetchAll();

    return json_encode($result,JSON_PRETTY_PRINT, 30);

    $db = null;
}

//echo get_order(10906);

function get_orders()
{
    global $db;
    $orders_query = $db->prepare("SELECT * FROM `order`");
    $orders_query->execute();
    $result = $orders_query->fetchAll();

    return json_encode($result,JSON_PRETTY_PRINT,30);

    $db = null;
}
//echo get_orders();

function get_order_with_details($id)
{
    global $db;
    $orders_query = $db->prepare("SELECT * FROM `Order` JOIN OrderDetail ON   `Order`.`Id`  =  `OrderDetail`.`OrderId` WHERE `Order`.`Id` = ?" );
    if(!$orders_query->execute(array($id))){
        echo $db->errorInfo();
        exit;
    }
    $result = $orders_query->fetchAll();

    return json_encode($result,JSON_PRETTY_PRINT,30);

    $db = null;

   
}

echo get_order_with_details(10453);
