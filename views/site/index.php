<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">
        <div class="row">
        <?php foreach ($rr as $r):?>
            <div class="col-lg-4">
                <h2><a href="<?= Url::toRoute(['/admin/request/view','id'=>$r->id]);?>"><?=$r->title?></a></h2>
                <p>
                    <?=$r->body?>
                </p>
                <img
                        class="img-responsive"
                        src="web/uploads/<?=$r->photo?>"
                        alt="<?=$r->title?>"
                        onmouseover="hover(this)"
                        onmouseout="back(this)"
                >
                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        <?php endforeach;?>
        </div>
    </div>
</div>


