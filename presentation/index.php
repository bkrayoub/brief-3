<?php
 include '../data-access/promotionManager.php'; 
 include '../data-access/promotion.php'; 
 ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Promotion gestion</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;700&display=swap');
    </style>
</head>

<body>
    <div class="cont">
        <div id="noNeed"></div>
        <div class="input_div">
            <a href="add_prom.php">Add promotion</a>
            <input type="text" id="search_inp" placeholder="search">
        </div>
        <div class="data_div">
            <?php
            $obj = new PromotionManager();
            $prom = new promotion();
            $prom->set_nom("");
            $select = $obj->search($prom);
            if (count($select) > 0) {
                for ($i = 0; $i < count($select); $i++) {
            ?>
                    <div class="data">
                        <div><?php echo $select[$i]["name"]; ?></div>
                        <div class="edit_btn"><a href="edit_prom.php?edit_id=<?php echo $select[$i]["id"]; ?>">Edit</a></div>
                        <div class="delete_btn"><a href="../business/delete_prom.php?delete_id=<?php echo $select[$i]["id"]; ?>">Delete</a></div>
                    </div>
            <?php
                }
                }
            ?>
        </div>
    </div>
    <script src="src/js/main.js"></script>
</body>

</html>