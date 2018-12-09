<?php
    $meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
    $mes = date("n");
    $ano = date("Y");
?>

<div class="form-generic width-1100px margin-right-auto margin-left-auto margin-top-30px hide" data-card-form id="form-cadastrar-cartao">
    <h3 class="form-title">Cadastre um Cartão de Crédito:</h3>
    <div style="display: flex; flex-direction: row; justify-content: center; align-items: center;">
        <form action="#" method="POST" name="frmendereco" class="form-generic-content animate fadeInLeft" style="flex-grow: 1;">
            <label for="numero" class="label-generic">Número do Cartão:</label>
            <input type="text" name="numero" id="numero" placeholder="Ex: 1239 9434 2938 0093" class="input-generic" data-card-number>

            <label for="titular" class="label-generic">Títular:</label>
            <input type="text" name="titular" id="titular" placeholder="Como no cartão" class="input-generic" data-card-holder>

            <div class="form-row">
                <div style="width: 40%;">
                    <label for="mesExpiracao" class="label-generic">Mês de Expiração:</label>
                    <select name="mesExpiracao" id="mesExpiracao" class="input-generic" data-card-month>
                        <?php for ($i = 0; $i < count($meses); $i++) { ?>
                            <option value="<?= $i + 1 ?>" <?= $i == $mes - 1 ? "selected" : "" ?>><?= $meses[$i] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div style="width: 20%;" class="margin-left-15px">
                    <label for="anoExpiracao" class="label-generic">Ano:</label>
                    <select name="anoExpiracao" id="anoExpiracao" class="input-generic" data-card-year>
                        <option value="" disabled>Ano</option>
                        <?php for ($i = $ano; $i < $ano + 15; $i++) { ?>
                            <option value="<?= $i ?>" <?= $i == $ano ? "selected" : "" ?>><?= $i ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div style="width: 40%;" class="margin-left-15px">
                    <label for="codigo" class="label-generic">Código de Segurança</label>
                    <input type="text" name="codigo" id="codigo" placeholder="No verso do cartão..." class="input-generic" data-card-code>
                </div>
            </div>

            <div class="margin-top-30px margin-bottom-30px form-row">
                <span class="margin-right-15px cancel-form-button" data-f4f-slide-hide="#form-cadastrar-cartao">Cancelar</span>
                <div class="btn-generic">
                    <span>Salvar</span>
                </div>
            </div>
        </form>
        <div class="card-container margin-left-30px" data-card-container>
            <div class="front">
                <div class="header">
                    <figure>
                        <img src="assets/images/cards/card.jpg" alt="Rótulo">
                    </figure>
                    <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="flag" alt="Bandeira">
                </div>
                <span id="card-number">número do cartão</span>
                <p id="card-number-p">0123 4567 8910 1112</p>
                <div class="card-secound-line">
                    <div class="card-secound-column">
                        <span id="card-cardholder-name">nome</span>
                        <p>João F. Silva</p>
                    </div>
                    <div class="card-secound-column">
                        <span id="card-expiration">expiração</span>
                        <p>01/23</p>
                    </div>
                </div>
            </div>
            <div class="back">
                <div class="reader"></div>
                <div class="security-line">
                    <div class="security-column-one">
                        <span>JOÃO F. SILVA</span>
                    </div>
                    <div class="security-column-two">
                        <span>687</span>
                    </div>
                </div>
                <span id="security-code">código de segurança</span>
            </div>
        </div>
    </div>
</div>
