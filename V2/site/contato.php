<?php
    $title = "Fireside Serviços | Contato";
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
        <section id="contato">
            <div class="container px-5 px-md-5">
                <div class="sobre-content">
                    <div class="row">
                        <div class="col ">
                            <span class="titulo-cinzel">Fale Conosco</span><br>
                            <span class="SubTitulo-TT">Vamos conversar sobre a segurança do seu projeto</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col btn-sobre">
                            <a href="#formContato">
                                <img src="assets/images/btn-seta.png" class="img-fluid" alt="Conheça Mais">
                            </a>                       
                        </div>
                    </div>
                </div>                   
            </div>
        </section>
        <!-- CONTATO -->
         <section id="formContato">
            <?php 
                $tituloContato = "Atendimento Técnico Especializado";
                $subtituloContato = "Solicite uma análise técnica para sua edificação <br><br>
                                     Projetos, regularização e manutenção de sistemas de prevenção e combate a incêndio com tecnologia, conformidade e responsabilidade técnica";
                include 'includes/form-contato.php'; 
            ?> 
         </section>

    </main>

<?php include 'includes/footer.php'; ?>