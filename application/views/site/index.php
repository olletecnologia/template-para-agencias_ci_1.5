<?php require_once('header.php')?>

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top"><?= $config['config_site_nome']?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">
                        <?php if(!empty($texto['texto_servico'])):?>
                            <?= $texto['texto_servico']?>
                        <?php endif;?>
                    </a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">
                        <?php if(!empty($texto['texto_portifolio'])):?>
                            <?= $texto['texto_portifolio']?>
                        <?php endif;?>
                    </a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">
                        <?php if(!empty($texto['texto_sobre'])):?>
                            <?= $texto['texto_sobre']?>
                        <?php endif;?>
                    </a>
                </li>
                <li>
                    <a class="page-scroll" href="#team">
                        <?php if(!empty($texto['texto_equipe'])):?>
                            <?= $texto['texto_equipe']?>
                        <?php endif;?>
                    </a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">
                        <?php if(!empty($texto['texto_contato'])):?>
                            <?= $texto['texto_contato']?>
                        <?php endif;?>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">
                <?php if(!empty($texto['texto_titulo'])):?>
                    <?= $texto['texto_titulo']?>
                <?php endif;?>
            </div>
            <div class="intro-heading">
                <?php if(!empty($texto['texto_subtitulo'])):?>
                    <?= $texto['texto_subtitulo']?>
                <?php endif;?>
            </div>
            <a href="#services" class="page-scroll btn btn-xl">
                <?php if(!empty($texto['texto_botao_topo'])):?>
                    <?= $texto['texto_botao_topo']?>
                <?php endif;?>
            </a>
        </div>
    </div>
</header>

<!-- Services Section -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    <?php if(!empty($texto['texto_servico'])):?>
                        <?= $texto['texto_servico']?>
                    <?php endif;?>
                </h2>
                <h3 class="section-subheading text-muted">
                    <?php if(!empty($texto['texto_sub_servico'])):?>
                        <?= $texto['texto_sub_servico']?>
                    <?php endif;?>
                </h3>
            </div>
        </div>
        <div class="row text-center">
            <?php if(!empty($servicos[0])):?>
                <?php foreach($servicos as $serv): ?>
                    <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa <?= $serv['servicos_icone']?> fa-stack-1x fa-inverse"></i>
                    </span>
                        <h4 class="service-heading"><?= $serv['servicos_titulo']?></h4>
                        <p class="text-muted text-center" style="word-wrap: break-word"><?= $serv['servicos_descricao']?></p>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</section>

<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    <?php if(!empty($texto['texto_portifolio'])):?>
                        <?= $texto['texto_portifolio']?>
                    <?php endif;?>
                </h2>
                <h3 class="section-subheading text-muted">
                    <?php if(!empty($texto['texto_sub_portifolio'])):?>
                        <?= $texto['texto_sub_portifolio']?>
                    <?php endif;?>
                </h3>
            </div>
        </div>
        <div class="row">
            <?php if(!empty($portifolio)):?>
                <?php foreach($portifolio as $port):?>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#portfolioModal" class="portfolio-link" data-toggle="modal" data-id="<?= $port['portifolio_id']?>">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="<?=base_url($port['portifolio_img'])?>" class="img-responsive" alt="<?= $port['portifolio_titulo'] ?>">
                        </a>
                        <div class="portfolio-caption">
                            <h4><?= $port['portifolio_titulo']?></h4>
                            <p class="text-muted"><?= $port['portifolio_categoria']?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif;?>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    <?php if(!empty($texto['texto_sobre'])):?>
                        <?= $texto['texto_sobre']?>
                    <?php endif;?>
                </h2>
                <h3 class="section-subheading text-muted">
                    <?php if(!empty($texto['texto_sub_sobre'])):?>
                        <?= $texto['texto_sub_sobre']?>
                    <?php endif;?>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">

                    <?php if(!empty($sobre)): $i = 0;?>

                        <?php foreach($sobre as $s):?>

                            <li class="<?= ($i++ % 2) == 0 ? '' : 'timeline-inverted' ?> ">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?=base_url().''.$s['sobre_img']?>" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4><?= $s['sobre_titulo']?></h4>
                                        <h4 class="subheading">
                                            <?= $s['sobre_subtitulo']?>
                                        </h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">
                                            <?= $s['sobre_desc']?>
                                        </p>
                                    </div>
                                </div>
                            </li>

                        <?php endforeach;?>
                    <?php endif;?>

                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4 style="word-wrap: break-word">
                                <?php if(!empty($texto['texto_sobre_final'])):?>
                                    <?= $texto['texto_sobre_final']?>
                                <?php endif;?>
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    <?php if(!empty($texto['texto_equipe'])):?>
                        <?= $texto['texto_equipe']?>
                    <?php endif;?>
                </h2>
                <h3 class="section-subheading text-muted">
                    <?php if(!empty($texto['texto_sub_equipe'])):?>
                        <?= $texto['texto_sub_equipe']?>
                    <?php endif;?>
                </h3>
            </div>
        </div>
        <div class="row">
            <?php if(!empty($equipe)):?>
                <?php foreach($equipe as $equi):?>
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="<?= base_url($equi['equipe_img'])?>" class="img-responsive img-circle" alt="<?= $equi['equipe_nome']?>" width="239" height="239">
                            <h4><?= $equi['equipe_nome']?></h4>
                            <?php if(!empty($equi['equipe_cargo'])):?>
                                <p class="text-muted"><?= $equi['equipe_cargo']?></p>
                            <?php endif; ?>
                            <ul class="list-inline social-buttons">

                                <?php if(!empty($equi['equipe_instagram'])):?>
                                    <li><a target="_blank" href="<?= $equi['equipe_instagram']?>"><i class="fa fa-instagram"></i></a>
                                    </li>
                                <?php endif; ?>
                                <?php if(!empty($equi['equipe_facebook'])):?>
                                    <li><a target="_blank" href="<?= $equi['equipe_facebook']?>"><i class="fa fa-facebook"></i></a>
                                    </li>
                                <?php endif; ?>
                                <?php if(!empty($equi['equipe_linkedin'])):?>
                                    <li><a target="_blank" href="<?= $equi['equipe_linkedin']?>"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <p class="large text-muted">
                    <?php if(!empty($texto['texto_equipe_final'])):?>
                        <?= $texto['texto_equipe_final']?>
                    <?php endif;?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Clients Aside -->
<aside class="clients">
    <div class="container">
        <div class="row">
            <?php if(!empty($cliente)):?>
            <?php foreach($cliente as $cli):?>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="<?= base_url($cli['cliente_img'])?>" class="img-responsive img-centered" alt="<?= $cli['cliente_nome']?>" width="200" height="50">
                </a>
            </div>
        <?php endforeach;?>
        <?php endif;?>
        </div>
    </div>
</aside>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">
                    <?php if(!empty($texto['texto_contato'])):?>
                        <?= $texto['texto_contato']?>
                    <?php endif;?>
                </h2>
                <h3 class="section-subheading text-muted">
                    <?php if(!empty($texto['texto_sub_contato'])):?>
                        <?= $texto['texto_sub_contato']?>
                    <?php endif;?>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Seu Nome *" id="name" required data-validation-required-message="Por favor, preencha seu nome.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Seu E-mail *" id="email" required data-validation-required-message="Por favor, preencha seu e-mail.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Seu telefone *" id="phone" required data-validation-required-message="Por favor, preencha seu número de telefone.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Mensagem *" id="message" required data-validation-required-message="Por favor, escreva sua mensagem pra nós."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">
                                <?php if(!empty($texto['texto_botao_mensagem'])):?>
                                    <?= $texto['texto_botao_mensagem']?>
                                <?php endif;?>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; <?= $config['config_autor'] . '  ' . date('Y') ?></span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="<?= $social['social_instagram_url']?>" target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li><a href="<?= $social['social_facebook_url']?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="<?= $social['social_linkedin_url']?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
</footer>
<?php require_once('modal-portifolio.php')?>
<script>
    var url = "<?= site_url()?>";
</script>
<?php require_once('footer.php')?>
<script src="<?= base_url('app-js/site/main.js')?>"></script>
</body>
</html>
