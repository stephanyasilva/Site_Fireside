<?php
    $title = "Fireside Serviços | Serviços Sistema de Pressurização Para Escadas de Emergência";
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
            $tituloTemplateServicos = "Sistema de Pressurização Para Escadas de Emergência";
            $page_servico = "pressurizacao.php";

            $linhaFina = "
                Soluções para proteção das rotas de fuga
            ";

            $descricaoServico = "
                Desenvolvemos soluções de pressurização para escadas de emergência, considerando as características da edificação e as necessidades do sistema de segurança contra incêndio.
                <br><br>
                A pressurização contribui para manter as escadas de emergência protegidas da entrada de fumaça durante uma situação de incêndio, auxiliando na segurança das rotas de fuga e na evacuação dos ocupantes.
            ";
           
            $carouselImagens = [
                [
                    'src' => ASSETS . 'images/carousel-servicos/pressurizacao1.jpeg',
                    'alt' => ''
                ],
                [
                    'src' => ASSETS . 'images/carousel-servicos/pressurizacao2.png',
                    'alt' => ''
                ],
                [
                    'src' => ASSETS . 'images/carousel-servicos/pressurizacao3.png',
                    'alt' => ''
                ]
            ];

            $beneficios = [
                "Proteção das rotas de fuga: Contribui para manter as escadas de emergência em condições mais seguras durante uma ocorrência.",
                "Controle da fumaça: Auxilia na redução da entrada de fumaça nas escadas de emergência.",
                "Segurança na evacuação: Contribui para proporcionar uma rota de fuga mais protegida para os ocupantes da edificação.",
                "Proteção dos ocupantes: Auxilia na segurança das pessoas durante situações de emergência.",

            ];

            $referenciaTecnica = "
                Projetos e instalações realizados conforme a ABNT NBR 14880 e as Instruções Técnicas do Corpo de Bombeiros aplicáveis à edificação.
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