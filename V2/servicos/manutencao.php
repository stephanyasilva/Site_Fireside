<?php
    $title = "Fireside Serviços | Serviços Manutenção em sistemas de segurança contra incêndio";
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
            $tituloTemplateServicos = "Manutenção em sistemas de segurança contra incêndio";
            $page_servico = "manutencao.php";

            $linhaFina = "
                Manutenção para manter seus sistemas preparados
            ";

            $descricaoServico = "
                Realizamos manutenção preventiva e corretiva em sistemas de segurança contra incêndio, com inspeções, verificações e testes de funcionamento de acordo com as características de cada sistema e da edificação.
                <br><br>
                A manutenção permite identificar desgastes, falhas ou irregularidades e realizar as intervenções necessárias para manter os sistemas em condições adequadas de funcionamento e contribuir para a segurança da edificação.
            ";
           
            $carouselImagens = [
                [
                    'src' => ASSETS . 'images/carousel-servicos/manutencao1.png',
                    'alt' => ''
                ],
                [
                    'src' => ASSETS . 'images/carousel-servicos/manutencao2.png',
                    'alt' => ''
                ],
                [
                    'src' => ASSETS . 'images/carousel-servicos/manutencao3.png',
                    'alt' => ''
                ]
            ];

            $beneficios = [
                "Prevenção de falhas: Identificação antecipada de possíveis problemas que possam comprometer o funcionamento dos sistemas.",
                "Verificação dos equipamentos: Inspeção e testes para avaliar as condições de funcionamento dos sistemas e seus componentes.",
                "Maior confiabilidade: Manutenções periódicas contribuem para manter os sistemas preparados para situações de emergência.",
                "Preservação dos sistemas: Acompanhamento das condições dos equipamentos, contribuindo para sua conservação e vida útil.",

            ];

            $referenciaTecnica = "
                A manutenção pode ser realizada de acordo com as características e necessidades da edificação, contemplando diferentes sistemas de segurança contra incêndio, como:
                <br><br>
                Sistemas de detecção e alarme de incêndio · Sistemas de pressurização de escadas 

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