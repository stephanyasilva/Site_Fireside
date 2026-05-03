<?php
    $title = "Fireside Serviços | Página Inicial";
    $description = "Soluções completas em prevenção e combate a incêndio.";
    $ogImage = 'assets/img/og-default.jpg';
    $ogUrl = 'https://www.firesideservicos.com.br';
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
                        <div id="verticalCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000"> 
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#verticalCarousel" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#verticalCarousel" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#verticalCarousel" data-bs-slide-to="2"></button>
                            </div>
                            <div class="carousel-inner d-flex flex-lg-column">
                                <div class="carousel-item active">
                                    <div class="hero-slide slide1">                                        
                                        <div class="efect-slide">
                                            <span class="titulo-cinzel">Fireside</span><br>
                                            <span class="titulo-hero">Especialistas em Segurança Contra Incêndio <br> protegendo vidas e patrimônios</span>
                                        </div>  
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="hero-slide slide2">
                                        <div class="efect-slide">
                                            <span class="titulo-cinzel">Soluções completas</span><br>
                                            <span class="titulo-hero">Projeto, execução e regularização em <br>conformidade com as normas</span>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="hero-slide slide3">
                                        <div class="efect-slide">
                                            <span class="titulo-cinzel">Prevenção inteligente</span> <br>
                                            <span class="titulo-hero">Cuidamos de cada etapa para sua empresa <br> operar com tranquilidade</span>
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
                    <div class="col-md-6 pb-5">
                        <div class="card-area">
                            <div class="frente-card" style="background-image: url('assets/images/card-area/card-area1-F.png');">
                                Área Mercantil (Comercial)
                            </div>
                            <div class="verso-card" style="background-image: url('assets/images/card-area/card-area1-V.png');">
                                Elaboração e adequação de projetos de prevenção e combate a incêndio para lojas, supermercados, 
                                shoppings e centros comerciais, com foco em fluxo de público, sinalização de emergência, rotas 
                                de fuga e regularização junto ao Corpo de Bombeiros.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pb-5">
                        <div class="card-area">                            
                            <div class="frente-card" style="background-image: url('assets/images/card-area/card-area2-F.png');">
                                Área Civil (Residencial e Condominial)
                            </div>
                            <div class="verso-card" style="background-image: url('assets/images/card-area/card-area2-V.png');">
                                Implantação e atualização de sistemas de hidrantes, extintores, iluminação e sinalização de emergência 
                                em condomínios e edificações residenciais, garantindo conformidade normativa e segurança coletiva.
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 pb-5">
                        <div class="card-area">
                            <div class="content-card">
                                <div class="frente-card" style="background-image: url('assets/images/card-area/card-area3-F.png');">
                                    Área Industrial
                                </div>
                                <div class="verso-card" style="background-image: url('assets/images/card-area/card-area3-V.png');">
                                    Dimensionamento técnico de sistemas de combate compatíveis com carga de incêndio e risco operacional, 
                                    incluindo redes de hidrantes, sprinklers, detectores e planos de emergência específicos para cada atividade 
                                    produtiva.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pb-5">
                        <div class="card-area">
                            <div class="content-card">
                                <div class="frente-card" style="background-image: url('assets/images/card-area/card-area4-F.png');">
                                    Área Hospitalar e Assistencial
                                </div>
                                <div class="verso-card" style="background-image: url('assets/images/card-area/card-area4-V.png');">
                                    Desenvolvimento de soluções que consideram áreas críticas, evacuação assistida, compartimentação 
                                    e sistemas de detecção e alarme, assegurando proteção contínua em ambientes de alta complexidade.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </section>
        <section id="nossosServicos">
            <div class="container py-5">
                <div class="row">
                    <div class="col text-center py-5">
                        <span class="titulo-cinzelSection">Somos especialistas</span><br>
                        <span class="SubTitulo-TTSection">Nossos Serviços</span>                        
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-6 col-md-4 d-flex justify-content-center">
                        <a href="" class="iconeServico-link">        
                            <div class="text-center">     
                                <img class="img-iconeServicos" src="assets/images/icone-servicos/manutencao.png">
                            </div>   
                            <div>                              
                                <span class="titulo-iconeServicos">Manutenção de <br> Sistemas</span>                            
                                <span class="saibaMais-iconeServicos">
                                    Saiba Mais 
                                    <img class="img-iconeSeta" src="assets/images/icone-servicos/seta-direita.png">
                                </span>
                            </div>
                        </a>
                    </div> 
                    <div class="col-6 col-md-4 d-flex justify-content-center">                          
                        <a href="" class="iconeServico-link">  
                            <div class="text-center">                       
                                <img class="img-iconeServicos ms-2" src="assets/images/icone-servicos/alarme-incendio.png">
                            </div>                    
                            <div class="ps-4 ps-md-0"> 
                                <span class="titulo-iconeServicos">Sistema de Alarme <br> de Incêndio</span>                            
                                <span class="saibaMais-iconeServicos">
                                    Saiba Mais 
                                    <img class="img-iconeSeta" src="assets/images/icone-servicos/seta-direita.png">
                                </span>
                            </div>
                        </a>                        
                    </div> 
                    <div class="col-6 col-md-4 my-5 my-md-0  d-flex justify-content-center">
                         <a href="" class="iconeServico-link">   
                            <div class="text-center">                        
                                <img class="img-iconeServicos" src="assets/images/icone-servicos/pressurizacao-escada.png">
                            </div>
                            <div class="ps-4 ps-md-0">
                                <span class="titulo-iconeServicos">Pressurização de <br>Escadas de Emergencia</span>                            
                                <span class="saibaMais-iconeServicos">
                                    Saiba Mais 
                                    <img class="img-iconeSeta" src="assets/images/icone-servicos/seta-direita.png">
                                </span>
                            </div>
                        </a>
                    </div>                   
                    <div class="col-6 col-md-4 my-5 d-flex justify-content-center">
                        <a href="" class="iconeServico-link"> 
                            <div class="text-center">                      
                                <img class="img-iconeServicos" src="assets/images/icone-servicos/avcb.png">
                            </div>
                            <div>
                                <span class="titulo-iconeServicos">Regularização <br> AVCB/CLCB</span>                            
                                <span class="saibaMais-iconeServicos">
                                    Saiba Mais 
                                    <img class="img-iconeSeta" src="assets/images/icone-servicos/seta-direita.png">
                                </span>
                            </div>
                        </a>
                    </div> 
                    <div class="col-6 col-md-4 my-5 d-flex justify-content-center">
                        <a href="" class="iconeServico-link">  
                            <div class="text-center">                    
                                <img class="img-iconeServicos" src="assets/images/icone-servicos/sprinkler.png">
                            </div>
                            <div>                            
                                <span class="titulo-iconeServicos">Sistemas de <br> Sprinklers</span>                            
                                <span class="saibaMais-iconeServicos">
                                    Saiba Mais 
                                    <img class="img-iconeSeta" src="assets/images/icone-servicos/seta-direita.png">
                                </span>
                            </div>
                        </a>
                    </div> 
                    <div class="col-6 col-md-4 my-5 d-flex justify-content-center">
                        <a href="" class="iconeServico-link">      
                            <div class="text-center">                      
                                <img class="img-iconeServicos" src="assets/images/icone-servicos/alarme-incendio.png">
                            </div>
                            <div>
                                <span class="titulo-iconeServicos">Sinalização de <br> Emergência</span>                            
                                <span class="saibaMais-iconeServicos">
                                    Saiba Mais 
                                    <img class="img-iconeSeta" src="assets/images/icone-servicos/seta-direita.png">
                                </span>
                            </div>
                        </a>                        
                    </div>                   
                </div>
            </div>
        </section>
        <section id="clientesParceiros">
            <div class="container">
                <div class="row">
                    <div class="col pt-5 text-start">
                        <span class="titulo-cinzelSection">Nossos Clientes</span><br>
                        <span class="SubTitulo-TTSection">Confiança construída com responsabilidade técnica.</span>                        
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
                    <div class="col text-end">
                        <span class="titulo-cinzelSection">Empresas Parceiras</span><br>
                        <span class="SubTitulo-TTSection">Qualidade e certificação em cada projeto.</span>                        
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
            $tituloContato = "Vamos conversar?";
            $subtituloContato = "Especialistas em regularização e adequação contra incêndio. <br> Atendimento ágil e responsável.";
            include 'includes/form-contato.php'; 
        ?> 
    </main>

<?php include 'includes/footer.php'; ?>