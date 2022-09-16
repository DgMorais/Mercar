<style>
    .preview-logo-upload {
        width: 300px;
    }
</style>
<div class="main-wrapper">
    <div class="container my-3 p-2 border rounded">
        <h4 class="text-center text-primary"><strong>Nova loja</strong></h4>
        <hr>
        <?=$this->Form->create(null,
            [
                'url' => ['controller' => 'Stores', 'action' => 'newStore', 'prefix' => 'seller'],
            ]
        )?>
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="col-5 d-flex justify-content-center">
                        <img src="/img/store/store-icon-image.jpg" class="preview-logo-upload">
                    </div>
                    <div class="col-7 d-flex align-items-center">
                        <div>
                            <label class="text-primary">Carregue uma imagem ou logomarcar para sua loja</label>
                            <label for="logo" class="m-0 text-primary input-logo"><strong>Escolher arquivo</strong></label>
                            <?=$this->Form->control('logo',
                                [
                                    'label' => false,
                                    'class' => 'form-control d-none',
                                    'type' => 'file',
                                    'placeholder' => __('Logo'),
                                    'aria-label' => __('Logo'),
                                    'required' => false,
                                ]
                            );?>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <label class="m-0 text-primary"><small>Nome da loja</small></label>
                    <?=$this->Form->control('nome',
                        [
                            'label' => false,
                            'class' => 'form-control',
                            'type' => 'text',
                            'placeholder' => __('Nome da Loja'),
                            'aria-label' => __('Nome'),
                            'required' => true,
                        ]
                    );?>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label class="m-0 text-primary"><small>CNPJ</small></label>
                    <?=$this->Form->control('cnpj',
                        [
                            'label' => false,
                            'class' => 'form-control',
                            'type' => 'text',
                            'placeholder' => __('CNPJ'),
                            'aria-label' => __('CNPJ'),
                        ]
                    );?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label class="m-0 text-primary"><small>Descrição</small></label>
                    <?=$this->Form->control('descricao',
                        [
                            'label' => false,
                            'class' => 'form-control',
                            'type' => 'textarea',
                            'style' => 'resize: none;',
                            'placeholder' => __('Descrição'),
                            'aria-label' => __('Descrição'),
                            'required' => false,
                        ]
                    );?>
                </div>
            </div>
            <div class="row">
                <div class="col-4 m-0">
                    <label class="m-0 text-primary"><small>Cep</small></label>
                    <div class="d-flex">
                        <?=$this->Form->control('cep',
                            [
                                'label' => false,
                                'class' => 'form-control',
                                'type' => 'text',
                                'placeholder' => __('CEP'),
                                'aria-label' => __('CEP'),
                                'required' => true,
                            ]
                        );?>
                        <button id="btn-cep" class="btn btn-primary px-3 mx-2">Buscar</button>
                    </div>
                </div>
                <div class="col-8 m-0">
                    <label class="m-0 text-primary"><small>Endereço</small></label>
                    <?=$this->Form->control('endereco',
                        [
                            'label' => false,
                            'class' => 'form-control',
                            'type' => 'text',
                            'placeholder' => __('Endereço'),
                            'aria-label' => __('Endereço'),
                            'required' => true,
                        ]
                    );?>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <label class="m-0 text-primary"><small>Número</small></label>
                    <?=$this->Form->control('numero',
                        [
                            'label' => false,
                            'class' => 'form-control px-2',
                            'type' => 'text',
                            'placeholder' => __('Número'),
                            'aria-label' => __('Número'),
                        ]
                    );?>
                </div>
                <div class="col-2">
                    <label class="m-0 text-primary"><small>Complemento</small></label>
                    <?=$this->Form->control('complemento',
                        [
                            'label' => false,
                            'class' => 'form-control px-2',
                            'type' => 'text',
                            'placeholder' => __('Complemento'),
                            'aria-label' => __('Complemento'),
                        ]
                    );?>
                </div>
                <div class="col-3">
                    <label class="m-0 text-primary"><small>Bairro</small></label>
                    <?=$this->Form->control('bairro',
                        [
                            'label' => false,
                            'class' => 'form-control',
                            'type' => 'text',
                            'placeholder' => __('Bairro'),
                            'aria-label' => __('Bairro'),
                            'required' => true,
                        ]
                    );?>
                </div>
                <div class="col-3">
                    <label class="m-0 text-primary"><small>Cidade</small></label>
                    <?=$this->Form->control('cidade',
                        [
                            'label' => false,
                            'class' => 'form-control',
                            'type' => 'text',
                            'placeholder' => __('Cidade'),
                            'aria-label' => __('Cidade'),
                            'required' => true,
                        ]
                    );?>
                </div>
                <div class="col-2">
                    <label class="m-0 text-primary"><small>Estado</small></label>
                    <?=$this->Form->select('estado',
                        [
                            'RJ' => "RJ",
                            'SP' => "SP",
                        ],
                        [
                            'label' => false,
                            'type' => 'select',
                            'class' => 'form-control px-1',
                            'placeholder' => __('Estado'),
                            'aria-label' => __('Estado'),
                            'required' => true,
                            'empty' => "Selecione...",
                        ]
                    );?>
                </div>
            </div><hr>
            <div class="row d-flex justify-content-between   my-3">
                <div class="col-6">
                    <?=$this->Html->link('Cancelar',
                        [
                            'controller' => 'Users',
                            'action' => 'myAccount',
                            'prefix' => 'seller',
                        ],
                        [
                            'type' => 'submit',
                            'class' => 'btn btn-danger w-50 px-4 py-3',
                        ]
                    );?>
                </div>
                <div class="col-6 d-flex flex-row-reverse">
                    <?=$this->Form->button('Salvar',
                        [
                            'type' => 'submit',
                            'class' => 'btn btn-primary w-50 px-4 py-3',
                        ]
                    );?>
                </div>
            </div>
        <?=$this->Form->end()?>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#cep").mask('00000-000');
        $("#cnpj").mask('00.000.000/0000-00');

        var validacep = /^[0-9]{8}$/;

        $('#btn-cep').on('click', function(e) {
            e.preventDefault();
            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#endereco").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#estado").val("");
            }

            if (cep != '') {
                var cep = $('#cep').val();
                cep = cep.replace(/\D/g, '');

                var validacep = /^[0-9]{8}$/;

                if(validacep.test(cep)) {
                    $("#endereco").val("...");
                    $("#bairro").val("...");
                    $("#cidade").val("...");
                    $("#estado").val("...");

                    $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#endereco   ").val(dados.logradouro);
                            $("#bairro").val(dados.bairro);
                            $("#cidade").val(dados.localidade);
                            $('[name=estado]').each(function (index, element) {
                                var select_option = 0;
                                var options = $(this).find('option');
                                options.each(function(index, element_option) {
                                    if (dados.uf == element_option.value) {
                                        select_option = index;
                                    }
                                })
                                this.selectedIndex = select_option;
                                $("[name='estado']").change();
                            });
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

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                $(input).next()
                .attr('src', e.target.result)
            };
            reader.readAsDataURL(input.files[0]);
            }
            else {
                var img = input.value;
                $(input).next().attr('src',img);
            }
        }

        document.querySelector('#logo').addEventListener('change', function (e) {
            var fileName = document.getElementById('logo').files[0].name;
            $('.preview-logo-upload').prop('src', fileName);
            $('.preview-logo-upload').removeClass('d-none');
        });
    });
</script>