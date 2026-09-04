<?php
    $title = "Fireside Serviços | Serviços Placas de Identificação";
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
            $tituloTemplateServicos = "Placas de Identificação";
            $page_servico = "placas-identificacao.php";

            $linhaFina = "
                Orientação clara para situações de emergência
            ";

            $descricaoServico = "
                Fornecemos e instalamos sinalizações de emergência de acordo com as características e o layout de cada edificação, garantindo a identificação adequada de rotas de fuga, saídas de emergência e equipamentos de segurança.
                <br><br>
                As sinalizações são posicionadas de forma estratégica para facilitar a orientação dos ocupantes e contribuir para uma evacuação mais organizada e segura em situações de emergência.
            ";
           
            $carouselImagens = [
                [
                    'src' => ASSETS . 'images/carousel-servicos/placas1.png',
                    'alt' => ''
                ],
                [
                    'src' => ASSETS . 'images/carousel-servicos/placas2.png',
                    'alt' => ''
                ],
                [
                    'src' => ASSETS . 'images/carousel-servicos/placas3.png',
                    'alt' => ''
                ]
            ];

            $beneficios = [
                "Orientação dos ocupantes: Facilita a identificação das rotas de fuga e saídas de emergência.",
                "Identificação dos equipamentos: Auxilia na localização de equipamentos e sistemas destinados à segurança contra incêndio.",
                "Evacuação mais organizada: Contribui para que os ocupantes encontrem as rotas de saída com maior facilidade durante uma emergência.",
                "Padronização da sinalização: Utilização de sinalizações adequadas às características e necessidades da edificação.",

            ];

            $referenciaTecnica = "
                Sinalizações elaboradas e instaladas conforme a ABNT NBR 13434 e as Instruções Técnicas do Corpo de Bombeiros aplicáveis à edificação.
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