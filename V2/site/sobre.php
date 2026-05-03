<?php
    $title = "Fireside Serviços | Sobre-Nós";
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
        <section id="sobre">
            <div class="container px-5 px-md-5">
                <div class="sobre-content">
                    <div class="row">
                        <div class="col ">
                            <span class="titulo-cinzel">Sobre Nós</span><br>
                            <span class="SubTitulo-TT">Começamos a fireside com um objetivo em mente</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col btn-sobre">
                            <a href="">
                                <img src="assets/images/btn-seta.png" class="img-fluid" alt="Conheça Mais">
                            </a>                       
                        </div>
                    </div>
                </div>                   
            </div>
        </section>
        <section id="objetivoFireside">
            <div class="container px-5-px-md-5">
                <div class="row">
                    <div class="col">

                    </div>
                </div>
            </div>
        </section>
        <!-- CONTATO -->
        <?php 
            $tituloContato = "Conte com a Fireside";
            $subtituloContato = "Transformamos responsabilidade técnica e tecnologia aplicada em soluções seguras 
                                 e eficientes para o seu empreendimento. Nossa equipe está pronta para analisar 
                                 sua necessidade e orientar cada etapa da adequação ou regularização.";
            include 'includes/form-contato.php'; 
        ?> 
    </main>

<?php include 'includes/footer.php'; ?>