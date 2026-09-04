<section id="contatoForm">
    <div class="container-fluid">
        <div class="row">
            <div id="cardContato" class="col mt-5">
                <div class="container">
                    <?php if(empty($isContato)):?>
                        <div class="row">
                            <div class="col m-md-5 mt-5">
                                <span class="titulo-cinzelContato"><?= $tituloContato ?? '' ?></span><br>
                                <span class="SubTitulo-TTContato"><?= $subtituloContato ?? '' ?></span>
                            </div>
                        </div>
                    <?php endif?>
                    <div class="row">
                        <div class="col my-5 m-md-5">
                            <div class="form-contato p-5">
                                <form id="formContato">
                                    <div class="row">
                                        <div class="col-12 col-md-6 pb-3 pb-md-0">
                                            <label for="nome" class="form-label">Nome</label>
                                            <input type="text" class="form-control" id="nome" name="nome" required>                                   
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="empresa" class="form-label">Empresa</label>
                                            <input type="text" class="form-control" id="empresa" name="empresa"> 
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-12 col-md-6 pb-3 pb-md-0">
                                            <label for="email" class="form-label">E-mail</label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="seuemail@dominio.com" required> 
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="telefone" class="form-label">Telefone</label>
                                            <input type="tel" id="telefone" name="telefone" class="form-control" placeholder="(11) 99999-9999">
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-12">
                                            <label for="servico" class="form-label">Serviço</label>
                                            <select id="servico" name="servico" class="form-select" required>
                                                <option value="" selected disabled>Selecione o serviço desejado</option>
                                                <option value="alarme">Sistema de alarme de incêndio</option>
                                                <option value="pressurizacao">Pressurização de Escada</option>
                                                <option value="manutencao">Manutenção em sistemas de alarme de incêndio</option>
                                                <option value="avcb">Assessoria AVCB/CLCB</option>
                                                <option value="sprinkler">Sistema de Sprinkler</option>
                                                <option value="placas">Placas de identificação</option>
                                                <option value="placas">Outro / Não sei qual serviço preciso</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-12">
                                            <label for="mensagem" class="form-label">Mensagem</label>
                                            <textarea class="form-control" id="mensagem" name="mensagem" rows="3" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row pt-5">
                                        <div class="col-12 col-md-6"></div>
                                        <div class="col-12 col-md-12 text-center text-md-end">
                                            <button type="button" class="btn btn-enviar g-recaptcha" data-sitekey="6Lf4mNIsAAAAALPQEi1YbOwSVafIGpspmeKMKu9A" data-callback="onSubmit" data-action="submit">
                                                <?= $btnForm ?? 'Enviar' ?>
                                            </button>
                                            <div id="retornoForm"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-12 text-center text-md-end pt-3">
                                            <a href="https://wa.me/5511922817773?text=Olá,%20quero%20informações%20sobre%20serviços%20da%20Fireside" target="_blank" class="contato-wapp" rel="noopener noreferrer">
                                                Fale pelo WhatsApp  <img src="<?= ASSETS ?>images/icon-wpp.png" width="25" height="auto" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>