<?php include'header.php'; ?>
<div class="slider">
    <div class="camera_wrap">
        <div data-src="img/slide1.jpg"></div>
        <div data-src="img/slide2.jpg"></div>
        <div data-src="img/slide3.jpg"></div>
    </div>
</div>
</header>
<section id="content" class="main-content">
    <div class="container">
        <div class="row">
            <div class="span12">        
                <ul class="thumbnails">
                    <li class="span3">
                        <div class="thumbnail">
                            <div class="caption">
                                <img src="img/img-1.png" alt="Planejamento">
                                <h5><br>Planejamento</h5>
                            </div>  
                            <?php include 'planejamento.php'; ?>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <div class="caption">
                                <img src="img/img-2.png" alt="">
                                <h5>Projetos</h5>
                                <h5>de Engenharia</h5>
                            </div>  
                            <?php include 'engenharia.php'; ?>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <div class="caption">
                                <img src="img/img-3.png" alt="">
                                <h5><br>Gerenciamento</h5>
                            </div>
                            <?php include 'gerenciamento.php'; ?>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <div class="caption">
                                <img src="img/img-4.png" alt="">
                                <h5>Relatórios </h5>
                                <h5>técnicos</h5>
                            </div>
                            <?php include 'relatorios.php'; ?>
                    </li>
                </ul>

            </div>
        </div>
        <div class="row">
            <div class="span12">
                <div class="clearfix cols-1">
                    <div class="span12">
                        <h4 class="indent-2">Seja bem vindo</h4>
                        <p class="lead">Obrigado pela visita. Sinta-se a vontade em explorar todas páginas de nosso sítio. Se encontrar alguma problema e/ou dificuldade entre em contato com <a href="mailto:webmaster@concrid.com">webmaster@concrid.com</a>. </p>
                        <br><p class="lead">A Concrid Engenharia é uma empresa de Engenharia Civil, onde prestamos diversos tipos de serviços. Entre no menu <a href="servicos.php">"Serviços"</a> e conheça todas nossas atividades.</p>
                    </div>
                </div>
            </div>    
        </div>    
    </div>
</section>
<?php include'footer.php'; ?>