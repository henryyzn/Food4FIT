<?php
    require_once("../../controller/IngredienteController.class.php");
    require_once("../../controller/CategoriaIngredienteController.class.php");
    $unidadesMedida = IngredienteController::listarUnidadesMedida();
    $categorias = CategoriaIngredienteController::montarSelectCategorias();
?>

<form id="form-content" class="display-none" data-crud-form>
    <div id="form-two-sides">
        <div id="form-left-side" class="padding-left-20px padding-right-20px">
            <div class="form-generic">
                <div class="form-generic-content">
                    <h2 class="form-title margin-top-20px">Cadastrar um Ingrediente</h2>
                    <div class="form-row">
                        <div class="form-column form-group-6">
                            <label for="titulo" class="label-generic">Nome do Ingrediente:</label>
                            <input id="titulo" name="titulo" class="input-generic" required placeholder="Digite um nome para o ingrediente...">
                        </div>
                        <div class="form-column form-group-6">
                            <label for="preco" class="label-generic">Preço do Ingrediente:</label>
                            <input id="preco" name="preco" class="input-generic" required placeholder="Digite um preço para o ingrediente..." data-mask="#.##0,00" data-mask-reverse="true" data-money-format>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-column form-group-6">
                            <label for="unidadeMedida" class="label-generic">Unidade de Medida:</label>
                            <select id="unidadeMedida" name="unidadeMedida.id" class="input-generic" required>
                                <option disabled selected value="">Selecione uma opção</option>
                                <?php foreach ($unidadesMedida as $unidade) { ?>
                                    <option value="<?= $unidade->getId() ?>">
                                        <?= $unidade->getUnidadeMedida() ?> (<?= $unidade->getSigla() ?>)
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-column form-group-6">
                            <label for="categoria" class="label-generic">Categoria:</label>
                            <select id="categoria" name="categoria.id" class="input-generic" required>
                                <option disabled selected value="">Selecione uma opção</option>
                                <?= $categorias ?>
                            </select>
                        </div>
                    </div>

                    <label for="descricao" class="label-generic">Descrição do Ingrediente:</label>
                    <textarea id="descricao" name="descricao" class="textarea-generic" data-sceditor></textarea>

                    <h3>Informações Nutricionais</h3>
                    <p class="description width-500px">Complete a tabela nutricional para completar a descrição do ingrediente e possibilitar a produção dos pratos com ele</p>

                    <div class="form-row">
                        <div class="form-column form-group-4">
                            <label for="valorEnergetico" class="label-generic">Valor Energético:</label>
                            <input id="valorEnergetico" name="valorEnergetico" class="input-generic" required placeholder="kcal=kj (quilos por caloria)" data-mask="0#">
                        </div>
                        <div class="form-column form-group-4">
                            <label for="carboidratos" class="label-generic">Carboidratos:</label>
                            <input id="carboidratos" name="carboidratos" class="input-generic" required placeholder="g (gramas)" data-mask="0#">
                        </div>
                        <div class="form-column form-group-4">
                            <label for="proteinas" class="label-generic">Proteínas:</label>
                            <input id="proteinas" name="proteinas" class="input-generic" required placeholder="g (gramas)" data-mask="0#">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-column form-group-4">
                            <label for="gorduraTotal" class="label-generic">Gordura Total:</label>
                            <input id="gorduraTotal" name="gorduraTotal" class="input-generic" required placeholder="g (gramas)" data-mask="0#">
                        </div>
                        <div class="form-column form-group-4">
                            <label for="gorduraSaturada" class="label-generic">Gordura Saturada:</label>
                            <input id="gorduraSaturada" name="gorduraSaturada" class="input-generic" required placeholder="g (gramas)" data-mask="0#">
                        </div>
                        <div class="form-column form-group-4">
                            <label for="gorduraTrans" class="label-generic">Gordura Trans:</label>
                            <input id="gorduraTrans" name="gorduraTrans" class="input-generic" required placeholder="g (gramas)" data-mask="0#">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-column form-group-4">
                            <label for="fibraAlimentar" class="label-generic">Fibra Alimentar:</label>
                            <input id="fibraAlimentar" name="fibraAlimentar" class="input-generic" required placeholder="g (gramas)" data-mask="0#">
                        </div>
                        <div class="form-column form-group-4">
                            <label for="sodio" class="label-generic">Sódio:</label>
                            <input id="sodio" name="sodio" class="input-generic" required placeholder="mg (miligramas)" data-mask="0#">
                        </div>
                        <div class="form-column form-group-4"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="form-right-side">
            <div class="padding-top-10px" data-imagem-upload data-bind="foto">
                <img>
                <label for="foto" class="file-label">Escolher Imagem</label>
                <input id="foto" name="uploadData" type="file" accept="image/*">
            </div>
            <div>
                <span class="status margin-bottom-10px">Status Inicial do Ingrediente:</span>
                <div class="select-block">
                    <div class="switch_box">
                        <input type="checkbox" name="ativo" id="ativo" class="switch-styled" value="1">
                    </div>
                    <label for="ativo" class="padding-left-15px">Ativado/Desativado</label>
                </div>
                <div id="btn-save" data-form-submit>
                    <img src="../assets/images/cms/symbols/salvar.svg" alt="Salvar">
                    <span>Salvar</span>
                </div>
            </div>
        </div>
    </div>
    <input type="submit" name="submit" class="display-none">
</form>
<div id="list-content">
    <div id="page-actions">
        <a href="#" id="btn-adicionar-ingrediente">
            <img src="../assets/images/cms/symbols/adicionar.svg" alt="Adicionar">
            <span>Adicionar Ingrediente</span>
        </a>
        <a href="#" data-list-reload>
            <img src="../assets/images/cms/symbols/recarregar.svg" alt="Recarregar">
            <span>Recarregar Listagem</span>
        </a>
    </div>
    <div id="tabela-items" data-crud-list>
        <div class="linha">
            <div class="coluna image-small">Imagem</div>
            <div class="coluna medium">Título</div>
            <div class="coluna medium">Categoria</div>
            <div class="coluna large">Descrição</div>
            <div class="coluna medium">Preço</div>
            <div class="coluna">Opções</div>
        </div>
    </div>
    <div data-crud-template>
        <div class="linha" data-param-id="${id}">
            <div class="coluna image-small">
                <img src="../${foto}" alt="${titulo}">
            </div>
            <div class="coluna middle-align medium"><span>${titulo}</span></div>
            <div class="coluna middle-align medium"><span>${categoria.titulo}</span></div>
            <div class="coluna descricao large">
                <div>
                    ${removeHtml(descricao)}
                </div>
            </div>
            <div class="coluna middle-align medium">
                <span>R$ ${moneyFormat(preco)}</span>
            </div>
            <div class="coluna">
                <span class="toggle ${checkBoolean(ativo) ? 'desativar' : 'ativar'}"></span><hr>
                <span class="editar"></span><hr>
                <span class="excluir"></span>
            </div>
        </div>
    </div>
</div>
