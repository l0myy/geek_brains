<?php 

include "controller.php"; ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"  type="text/javascript"></script>
<script src='my.js' defer></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catalog</title>

</head>
<body>
<main>
    <div class='goodsTable'>
        <?php
        if (isset($goods))
            foreach ($goods as $good) : ?>
                <div class='goodsWrap'>
					<div class="wrapGoodInfo">
					<div class='goodsNameFull'><?= $good['nameFull']; ?></div>
                    <div class='goodsPrice'><?= $good['price'] ?><b>&#8381;</b></div>
                    <div class='goodsParam'><span><b>Состав: </b></span><?= $good['param'] ?></div>
					</div>

                </div>
            <?php endforeach; ?>            
    </div>
    <input id="show_more" onclick = "getAll(5,5)" type="button" value="Показать еще" />

    <footer>

    </footer>
    
</main>
</body>
</html>

