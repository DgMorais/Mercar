<style>
    #checkEnderecoPadrao {
        height: 2em !important;
    }
</style>
<?php if (isset($default_address)) : ?>
    <div class="container my-4 p-0 border rounded p-2">
        <div class="border-bottom mb-3 text-center">
            <h4>Endereço padrão para entrega</h4>
        </div>
        <form method="post" action="/address-checkout?selected-address=true">
            <div class="col-md-12 d-flex justify-content-center flex-nowrap">
                <div class="card mx-2" style="width: 55%;">
                    <div class="card-body">
                        <input type="text" value="<?= $default_address->id ?>" name="id" class="d-none selected-address" disabled>
                        <p class="card-text"><strong><?= $default_address->destinatario ?></strong></p><hr>
                        <p class="card-text"><?= $default_address->cep .' - ' . $default_address->rua . (empty($default_address->numero) ? '' :  ', ' . $default_address->numero) . ', ' . $default_address->bairro . ' - ' . $default_address->cidade . '/' . $default_address->estado?></p>
                    </div>
                    <button class="btn btn-primary py-2 link-checkout m-2" type="submit">Usar endereço padrão</button>
                </div>
            </div>
        </form>
        <div class="container px-0 my-3">
            <button class="btn btn-primary w-100 py-2" type="button" id="choose-other-address">Escolher outro endereço</button>
        </div>
    </div>
<?php endif; ?>
<div class="other-address">
    <?php if (isset($user_address)) : ?>
        <div class="container my-4 p-0 border rounded p-2">
            <div class="border-bottom mb-3 text-center">
                <h4>Selecione um endereço   </h4>
            </div>
            <div class="col-md-12 d-flex flex-row justify-content-center flex-wrap px-2">
                <?php foreach ($user_address as $address) : ?>
                    <?php if ($address->id != $default_address->id) : ?>
                        <form method="post" action="/address-checkout?selected-address=true">
                            <div class="card mx-2 my-2" style="width: 18rem;">
                                <div class="card-body">
                                    <input type="text" value="<?= $address->id ?>" name="id" class="d-none selected-address" disabled>
                                    <p class="card-text"><strong><?= $address->destinatario ?></strong></p><hr>
                                    <p class="card-text"><?= $address->rua . (empty($address->numero) ? '' :  ', ' . $address->numero) ?></p>
                                    <p class="card-text"><?= $address->bairro ?></p>
                                    <p class="card-text"><?= $address->cidade . ' - ' . $address->estado ?></p>
                                    <p class="card-text"><?= $address->cep ?></p>
                                    <button class="btn btn-primary w-100 py-2 link-checkout" type="submit">Selecionar</button>
                                </div>
                            </div>
                        </form>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-danger my-3 py-2 px-4" id="cancel-choose-address">Cancelar</button>
            </div>
        </div>
    <?php else: ?>
            <div class="container my-4 p-0">
                <div class="card p-4 text-center">
                    <h4 class="m-0">Você não possui endereços cadastrados!</h4>
                    <p class="m-0">Você pode cadastrar um abaixo ou ir em seu perfil e cadastrar um novo endereço.</p>
                </div>
            </div>
    <?php endif; ?>
</div>
<div class="container px-0 my-3">
    <button class="btn btn-primary w-100 py-2" type="button" id="add-new-address">Cadastrar novo endereço</button>
</div>
<div class="container border rounded my-4 px-4 new-address">
    <h3 class="text-center m-3">Cadastrar novo endereço</h3><hr>
    <?= $this->Form->create(null,
        [
            'url' => ['action' => 'addressCheckout']
        ]
    ); ?>
        <div class="form-row d-flex justify-content-center">
            <div class="form-group col-md-5 px-2">
                <label for="inputNome" class="m-0">Nome</label>
                <?= $this->Form->control('nome',
                    [
                        'label' => false,
                        'class' => 'form-control w-100',
                        'type' => 'text',
                        'id' => 'inputNome',
                        'placeholder' => __('Nome'),
                        'aria-label' => __('Nome'),
                        'required' => true
                    ]
                ); ?>
            </div>
            <div class="form-group col-md-5 px-2">
                <label for="inputSobrenome" class="m-0">Sobrenome</label>
                <?= $this->Form->control('sobrenome',
                    [
                        'label' => false,
                        'class' => 'form-control w-100',
                        'type' => 'text',
                        'id' => 'inputSobrenome',
                        'placeholder' => __('Sobrenome'),
                        'aria-label' => __('Sobrenome'),
                        'required' => true
                    ]
                ); ?>
            </div>
        </div><hr>
        <div class="form-row d-flex justify-content-between">
            <div class="form-group d-flex align-items-end col-md-4">
                <div>
                    <label for="inputCep" class="m-0">CEP</label>
                    <?= $this->Form->control('cep',
                        [
                            'label' => false,
                            'class' => 'form-control w-100',
                            'type' => 'text',
                            'id' => 'inputCep',
                            'placeholder' => __('CEP'),
                            'aria-label' => __('CEP'),
                            'required' => true
                        ]
                    ); ?>
                </div>
                <?= $this->Form->button('Buscar CEP',
                    [
                        'class' => 'btn btn-sm btn-primary py-2 px-4 text-nowrap h-50',
                        'id' => 'btn-cep'
                    ]
                ); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="inputCidade" class="m-0">Cidade</label>
                <?= $this->Form->control('cidade',
                    [
                        'label' => false,
                        'class' => 'form-control w-100',
                        'type' => 'text',
                        'id' => 'inputCidade',
                        'placeholder' => __('Cidade'),
                        'aria-label' => __('Cidade'),
                        'required' => true
                    ]
                ); ?>
            </div>
            <div class="form-group col-md-3">
                <label for="inputEstado" class="m-0">Estado</label>
                <?php $options = ['AC' => 'Acre', 'AL' => 'Alagoas', 'AP' => 'Amapá', 'AM' => 'Amazonas', 'BA' => 'Bahia', 'CE' => 'Ceará', 'DF' => 'Distrito Federal', 'ES' => 'Espírito Santo', 'GO' => 'Goiás', 'MA' => 'Maranhão', 'MT' => 'Mato Grosso', 'MS' => 'Mato Grosso do Sul', 'MG' => 'Minas Gerais', 'PA' => 'Pará', 'PB' => 'Paraíba', 'PR' => 'Paraná', 'PE' => 'Pernambuco', 'PI' => 'Piauí', 'RJ' => 'Rio de Janeiro', 'RN' => 'Rio Grande do Norte', 'RS' => 'Rio Grande do Sul', 'RO' => 'Rondônia', 'RR' => 'Roraima', 'SC' => 'Santa Catarina', 'SP' => 'São Paulo', 'SE' => 'Sergipe', 'TO' => 'Tocantins']; ?>
                <?= $this->Form->select('estado',
                    $options,
                    [
                        'label' => false,
                        'class' => 'form-control w-100',
                        'empty' => 'Escolha...',
                        'id' => 'inputEstado',
                        'placeholder' => __('Estado'),
                        'aria-label' => __('Estado'),
                        'required' => true
                    ]
                ); ?>
            </div>
        </div>  
        <div class="form-group my-2">
            <label for="inputEndereco" class="m-0">Endereço</label>
                <?= $this->Form->control('rua',
                    [
                        'label' => false,
                        'class' => 'form-control w-100',
                        'type' => 'text',
                        'id' => 'inputEndereco',
                        'placeholder' => __('Endereço'),
                        'aria-label' => __('Endereço'),
                        'required' => true
                    ]
                ); ?>
        </div>
        <div class="d-flex justify-content-between my-2">
            <div class="form-group col-md-2">
                <label for="inputNumero" class="m-0">Número</label>
                <?= $this->Form->control('numero',
                    [
                        'label' => false,
                        'class' => 'form-control w-100',
                        'type' => 'text',
                        'id' => 'inputNumero',
                        'placeholder' => __('Número'),
                        'aria-label' => __('Número')
                    ]
                ); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="inputBairro" class="m-0">Bairro</label>
                <?= $this->Form->control('bairro',
                    [
                        'label' => false,
                        'class' => 'form-control w-100',
                        'type' => 'text',
                        'id' => 'inputBairro',
                        'placeholder' => __('Bairro'),
                        'aria-label' => __('Bairro'),
                        'required' => true
                    ]
                ); ?>
            </div>
            <div class="form-group col-md-3">
                <label for="inputComplemento" class="m-0">Complemento</label>
                <?= $this->Form->control('complemento',
                    [
                        'label' => false,
                        'class' => 'form-control w-100',
                        'type' => 'text',
                        'id' => 'inputComplemento',
                        'placeholder' => __('Complemento'),
                        'aria-label' => __('Complemento')
                    ]
                ); ?>
            </div>
        </div>
        <div class="d-flex align-content-center form-group col-md-6 mt-3">
            <?= $this->Form->control('endereco_padrao',
                [
                    'label' => false,
                    'class' => 'form-check-input m-0',
                    'type' => 'checkbox',
                    'id' => 'checkEnderecoPadrao'
                ]
            ); ?>
            <label for="checkEnderecoPadrao" class="form-check-label px-2 m-0">Salvar este enderço como padrão da sua conta</label>
        </div>
        <div class="d-flex justify-content-between">
            <?= $this->Form->button('Salvar e Avançar',
                [
                    'type' => 'submit',
                    'class' => 'btn btn-primary my-3 py-2 px-4'
                ]
            ); ?>
            <?= $this->Form->button('Cancelar',
                [
                    'type' => 'button',
                    'class' => 'btn btn-danger my-3 py-2 px-4',
                    'id' => 'cancel-add-address'
                ]
            ); ?>
        </div>
    <?php $this->Form->end() ?>
</div>
<script>
    $(document).ready(function() {
        $(".new-address").hide();
        $(".other-address").hide();
        $("#inputCep").mask('00000-000');

        $("#add-new-address").click(function (e) {
            e.preventDefault();
            $(".new-address").toggle("slow");
        })
        
        $("#choose-other-address").click(function (e) {
            e.preventDefault();
            $(".other-address").toggle("slow");
        })

        $("#cancel-add-address").click(function (e) {
            e.preventDefault();
            $(".new-address").hide(1000);
        })

        $("#cancel-choose-address").click(function (e) {
            e.preventDefault();
            $(".other-address").hide(1000);
        })

        var validacep = /^[0-9]{8}$/;

        $('.link-checkout').click(function (e) {
            $('.selected-address').prop("disabled", false);
        })

        $('#btn-cep').on('click', function(e) {
            e.preventDefault();
            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#inputEndereco").val("");
                $("#inputBairro").val("");
                $("#inputCidade").val("");
                $("#inputEstado").val("");
            }

            if (cep != '') {
                var cep = $('#inputCep').val();
                cep = cep.replace(/\D/g, '');

                var validacep = /^[0-9]{8}$/;

                if(validacep.test(cep)) {
                    $("#inputEndereco").val("...");
                    $("#inputBairro").val("...");
                    $("#inputCidade").val("...");
                    $("#inputEstado").val("...");

                    $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#inputEndereco   ").val(dados.logradouro);
                            $("#inputBairro").val(dados.bairro);
                            $("#inputCidade").val(dados.localidade);
                            $("#inputEstado").val(dados.uf);
                        } 
                        else {
                            //CEP pesquisado não foi encontrado.
                            limpa_formulário_cep();
                            alert("CEP não encontrado.");
                        }
                    });
                }
            }
        })
    });
</script>