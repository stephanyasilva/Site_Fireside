<?php
    $title = "Fireside Serviços | Sobre-Nós";
    $description = "Soluções completas em prevenção e combate a incêndio.";
    $ogImage = '<?= ASSETS ?>img/og-default.jpg';
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
        <section id="sobre">
            <div class="container px-5 px-md-5">
                <div class="sobre-content">
                    <div class="row">
                        <div class="col">
                            <span class="titulo-cinzel">Sobre Nós</span><br>
                            <span class="SubTitulo-TT">Segurança contra incêndio com conhecimento técnico e responsabilidade</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col btn-sobre">
                            <a href="#objetivoFireside">
                                <img src="<?= ASSETS ?>images/btn-seta.png" class="img-fluid" alt="Conheça Mais">
                            </a>                       
                        </div>
                    </div>
                </div>                   
            </div>
        </section>
        <section id="objetivoFireside">
            <div class="container py-2 mt-5 py-md-5">
                <div class="row">
                    <div class="col text-center">
                        <img src="<?= ASSETS ?>images/linha-vermelha.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-objetivo p-3 m-3 p-lg-5 m-lg-5">
                        A <b>FIRESIDE</b> nasceu com o propósito de oferecer soluções completas em segurança contra incêndio, unindo conhecimento técnico, conformidade normativa e compromisso com a proteção de vidas e patrimônios.
                        <br><br>
                        Atuamos na adequação, implantação e regularização de sistemas de prevenção e combate a incêndio, considerando as características e necessidades de cada empreendimento.
                        <br><br>
                        Nosso trabalho é baseado em responsabilidade técnica, atenção aos detalhes e busca por soluções eficientes, contribuindo para ambientes mais seguros e preparados para situações de emergência.
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <img src="<?= ASSETS ?>images/linha-vermelha.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="comoTrabalhamos">
            <div class="container ">
                <div class="row">
                    <div class="col my-xl-5 text-center">
                        <span class="titulo-cinzelSection">Como Trabalhamos</span><br>
                        <span class="SubTitulo-TTSection">Um processo técnico estruturado para garantir segurança, <br class="d-none d-lg-block"> conformidade e eficiência em cada projeto.</span>                        
                    </div>
                </div>
                <div class="row py-3 py-md-1">
                    <div class="col-12 col-lg-6">
                        <div class="card card-CTrabalhamos m-3 m-md-5">
                            <div class="card-body align-middle p-3 p-md-5">
                                <span class="titulo-card">Tecnologia</span><br><br>
                                <span class="texto-card">
                                    Utilizamos sistemas modernos de detecção, alarme e combate a incêndio, com equipamentos certificados e soluções atualizadas de acordo com as normas técnicas aplicáveis.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card card-CTrabalhamos m-3 m-md-5">
                            <div class="card-body p-3 p-md-5">
                                <span class="titulo-card">Equipe Especializada</span><br><br>
                                <span class="texto-card">
                                    Contamos com profissionais qualificados e atualizados para realizar análises, dimensionamentos e execuções com segurança e precisão em cada projeto.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card card-CTrabalhamos m-3 m-md-5">
                            <div class="card-body p-3 p-md-5">
                                <span class="titulo-card">Qualidade Técnica</span><br><br>
                                <span class="texto-card">
                                    Cada instalação passa por verificações criteriosas, buscando garantir desempenho, durabilidade, segurança e atendimento aos requisitos técnicos aplicáveis.
                                <br><br>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card card-CTrabalhamos m-3 m-md-5">
                            <div class="card-body p-3 p-md-5">
                                <span class="titulo-card">Soluções Completas</span><br><br>
                                <span class="texto-card">
                                    Atuamos em diferentes etapas do processo, do projeto e adequação à implantação e regularização, oferecendo acompanhamento técnico conforme a necessidade de cada empreendimento.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'includes/content-galeria_video.php'; ?>

        <!-- CONTATO -->
        <?php 
            $tituloContato = "Conte com a Fireside";
            $subtituloContato = "
                Transformamos conhecimento técnico em soluções seguras e eficientes.
                <br><br>
                Conte com a Fireside para desenvolver, adequar e implantar soluções de prevenção e combate a incêndio de acordo com as necessidades do seu empreendimento.
            ";
            $btnForm = "SOLICITAR AVALIAÇÃO TÉCNICA";
            include 'includes/form-contato.php'; 
        ?> 
    </main>

<?php include 'includes/footer.php'; ?>