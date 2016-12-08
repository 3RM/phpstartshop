<?php
include ROOT . '/views/layouts/header.php';
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $category) { ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?= $category['id']; ?>">
    <?= $category['name']; ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
    <?php
}
?>
                    </div>

                </div>
            </div>
                    <div class="col-sm-9 padding-right">
                        <div class="product-details"><!--product-details-->
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="view-product">
                                        <img src="/template/images/product-details/1.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="product-information"><!--/product-information-->
										<?php if($product['is_new'] == 1):?>
											<img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
										<?php endif; ?>
                                        <h2><?=$product['name']?></h2>
                                        <p>Код товара: <?=$product['code']?></p>
                                        <span>
                                            <span>US $<?=$product['price']?></span>
                                            <label>Количество:</label>
                                            <input type="text" value="3" />
                                            <button type="button" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                В корзину
                                            </button>
                                        </span>										
                                        <p><b>Наличие:
										<?php if($product['status'] == 1):?>
											</b> На складе</p>
										<?php else: ?>
											</b> Нет в наличии</p>
										<?php endif; ?>
                                        <p><b>Состояние:<?php if($product['is_new'] == 1):?>
											</b> Новое</p>
										<?php else: ?>
											</b> Поддержанное</p>
										<?php endif; ?>
                                        <p><b>Производитель:</b> <?= $product['brand']?></p>
                                    </div><!--/product-information-->
                                </div>
                            </div>
                            <div class="row">                                
                                <div class="col-sm-12">
                                    <h5>Описание товара</h5>
                                    <p><?=$product['description']?></p>
                                </div>
                            </div>
                        </div><!--/product-details-->

                    </div>
                </div>
            </div>
        </section>


        <br/>
        <br/>

<?php

  include ROOT.'/views/layouts/footer.php';