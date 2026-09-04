<section id="template-servicos" style="background-image: url('<?= $bgTemplate ?>');">
    <div class="container px-5 px-md-5">
        <div class="template-servicos-content">
            <div class="row">
                <div class="col">
                    <span class="titulo-cinzel">Serviços</span><br>
                    <span class="SubTitulo-TT"><?= $tituloTemplateServicos ?? '' ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col btn-sobre">
                    <a href="<?= BASE_URL ?>servicos/<?= $page_servico ?? '' ?>#info-servicos"> 
                        <img src="<?= ASSETS ?>images/btn-seta.png" class="img-fluid" alt="Conheça Mais"> 
                    </a>                       
                </div>
            </div>
        </div>                   
    </div>
</section>
<section id="info-servicos">
    <div class="container px-5 px-md-5">
        <div class="row">
            <div class="col py-5 my-5 text-center">
                <img src="<?= ASSETS ?>images/linha-vermelha.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center pb-4">
                <span class="titulo-bnfc"><?= $linhaFina ?? '' ?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-descricao">
                <?= $descricaoServico ?? '' ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 pt-4 pt-lg-5 mt-lg-5 pb-4">
                <span class="titulo-bnfc">Beneficios</span>
            </div>
            <div class="col-12 col-lg-7 py-5 py-lg-0 pt-3 pb-5">
                <?php if (!empty($beneficios)): ?>
                    <div class="beneficios-servico list-bnfc">
                        <ul>
                            <?php foreach ($beneficios as $beneficio): ?>
                                <li><?= htmlspecialchars($beneficio) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
             <div class="col-12 col-lg-5 py-5 py-lg-0 order-first order-md-first order-lg-last text-center">
                <?php if (!empty($carouselImagens)): ?>
                    <div id="carouselTemplateServicos" class="carousel carousel-templateServicos slide-servicos" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php foreach ($carouselImagens as $index => $imagem): ?>
                                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                    <img src="<?= $imagem['src'] ?>" class="img-fluid rounded-2" alt="<?= htmlspecialchars($imagem['alt']) ?>">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php if (count($carouselImagens) > 1): ?>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselTemplateServicos" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselTemplateServicos" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                                <span class="visually-hidden">Próximo</span>
                            </button>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 pt-4 pt-lg-5 mt-lg-5 pb-4">
                <span class="titulo-bnfc">Referência Técnica</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-descricao pb-5 mb-5">
                <?= $referenciaTecnica ?? '' ?>
            </div>
        </div>
    </div>    
                  
</section>
<section id="formContato">
    <?php 
        $tituloContato = $tituloContatoTemplateServicos;
        $subtituloContato = $subtituloContatoTemplateServicos;
        include '../includes/form-contato.php'; 
    ?> 
</section>
<section id="voltar">
    <div class="container py-5 text-center">
        <a href="<?= BASE_URL ?>servicos.php" class="btn btn-voltar_servicos" role="button">
            Conheça nossos outros serviços 
        </a>
    </div>
</section>