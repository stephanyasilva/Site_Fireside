<?php
    $title = "Fireside Serviços | Serviços Acessória AVCB/CLCB";
    $description = "Soluções completas em prevenção e combate a incêndio.";
    $ogImage = 'assets/img/og-default.jpg';
    $ogUrl = 'https://www.firesideservicos.com.br';

    require_once __DIR__ . '/../config.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/head.php'; ?>
</head>
<body>

    <?php include '../includes/header.php'; ?>

    <main>
        <?php 
            $bgTemplate = ASSETS . 'images/background/bg-servicos.png';
            $tituloTemplateServicos = "Acessória AVCB/CLCB";
            $page_servico = "acessoria-avcb.php";

            $linhaFina = "
                Regularização e adequação da sua edificação
            ";

            $descricaoServico = "
                Prestamos assessoria para processos de obtenção e renovação de AVCB e CLCB, realizando a análise das condições da edificação e orientando quanto às adequações necessárias para atendimento às exigências de segurança contra incêndio.
                <br><br>
                A Fireside acompanha as etapas necessárias para a regularização, desde a identificação das necessidades e desenvolvimento das soluções até o acompanhamento do processo junto aos órgãos competentes.
            ";
           
            $carouselImagens = [
                [
                    'src' => ASSETS . 'images/carousel-servicos/acessoria1.png',
                    'alt' => ''
                ],
                [
                    'src' => ASSETS . 'images/carousel-servicos/acessoria2.png',
                    'alt' => ''
                ],
                [
                    'src' => ASSETS . 'images/carousel-servicos/acessoria3.png',
                    'alt' => ''
                ]
            ];

            $beneficios = [
                "Análise da edificação: Identificação das necessidades de adequação conforme as características e condições do empreendimento.",
                "Orientação técnica: Direcionamento sobre as medidas e sistemas necessários para atendimento às exigências aplicáveis.",
                "Adequação dos sistemas: Desenvolvimento e acompanhamento das soluções necessárias para a regularização da edificação.",
                "Acompanhamento do processo: Suporte nas etapas do processo de regularização junto aos órgãos competentes.",

            ];

            $referenciaTecnica = "
                Os processos são conduzidos considerando as Instruções Técnicas do Corpo de Bombeiros e a legislação estadual aplicável à edificação.
            ";

            $tituloContatoTemplateServicos = "FALE COM A FIRESIDE";
            $subtituloContatoTemplateServicos = "
                Precisa de uma solução em segurança contra incêndio?
                <br><br>
                Nossa equipe está pronta para entender a necessidade do seu empreendimento e orientar você sobre a solução mais adequada.
                <br><br>
                Solicite uma avaliação técnica e conte-nos como podemos ajudar.
            ";
            $btnForm = "SOLICITAR AVALIAÇÃO";
            include '../includes/template-servicos.php'; 

        ?>
    </main>

<?php include '../includes/footer.php'; ?>