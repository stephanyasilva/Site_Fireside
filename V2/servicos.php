<?php
    $title = "Fireside Serviços | Serviços";
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
        <section id="servicos">
            <div class="container px-5 px-md-5">
                <div class="servicos-content">
                    <div class="row">
                        <div class="col">
                            <span class="titulo-cinzel">NOSSOS SERVIÇOS</span><br>
                            <span class="SubTitulo-TT">Conheça mais sobre nosso trabalho</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col btn-sobre">
                            <a href="#prestacao">
                                <img src="<?= ASSETS ?>images/btn-seta.png" class="img-fluid" alt="Conheça Mais">
                            </a>                       
                        </div>
                    </div>
                </div>                   
            </div>
        </section>
        <section id="prestacao">
            <div class="container px-5 px-md-5">
                <div class="row">
                    <div class="col text-center pt-5 mt-3">
                        <img src="<?= ASSETS ?>images/linha-vermelha.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="row py-5 my-5 ">
                    <div class="col-12">
                        <span class="text-descricao">
                            A <b>FIRESIDE</b> oferece soluções completas em prevenção e combate a incêndio, desde a implantação e adequação de sistemas até a manutenção e regularização de edificações.
                            <br><br>
                            Atuamos de forma técnica e personalizada, considerando as características, necessidades e exigências de cada empreendimento.
                        </span>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center pb-5 mb-3">
                        <img src="<?= ASSETS ?>images/linha-vermelha.png" class="img-fluid" alt="">
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
                                <div class="col-6 col-sm-12 col-lg-7 text-start text-sm-center text-lg-start pt-sm-4 mt-lg-2 px-0">
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
                                <div class="col-6 col-sm-12 col-lg-7 text-start text-sm-center text-lg-start pt-sm-4 mt-lg-2 px-0">
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
                                <div class="col-6 col-sm-12 col-lg-7 text-start text-sm-center text-lg-start pt-sm-4 mt-lg-2 px-0">
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
                                <div class="col-6 col-sm-12 col-lg-7 text-start text-sm-center text-lg-start pt-sm-4 mt-lg-2 px-0">
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
                                <div class="col-6 col-sm-12 col-lg-7 text-start text-sm-center text-lg-start pt-sm-4 mt-lg-2 px-0">
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
                                <div class="col-6 col-sm-12 col-lg-7 text-start text-sm-center text-lg-start pt-sm-4 mt-lg-2 px-0">
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
        <!-- CONTATO -->
         <section id="formContato">
            <?php 
                $tituloContato = "FALE COM A FIRESIDE";
                $subtituloContato = "
                    Encontre a solução ideal para o seu empreendimento. <br><br>
                    Nossa equipe está pronta para entender sua necessidade e orientar você sobre a melhor solução em prevenção e combate a incêndio. <br><br>
                    Solicite uma avaliação e conte-nos sobre o seu empreendimento, serviço necessário ou necessidade de adequação.
                ";
                $btnForm = "SOLICITAR AVALIAÇÃO";
                include 'includes/form-contato.php'; 
            ?> 
         </section>
    </main>

<?php include 'includes/footer.php'; ?>