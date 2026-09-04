<?php
    $title = "Fireside Serviços | Serviços Sistema de Sprinkler";
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
            $tituloTemplateServicos = "Sistema de Sprinkler";
            $page_servico = "sistema-sprinkler.php";

            $linhaFina = "
                Proteção automática para controle de incêndios
            ";

            $descricaoServico = "
                Projetamos e implantamos sistemas de sprinklers de acordo com as características e necessidades de cada edificação. O trabalho envolve o dimensionamento hidráulico, a definição das áreas de cobertura e a integração do sistema ao abastecimento de água.
                <br><br>
                Os sprinklers atuam automaticamente diante de uma elevação de temperatura, contribuindo para o controle do princípio de incêndio e para a redução dos danos à edificação.
            ";
           
            $carouselImagens = [
                [
                    'src' => ASSETS . 'images/carousel-servicos/sistemasprinklers1.png',
                    'alt' => ''
                ],
                [
                    'src' => ASSETS . 'images/carousel-servicos/sistemasprinklers2.png',
                    'alt' => ''
                ],
                [
                    'src' => ASSETS . 'images/carousel-servicos/sistemasprinklers3.png',
                    'alt' => ''
                ]
            ];

            $beneficios = [
                "Atuação automática: O sistema pode atuar automaticamente diante das condições de temperatura previstas para o acionamento dos sprinklers.",
                "Controle do incêndio: Contribui para controlar o desenvolvimento do incêndio em seu estágio inicial.",
                "Proteção da edificação: Auxilia na redução de danos estruturais e patrimoniais provocados pelo incêndio.",
                "Cobertura dimensionada: O sistema é projetado considerando as áreas de cobertura e as características específicas da edificação.",

            ];

            $referenciaTecnica = "
                Projetos e instalações realizados conforme a ABNT NBR 10897 e as Instruções Técnicas do Corpo de Bombeiros aplicáveis à edificação.
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