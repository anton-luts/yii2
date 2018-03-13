<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Hello';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php if (!Yii::$app->user->isGuest&&Yii::$app->user->can('superadmin')) {?>   

<div class="site-hello">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <div class="window">
          <img src="/web/images/close.png" alt="x" class="a2a_label close" >
         
          </div>
          
        <a href='#' class="imgpresT" ><p>admin</p></a>
        
    </p>
    
    
</div>

<?php 
  } else {
    echo 'not superadmin';
    //include ($_SERVER["DOCUMENT_ROOT"]."/app/views/main/templ.php");
   // exit();
  }
?>