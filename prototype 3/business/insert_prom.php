<?php
    require '../data-access/promotionManager.php';
    require '../data-access/promotion.php';
    if(isset($_POST["add_prom"])){
        $obj = new PromotionManager();
        $prom = new promotion();
        $prom->set_nom($_POST["name"]);
        $obj->insert($prom);
    }
    header("location: ../presentation/index.php");
?>