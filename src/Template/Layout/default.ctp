<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>

<?= $this->Html->docType() ?>
<html lang="pt-BR">
<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="TSI 2017.1 UNCISAL">
  <!-- <link rel="icon" href="../../img/favicon/favicon.ico"> -->

  <title>Projeto programação web 2</title>

  <style type="text/css">
  .actionsbanner{
    position: absolute;
  }
  #bannerimg{
    height: 100%;
    object-fit: cover;
    width: 100%;

  }
  .del{
    color: rgb(196, 0, 0);
  }
</style>

       <?= $this->Html->meta('icon') ?>

       <!-- <?= $this->Html->css('style.css')  ?> -->
       <?= $this->Html->css('bootstrap/bootstrap.css') ?>
       <?= $this->Html->css('dashboard.css') ?>

       <?= $this->Html->script('jquery/jquery.js') ?>
       <?= $this->Html->script('bootstrap/bootstrap.js') ?>

       <?= $this->fetch('meta') ?>
       <?= $this->fetch('css') ?>
</head>

<body>

  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">CMS</a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Pesquisar" aria-label="Pesquisar">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <?= $this->Html->link('Sair', '/users/logout', ['class' => 'nav-link']) ?>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">

    <div class="row">

        <div class="col-sm-3">
          <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
             <ul class="nav flex-column">

              <?php if(explode('/', $this->request->getRequestTarget())[1] == 'pages'): ?>
                  <li class="nav-item">
                      <?= $this->Html->link('Home', '/pages/index', ['class' => 'nav-link active']) ?>
                      <i class="fa fa-home"></i>

                  </li>
              <?php else: ?>

                  <li class="nav-item">
                      <?= $this->Html->link('Home', '/pages/index', ['class' => 'nav-link']) ?>
                      <i class="fa fa-home"></i>

                  </li>

              <?php endif; ?>

              <?php if(explode('/', $this->request->getRequestTarget())[1] == 'users'): ?>

                  <li class="nav-item">

                      <?= $this->Html->link('Usuários', '/users/index', ['class' => 'nav-link active' ]) ?>
                      <i class="fa fa-users"></i>

                  </li>

              <?php else: ?>

                  <li class="nav-item">

                      <?= $this->Html->link('Usuários', '/users/index', ['class' => 'nav-link']) ?>
                      <i class="fa fa-home"></i>

                  </li>

              <?php endif; ?>

              <?php if(explode('/', $this->request->getRequestTarget())[1] == 'news'): ?>

                  <li class="nav-item">

                      <?= $this->Html->link('Notícias', '/news/index', ['class' => 'nav-link active' ]) ?>
                      <i class="fa fa-newspaper"></i>

                  </li>

              <?php else: ?>

                  <li class="nav-item">

                      <?= $this->Html->link('Notícias', '/news/index', ['class' => 'nav-link']) ?>
                      <i class="fa fa-newspaper"></i>

                  </li>

              <?php endif; ?>

              <?php if(explode('/', $this->request->getRequestTarget())[1] == 'videos'): ?>

                  <li class="nav-item">

                      <?= $this->Html->link('Vídeos', '/videos/index', ['class' => 'nav-link active' ]) ?>
                      <i class="fa fa-video"></i>

                  </li>

              <?php else: ?>

                  <li class="nav-item">

                      <?= $this->Html->link('Vídeos', '/videos/index', ['class' => 'nav-link']) ?>
                      <i class="fa fa-video"></i>

                  </li>

              <?php endif; ?>

              <?php if(explode('/', $this->request->getRequestTarget())[1] == 'photos'): ?>

                  <li class="nav-item">

                      <?= $this->Html->link('Galeria de fotos', '/photos/index', ['class' => 'nav-link active' ]) ?>
                      <i class="fa fa-image"></i>

                  </li>

              <?php else: ?>

                  <li class="nav-item">

                      <?= $this->Html->link('Galeria de fotos', '/photos/index', ['class' => 'nav-link']) ?>
                      <i class="fa fa-image"></i>

                  </li>

              <?php endif; ?>

              <?php if(explode('/', $this->request->getRequestTarget())[1] == 'info'): ?>

                  <li class="nav-item">

                      <?= $this->Html->link('Informações básicas', '/info/index', ['class' => 'nav-link active' ]) ?>
                      <i class="fa fa-info"></i>

                  </li>

              <?php else: ?>

                  <li class="nav-item">
                      <?= $this->Html->link('Informações básicas', '/info/index', ['class' => 'nav-link']) ?>
                      <i class="fa fa-info"></i>

                  </li>

              <?php endif; ?>

              <?php if(explode('/', $this->request->getRequestTarget())[1] == 'contactus'): ?>

                  <li class="nav-item">

                      <?= $this->Html->link('Fale conosco', '/contactus/index', ['class' => 'nav-link active']) ?>
                      <i class="fa fa-envelope"></i>

                 </li>


              <?php else: ?>

                  <li class="nav-item">

                      <?= $this->Html->link('Fale conosco', '/contactus/index', ['class' => 'nav-link']) ?>
                      <i class="fa fa-envelope"></i>

                 </li>

              <?php endif; ?>

              <?php if(explode('/', $this->request->getRequestTarget())[1] == 'banners'): ?>

                  <li class="nav-item">

                      <?= $this->Html->link('Banners', '/banners/index', ['class' => 'nav-link active' ]) ?>
                      <i class="fa fa-question"></i>

                  </li>

              <?php else: ?>

                  <li class="nav-item">

                      <?= $this->Html->link('Banners', '/banners/index', ['class' => 'nav-link']) ?>
                      <i class="fa fa-images"></i>

                  </li>

              <?php endif; ?>

             <?php if(explode('/', $this->request->getRequestTarget())[1] == 'faqs'): ?>

                 <li class="nav-item">

                     <?= $this->Html->link('FAQ', '/faqs/index', ['class' => 'nav-link active' ]) ?>
                     <i class="fa fa-images"></i>

                 </li>

             <?php else: ?>

                 <li class="nav-item">

                     <?= $this->Html->link('FAQ', '/faqs/index', ['class' => 'nav-link']) ?>
                     <i class="fa fa-images"></i>

                 </li>

             <?php endif; ?>

             </ul>
            </div>
          </nav>

        </div>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

        <div class='row'>

            <div class="col-sm-8 offset-sm-2 mt-5">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>

            </div>

        </div>

    </div>

  </div>

      <?= $this->fetch('script') ?>
</body>
</html>