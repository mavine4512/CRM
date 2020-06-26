<?php

use app\widgets\Alert;
use app\components\widgets\Flash;
use app\components\widgets\Title;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
AppAsset::register($this);


/* @var $user \app\models\User */
$user = Yii::$app->user->identity;



/*
*Get user specific theme color else load default
*/
//if (count ( Yii::$app->session->get ( 'themecolor' ) ) > 0) {
if ( Yii::$app->session->get ( 'themecolor' )  > 0) {
  $theme = Yii::$app->session->get ( 'themecolor' );
} else {
  $theme = 'skin-green';
}

$companyname ='CRM System';
// if (count ( Yii::$app->session->get ( 'companyname' ) ) > 0) {
//   $companyname = Yii::$app->session->get ( 'companyname' );
// } else {
//     $companyname ='UBIA SOKO POS';
// }

$companyInitial = substr ( $companyname, 0, 1 );
$this->title = $companyname;




?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition <?=$theme?> sidebar-mini">
<!-- <body class="hold-transition skin-green sidebar-mini">  -->
<?php $this->beginBody() ?>


<div class="wrapper">
     <header class="main-header">
    <!-- Logo -->
    <a href="<?=Url::to ()?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- <span class="logo-mini"><b>U</b>XX</span> -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>CRM System</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">

        <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">


          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <img src="<?=Url::to ( "@web/dist/img/user1-128x128.jpg" )?>"  class="user-image" alt="User Image"> -->
              <span class="hidden-xs"><?=$user->name ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <!-- <img src="<?=Url::to ( "@web/dist/img/user1-128x128.jpg" )?>" class="img-circle" alt="User Image"> -->

              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                     <?=Html::beginForm ( [ '/site/logout' ], 'post' ) . Html::submitButton ( 'Sign out', [ 'class' => 'btn btn-default btn-flat' ] ) . Html::endForm ();?>
                 <a href="/site/login" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

   <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
            <span class="hidden-xs"><?=$user->name ?></span>
           <!-- <img src="<?=Url::to ( "@web/dist/img/user1-128x128.jpg" )?>" class="img-circle" alt="User Image"> -->
        </div>
        <div class="pull-left info">

          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!--render the MENU-->
       <?=$this->render ( '/layouts/menu' )?>


    </section>
    <!-- /.sidebar -->
  </aside>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <!--  <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section> -->

      <!-- Main content -->
    <section class="content">
        <!-- <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?> -->
        <?=Flash::widget ()?>
        <?= $content ?>
    </section>

    </div>

</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy;<i>Mavine Naaman</i> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">


      </div>


      <!-- /.tab-pane -->
    </div>
  </aside>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
