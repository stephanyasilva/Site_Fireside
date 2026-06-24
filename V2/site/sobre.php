<?php
    $title = "Fireside Serviços | Sobre-Nós";
    $description = "Soluções completas em prevenção e combate a incêndio.";
    $ogImage = 'assets/img/og-default.jpg';
    $ogUrl = 'https://www.firesideservicos.com.br';

    // 
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
                            <span class="SubTitulo-TT">Começamos a fireside com um objetivo em mente</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col btn-sobre">
                            <a href="#objetivoFireside">
                                <img src="assets/images/btn-seta.png" class="img-fluid" alt="Conheça Mais">
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
                        <img src="assets/images/linha-vermelha.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-objetivo p-3 m-3 p-lg-5 m-lg-5">
                        Com o objetivo de oferecer soluções completas em segurança contra incêndio, 
                        unindo conhecimento técnico, conformidade normativa e compromisso com a proteção 
                        de vidas e patrimônios. Atuamos com projetos, regularizações e implantação de 
                        sistemas preventivos, sempre com responsabilidade e atenção aos detalhes.
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <img src="assets/images/linha-vermelha.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="comoTrabalhamos">
            <div class="container ">
                <div class="row">
                    <div class="col my-xl-5 text-center">
                        <span class="titulo-cinzelSection">Como Trabalhamos</span><br>
                        <span class="SubTitulo-TTSection">Um processo técnico estruturado para garantir segurança. <br class="d-none d-lg-block"> Conformidade e eficiência em cada projeto.</span>                        
                    </div>
                </div>
                <div class="row py-3 py-md-1">
                    <div class="col-12 col-lg-6">
                        <div class="card card-CTrabalhamos m-3 m-md-5">
                            <div class="card-body align-middle p-3 p-md-5">
                                <span class="titulo-card">Tecnologia</span><br><br>
                                <span class="texto-card">Utilizamos sistemas modernos de detecção, alarme e combate a incêndio, 
                                com equipamentos certificados e soluções atualizadas conforme as normas 
                                técnicas vigentes.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card card-CTrabalhamos m-3 m-md-5">
                            <div class="card-body p-3 p-md-5">
                                <span class="titulo-card">Equipe Especializada</span><br><br>
                                <span class="texto-card">Profissionais qualificados e atualizados para análise de risco, dimensionamento
                                e execução segura de cada projeto.<br><br></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card card-CTrabalhamos m-3 m-md-5">
                            <div class="card-body p-3 p-md-5">
                                <span class="titulo-card">Qualidade Técnica</span><br><br>
                                <span class="texto-card">Cada instalação passa por verificação criteriosa, garantindo desempenho, 
                                durabilidade e conformidade.<br><br></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card card-CTrabalhamos m-3 m-md-5">
                            <div class="card-body p-3 p-md-5">
                                <span class="titulo-card">Soluções Completas</span><br><br>
                                <span class="texto-card">Atuamos do projeto à regularização final, oferecendo acompanhamento técnico 
                                em todas as etapas.<br><br></span>
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
            $subtituloContato = "Transformamos responsabilidade técnica e tecnologia aplicada em soluções seguras 
                                 e eficientes para o seu empreendimento. Nossa equipe está pronta para analisar 
                                 sua necessidade e orientar cada etapa da adequação ou regularização.";
            include 'includes/form-contato.php'; 
        ?> 
    </main>

<?php include 'includes/footer.php'; ?>