<?php
    $title = "Fireside Serviços | Serviços Sistema de Alarme de Incêndio";
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
            $tituloTemplateServicos = "Sistema de Alarme de Incêndio";
            $page_servico = "alarme-incendio.php";

            $linhaFina = "
                Soluções para detecção e alarme de incêndio
            ";

            $descricaoServico = "
                Desenvolvemos soluções de detecção e alarme de incêndio de acordo com as características de cada edificação. O trabalho envolve análise técnica, dimensionamento e integração dos sistemas, buscando proporcionar uma resposta rápida e organizada em situações de emergência.
                <br><br>
                As soluções podem contemplar equipamentos e dispositivos de detecção, acionamento e sinalização, definidos conforme as necessidades e características do empreendimento.
            ";
           
            $carouselImagens = [
                [
                    'src' => ASSETS . 'images/carousel-servicos/sistema1.png',
                    'alt' => 'Sistema de alarme de incêndio'
                ],
                [
                    'src' => ASSETS . 'images/carousel-servicos/sistema2.png',
                    'alt' => 'Central de alarme'
                ],
                [
                    'src' => ASSETS . 'images/carousel-servicos/sistema3.png',
                    'alt' => 'Detector de fumaça'
                ]
            ];

            $beneficios = [
                "Detecção de incêndio: Identificação de situações de emergência para possibilitar uma resposta mais rápida.",
                "Alerta aos ocupantes: Sinalização da ocorrência para facilitar a comunicação e a tomada de decisão em uma situação de emergência.",
                "Resposta mais rápida: Um sistema adequadamente dimensionado contribui para uma atuação mais ágil diante de uma ocorrência.",
                "Proteção de vidas e patrimônio:  Auxilia na redução dos riscos e na proteção das pessoas, instalações e bens da edificação.",

            ];

            $referenciaTecnica = "
                Projetos e instalações realizados conforme a ABNT NBR 17240 e as Instruções Técnicas do Corpo de Bombeiros aplicáveis à edificação.
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