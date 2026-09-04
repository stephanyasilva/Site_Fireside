<?php
    $title = "Fireside Serviços | Contato";
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
        <section id="contato">
            <div class="container px-5 px-md-5">
                <div class="contato-content">
                    <div class="row">
                        <div class="col ">
                            <span class="titulo-cinzel">Fale Conosco</span><br>
                            <span class="SubTitulo-TT">Vamos conversar sobre a segurança do seu projeto</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col btn-sobre">
                            <a href="#chamadaForm">
                                <img src="assets/images/btn-seta.png" class="img-fluid" alt="Conheça Mais">
                            </a>                       
                        </div>
                    </div>
                </div>                   
            </div>
        </section>
        <section id="chamadaForm">
            <div class="container p-5 p-md-5 mt-5">
                <div class="row">
                    <div class="col text-center">
                        <span class="SubTitulo-TTSection text-uppercase">Solicite uma análise técnica para sua edificação</span><br>                       
                        <span class="titulo-cinzelSection">Projetos, instalações, regularização e manutenção de sistemas de prevenção e combate a incêndio, com soluções adequadas às necessidades do seu empreendimento.</span>                       
                    </div>
                </div>
            </div>
        </section>
        <!-- CONTATO -->
         <section id="formContato">
            <?php 
                $btnForm = "SOLICITAR AVALIAÇÃO";
                $isContato = "contato";
                include 'includes/form-contato.php'; 
            ?> 
         </section>

    </main>

<?php include 'includes/footer.php'; ?>