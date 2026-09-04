<?php
    // Caminho da pasta de vídeos em relação à raiz do projeto.
    $diretorioVideos = 'assets/video/galeria';

    // Extensões de vídeo que serão procuradas.
    $extensoesVideos = ['mp4', 'webm', 'mov', 'ogg'];
    

    // Quantidade de vídeos exibidos em cada slide do carrossel.
    $videosPorSlide = 4;    

    // Caminho físico utilizado pelo PHP para localizar os arquivos.
    $pastaVideos = dirname(__DIR__) . '/' . $diretorioVideos;

    // Caminho público utilizado no HTML.
    $urlPastaVideos = $diretorioVideos;

    //Escapa caracteres especiais antes de imprimir no HTML
    function e(string $value): string{
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }

    //Converte o nome do arquivo em um texto mais amigável.
    function nomeLegivel(string $arquivo): string{
        $nome = pathinfo($arquivo, PATHINFO_FILENAME);
        $nome = str_replace(['-', '_'], ' ', $nome);

        return ucwords($nome);
    }

    // Retorna o MIME Type correto para cada vídeo.
    function tipoVideo(string $arquivo): string{
        $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));

        $tipos = [
            'mp4'  => 'video/mp4',
            'webm' => 'video/webm',
            'mov'  => 'video/quicktime',
            'ogg'  => 'video/ogg',
        ];

        return $tipos[$extensao] ?? 'video/mp4';
    }

    // Array que armazenará todos os vídeos encontrados.
    $arquivosVideos = [];

    // Verifica se a pasta existe antes de continuar.
    if (is_dir($pastaVideos)) {
        
        // Procura vídeos para cada extensão configurada.
        foreach ($extensoesVideos as $extensao) {

            $arquivosVideos = array_merge(
                $arquivosVideos,
                glob($pastaVideos . '/*.' . $extensao) ?: []
            );
        }

        // Ordena naturalmente.
        sort($arquivosVideos, SORT_NATURAL | SORT_FLAG_CASE);
    }

    // Monta o array final de vídeos
    $videos = array_map(
        function (string $caminhoVideo) use ($urlPastaVideos): array {

            $arquivo = basename($caminhoVideo);

            return [
                'src'  => $urlPastaVideos . '/' . $arquivo,
                'alt'  => nomeLegivel($arquivo),
                'type' => tipoVideo($arquivo),
            ];
        },
        $arquivosVideos
    );

    // DIVIDE OS VÍDEOS EM SLIDES
    // Cada posição do array representa um slide do carrossel.
    $slides = array_chunk($videos, $videosPorSlide);
?>

<section id="projetosExecutados">
    <div class="container px-5 px-md-5">
        <div class="row">
            <div class="col my-xl-5 text-start">
                <span class="titulo-cinzelSection">Projetos Executados</span><br>
                <span class="SubTitulo-TTSection text-uppercase">Conheça os projetos executados pela Fireside. </span>                        
            </div>
        </div>
        <div class="row">
            <div class="col text-objetivo pt-3 pb-5">
                Confira registros de instalações, adequações e soluções de segurança contra incêndio desenvolvidas pela nossa equipe em diferentes empreendimentos.
            </div>
        </div>
        <div class="row">
            <div class="col pt-5">
                <div class="video-carousel-section">
                    <div id="videoCarousel" class="carousel carrossel-galeria slide video-carousel m-0" data-bs-ride="false">
                        <!-- Mostra os controles apenas quando existe mais de um slide. -->
                        <?php if (count($slides) > 1): ?>
                            <div class="carousel-buttons">
                                <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev" aria-label="Video anterior">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next" aria-label="Proximo video">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <div class="carousel-inner carousel-galeria-inner">
                            <!-- Cada grupo criado pelo array_chunk vira um item do carrossel. -->
                            <?php foreach ($slides as $slideIndex => $slideVideos): ?>
                                <div class="carousel-galeria-item carousel-item <?= $slideIndex === 0 ? 'active' : ''; ?>">
                                    <div class="video-row">
                                        <!-- Renderiza cada video dentro do slide atual. -->
                                        <?php foreach ($slideVideos as $video): ?>
                                        <button class="video-card" type="button" data-video="<?= e($video['src']); ?>" aria-label="Abrir <?= e($video['alt']); ?>">
                                            <!-- O poster nao vem do PHP; ele sera gerado via JavaScript com canvas. -->
                                            <video muted playsinline preload="metadata">
                                            <source src="<?= e($video['src']); ?>" type="<?= e($video['type']); ?>">
                                            </video>
                                            <span class="play-button" aria-hidden="true"></span>
                                        </button>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</section>

<!-- Modal do Bootstrap usado para abrir o video clicado em tamanho maior. -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-dark">
        <div class="modal-header border-0">
            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Fechar"></button>
        </div>
        <div class="modal-body pt-0">
            <video id="modalVideo" class="w-100" controls playsinline></video>
        </div>
        </div>
    </div>
</div>