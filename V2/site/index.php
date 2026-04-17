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
            <div class="container hero-content">
                <div class="row">
                    <div class="col">
                        <div id="verticalCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000"> 
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#verticalCarousel" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#verticalCarousel" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#verticalCarousel" data-bs-slide-to="2"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="hero-slide slide1">
                                        <div class="container">
                                            <div class="efect-slide">
                                                <span class="titulo-cinzel">Fireside</span><br>
                                                <span class="titulo-hero">Especialistas em Segurança Contra Incêndio <br> protegendo vidas e patrimônios</span>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="hero-slide slide2">
                                        <div class="container">
                                            <div class="efect-slide">
                                                <span class="titulo-cinzel">Soluções completas</span><br>
                                                <span class="titulo-hero">Projeto, execução e regularização em <br>conformidade com as normas</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="hero-slide slide3">
                                        <div class="container">
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
                </div>  
                <div class="row z-3">
                    <div class="col btn-conheca">
                        <a href="#oquefazemos">
                            <img src="assets/images/btn-conheca.png" alt="">
                        </a>                       
                    </div>
                </div>                          
            </div>
        </section>
        <section id="oquefazemos">
            <div class="container">
                testeeeeee
            </div>
        </section>
    </main>

<?php include 'includes/footer.php'; ?>