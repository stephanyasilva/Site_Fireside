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
                    <div class="col-12">
                        

<div class="container py-5">

<div class="hero-carousel">

<input type="radio" name="slider" id="s1" checked hidden>
<input type="radio" name="slider" id="s2" hidden>
<input type="radio" name="slider" id="s3" hidden>

<div class="hero-carousel-wrapper">

<section class="hero-slide">
<h2>Título 1</h2>
<p>Conteúdo do primeiro slide</p>
</section>

<section class="hero-slide">
<h2>Título 2</h2>
<p>Conteúdo do segundo slide</p>
</section>

<section class="hero-slide">
<h2>Título 3</h2>
<p>Conteúdo do terceiro slide</p>
</section>

</div>

<div class="hero-nav">

<label for="s1">01</label>
<label for="s2">02</label>
<label for="s3">03</label>

<div class="hero-line"></div>

</div>

</div>
</div>



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