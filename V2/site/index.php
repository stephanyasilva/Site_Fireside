<?php
    $title = "Fireside Serviços | Página Inicial";
    $description = "Soluções completas em prevenção e combate a incêndio.";
    $ogImage = 'assets/img/og-default.jpg';
    $ogUrl = 'https://www.firesideservicos.com.br';

    require_once __DIR__ . '/config.php';
?>

<!DOCTYPE html> 
<html lang="pt-BR">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    
    <?php include 'includes/header.php'; ?>

    <main>
        <section id="hero">
            <video autoplay muted loop playsinline class="hero-video">
                <source src="assets/video/video-home.mp4" type="video/mp4">
            </video>
            <div class="container-lg px-5 px-md-5 hero-content">
                <div class="row">
                    <div class="col">
                        <div id="verticalCarousel" class="carousel carousel-index slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000"> 
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#verticalCarousel" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#verticalCarousel" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#verticalCarousel" data-bs-slide-to="2"></button>
                            </div>
                            <div class="carousel-index carousel-inner d-flex flex-lg-column">
                                <div class="carousel-index carousel-item active">
                                    <div class="hero-slide pt-md-5 slide1">                                        
                                        <div class="efect-slide">
                                            <span class="titulo-cinzel">Fireside</span><br>
                                            <span class="SubTitulo-TT">Especialistas em Segurança Contra Incêndio <br> Soluções técnicas para proteção de vidas, patrimônios e operações.</span>
                                        </div>  
                                    </div>
                                </div>
                                <div class="carousel-index carousel-item">
                                    <div class="hero-slide pt-md-5 slide2">
                                        <div class="efect-slide">
                                            <span class="titulo-cinzel">Prevenção, proteção e conformidade</span><br>
                                            <span class="SubTitulo-TT">Projetamos, instalamos e adequamos sistemas de segurança contra incêndio.</span>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="hero-slide pt-md-5 slide3">
                                        <div class="efect-slide">
                                            <span class="titulo-cinzel">Segurança em cada etapa</span> <br>
                                            <span class="SubTitulo-TT">Responsabilidade e soluções eficientes para que seu empreendimento opere com mais segurança</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>  
                <div class="row z-3">
                    <div class="col btn-conheca">
                        <a href="#oquefazemos">
                            <img src="assets/images/btn-conheca.png" class="img-fluid" alt="Conheça Mais">
                        </a>                       
                    </div>
                </div>                          
            </div>
        </section>
        <section id="oquefazemos">
            <div class="container-lg px-5 px-md-5">
                <div class="row">
                    <div class="col text-center mt-5 py-5">
                        <span class="titulo-cinzelSection">O que a Fireside faz?</span><br>
                        <span class="SubTitulo-TTSection">Soluções completas em segurança contra incêndio.</span>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 pb-5">
                        <div class="card-area">
                            <div class="frente-card" style="background-image: url('assets/images/card-area/card-area1-F.png');">
                               Área Comercial
                            </div>
                            <div class="verso-card" style="background-image: url('assets/images/card-area/card-area1-V.png');">
                                Desenvolvemos soluções de prevenção e combate a incêndio para lojas, supermercados, shoppings e centros comerciais, considerando o fluxo de público, as rotas de fuga, a sinalização de emergência e os sistemas necessários para a segurança da edificação.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 pb-5">
                        <div class="card-area">                            
                            <div class="frente-card" style="background-image: url('assets/images/card-area/card-area2-F.png');">
                                Área Residencial e Condominial
                            </div>
                            <div class="verso-card" style="background-image: url('assets/images/card-area/card-area2-V.png');">
                                Atuamos na implantação e adequação de sistemas de segurança contra incêndio em condomínios e edificações residenciais, incluindo hidrantes, extintores, iluminação e sinalização de emergência, de acordo com as características da edificação e as exigências aplicáveis.
                            </div>                            
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 pb-5">
                        <div class="card-area">
                            <div class="content-card">
                                <div class="frente-card" style="background-image: url('assets/images/card-area/card-area3-F.png');">
                                    Área Industrial
                                </div>
                                <div class="verso-card" style="background-image: url('assets/images/card-area/card-area3-V.png');">
                                    Desenvolvemos soluções dimensionadas de acordo com a carga de incêndio, os processos e os riscos específicos de cada operação, incluindo sistemas de hidrantes, sprinklers, detecção e alarme e outras medidas de proteção.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 pb-5">
                        <div class="card-area">
                            <div class="content-card">
                                <div class="frente-card" style="background-image: url('assets/images/card-area/card-area4-F.png');">
                                    Área Hospitalar e Assistencial
                                </div>
                                <div class="verso-card" style="background-image: url('assets/images/card-area/card-area4-V.png');">
                                    Desenvolvemos soluções considerando as particularidades de ambientes de alta complexidade, com atenção às áreas críticas, evacuação assistida, compartimentação e sistemas de detecção e alarme, contribuindo para a proteção contínua de pacientes, equipes e patrimônio.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
        </section>
        <section id="nossosServicos">
            <div class="container-lg px-5 px-md-5">
                <div class="row">
                    <div class="col text-center py-5">
                        <span class="titulo-cinzelSection">Somos especialistas</span><br>
                        <span class="SubTitulo-TTSection">Nossos Serviços</span>                        
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-12 col-sm-6 pt-5">   <!-- Incêndio -->                       
                        <a href="<?= SERVICOS ?>alarme-incendio.php" class="iconeServico-link iconeServico-linkS"> 
                            <div class="row">
                                <div class="col">
                                    <div class="text-center"> 
                                        <img class="img-iconeServicos img-fluid" src="<?= ASSETS ?>images/icone-servicos/alarme-incendio.png">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-12 col-lg-7 text-start text-sm-center text-lg-start pt-4 mt-lg-2 px-0">
                                    <span class="titulo-iconeServicos">Sistema de Alarme <br class="d-none d-md-block d-lg-none"> de Incêndio</span>                            
                                    <span class="saibaMais-iconeServicos">
                                        Saiba Mais 
                                        <img class="img-iconeSeta" src="<?= ASSETS ?>images/icone-servicos/seta-direita.png">
                                    </span>
                                </div>
                            </div>  
                        </a>                        
                    </div> 
                    <div class="col-12 col-sm-6 pt-5"> <!-- Pressurizacao -->
                        <a href="<?= SERVICOS ?>pressurizacao.php" class="iconeServico-link iconeServico-linkS"> 
                            <div class="row">
                                <div class="col">
                                    <div class="text-center">                        
                                        <img class="img-iconeServicos img-fluid" src="<?= ASSETS ?>images/icone-servicos/pressurizacao-escada.png">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-12 col-lg-7 text-start text-sm-center text-lg-start pt-4 mt-lg-2 px-0">
                                    <span class="titulo-iconeServicos">Pressurização de <br class="d-none d-md-block d-lg-none"> Escadas de Emergencia</span>                            
                                    <span class="saibaMais-iconeServicos">
                                        Saiba Mais 
                                        <img class="img-iconeSeta" src="<?= ASSETS ?>images/icone-servicos/seta-direita.png">
                                    </span>
                                </div>
                            </div> 
                        </a>
                    </div>      
                    <div class="col-12 col-sm-6 pt-5"> <!-- Manutenção -->
                        <a href="<?= SERVICOS ?>manutencao.php" class="iconeServico-link iconeServico-linkS">
                            <div class="row">
                                <div class="col">
                                    <div class="text-center">     
                                        <img class="img-iconeServicos img-fluid" src="<?= ASSETS ?>images/icone-servicos/manutencao.png">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-12 col-lg-7 text-start text-sm-center text-lg-start pt-4 mt-lg-2 px-0">
                                    <span class="titulo-iconeServicos">Manutenção de <br class="d-none d-md-block d-lg-none"> Sistemas</span>   
                                    <span class="saibaMais-iconeServicos">                 
                                        Saiba Mais 
                                        <img class="img-iconeSeta" src="<?= ASSETS ?>images/icone-servicos/seta-direita.png">
                                    </span>
                                </div>
                            </div>       
                        </a>
                    </div>              
                    <div class="col-12 col-sm-6 pt-5"> <!-- AVCB -->
                        <a href="<?= SERVICOS ?>acessoria-avcb.php" class="iconeServico-link iconeServico-linkS"> 
                            <div class="row">
                                <div class="col">
                                    <div class="text-center"> 
                                        <img class="img-iconeServicos img-fluid" src="<?= ASSETS ?>images/icone-servicos/avcb.png">    
                                    </div>
                                </div>
                                <div class="col-6 col-sm-12 col-lg-7 text-start text-sm-center text-lg-start pt-4 mt-lg-2 px-0">
                                    <span class="titulo-iconeServicos">Regularização e <br class="d-none d-md-block d-lg-none"> Renovação de AVCB/CLCB</span>                            
                                    <span class="saibaMais-iconeServicos">
                                        Saiba Mais 
                                        <img class="img-iconeSeta" src="<?= ASSETS ?>images/icone-servicos/seta-direita.png">
                                    </span>
                                </div>
                            </div>                            
                        </a>
                    </div> 
                    <div class="col-12 col-sm-6 pt-5"> <!-- Sprinkler -->
                        <a href="<?= SERVICOS ?>sistema-sprinkler.php" class="iconeServico-link iconeServico-linkS"> 
                            <div class="row">
                                <div class="col">
                                    <div class="text-center">
                                        <img class="img-iconeServicos img-fluid" src="<?= ASSETS ?>images/icone-servicos/sprinkler.png">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-12 col-lg-7 text-start text-sm-center text-lg-start pt-4 mt-lg-2 px-0">
                                    <span class="titulo-iconeServicos">Sistemas de <br class="d-none d-md-block d-lg-none"> Sprinklers</span>                            
                                    <span class="saibaMais-iconeServicos">
                                        Saiba Mais 
                                        <img class="img-iconeSeta" src="<?= ASSETS ?>images/icone-servicos/seta-direita.png">
                                    </span>
                                </div>
                            </div> 
                        </a>
                    </div> 
                    <div class="col-12 col-sm-6 pt-5"> <!-- Placas -->
                        <a href="<?= SERVICOS ?>placas-identificacao.php" class="iconeServico-link iconeServico-linkS">   
                            <div class="row">
                                <div class="col">
                                    <div class="text-center">   
                                        <img class="img-iconeServicos img-fluid" src="<?= ASSETS ?>images/icone-servicos/saida-emergencia.png">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-12 col-lg-7 text-start text-sm-center text-lg-start pt-4 mt-lg-2 px-0">
                                    <span class="titulo-iconeServicos">Sinalização de <br class="d-none d-md-block d-lg-none"> Emergência</span>                            
                                    <span class="saibaMais-iconeServicos">
                                        Saiba Mais 
                                        <img class="img-iconeSeta" src="<?= ASSETS ?>images/icone-servicos/seta-direita.png">
                                    </span>
                                </div>
                            </div> 
                        </a>                        
                    </div>                   
                </div> 
            </div>
        </section>
        <section id="clientesParceiros">
            <div class="container">
                <div class="row">
                    <div class="col pt-5 text-start px-5 px-md-5">
                        <span class="titulo-cinzelSection">Nossos Clientes</span><br>
                        <span class="SubTitulo-TTSection">Parcerias construídas com confiança e responsabilidade técnica.</span>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="container my-5">
                            <div class="slider" style="--fade-color: #ffffff;">
                                <div class="slide-track">
                                    <div class="slide"><img src="assets/images/clientes-parceiros/logop-grupocam.png"></div>                                    
                                    <div class="slide"><img src="assets/images/clientes-parceiros/logop-matushita.png"></div>
                                    <div class="slide"><img src="assets/images/clientes-parceiros/logop-geromel.png"></div>
                                    <div class="slide"><img src="assets/images/clientes-parceiros/logop-maclucer.png"></div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col px-5 px-md-5 text-end">
                        <span class="titulo-cinzelSection">Empresas Parceiras</span><br>
                        <span class="SubTitulo-TTSection">Qualidade e excelência em cada projeto.</span>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col pb-5">
                        <div class="container my-5">
                            <div class="slider" style="--fade-color: #ffffff">
                                <div class="slide-track reverse">
                                    <div class="slide"><img src="assets/images/clientes-parceiros/logof-engfox.png"></div>
                                    <div class="slide"><img src="assets/images/clientes-parceiros/logof-isoshop.png"></div>
                                    <div class="slide"><img src="assets/images/clientes-parceiros/logof-jrpaineis.png"></div>
                                    <div class="slide"><img src="assets/images/clientes-parceiros/logof-seimmei.png"></div>
                                    <div class="slide"><img src="assets/images/clientes-parceiros/logof-vathisa.png"></div>
                                    <div class="slide"><img src="assets/images/clientes-parceiros/logof-salviaco.png"></div>
                                    <div class="slide"><img src="assets/images/clientes-parceiros/logof-proelmec.png"></div>
                                    <div class="slide"><img src="assets/images/clientes-parceiros/logof-conduscobre.png"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CONTATO -->
        <?php 
            $tituloContato = "CONTE COM A FIRESIDE";
            $subtituloContato = "
                Segurança começa com planejamento.
                <br><br>
                Desenvolvemos soluções em prevenção e combate a incêndio para proteger seu empreendimento, desde a análise e adequação até a implantação e regularização dos sistemas.
                <br><br>
                Solicite uma avaliação técnica e fale com nossa equipe.
            ";
            $btnForm = "SOLICITAR AVALIAÇÃO";
            include 'includes/form-contato.php'; 
        ?> 
    </main>

<?php include 'includes/footer.php'; ?>