<?= $this->Html->css(
    [
        'datepicker/bootstrap-datepicker.min.css',
        'datepicker/bootstrap-datepicker.css.map',
        'datepicker/bootstrap-datepicker.standalone.min.css',
        'datepicker/bootstrap-datepicker.standalone.css.map',
        'datepicker/bootstrap-datepicker3.min.css',
        'datepicker/bootstrap-datepicker3.css.map',
        'datepicker/bootstrap-datepicker.standalone3.min.css',
        'datepicker/bootstrap-datepicker.standalone3.css.map',
    ]
) ?>
<style>
    .cadastro-endereco {
        width: 100% !important;
        background-color: #3A3A3A !important;
        border-radius: 10px;
        color: white !important;
    }
    .cadastro-endereco:hover {
        background-color: #266BF9 !important;
        color: black !important;
    }
    .view-sale {
        color: #266BF9;
        text-decoration: none;
    }
    .view-store {
        color: #266BF9;
        text-decoration: none;
    }
    .view-store:hover {
        color: #19DDFD;
    }
    @media (min-width : 576px)
    {
        .table_page {
            overflow-x: scroll;
        }
    }
    @media (min-width : 1250px)
    {
        .table_page {
            overflow-x: hidden;
        }
        ::-webkit-scrollbar {
            display: none;
        }
        .modal-xl {
            min-width: 1250px !important;
        }
    }
</style>
<div class="main-wrapper">
    <!-- account area start -->
    <div class="account-dashboard pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-3 py-0">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#account-details" data-bs-toggle="tab" class="nav-link active" onclick="alteraUrl('')">Detalhes da Conta</a></li>
                            <li><a href="#stores" data-bs-toggle="tab" class="nav-link" onclick="alteraUrl('stores')">Minhas Lojas</a></li>
                            <li> <a href="#orders" data-bs-toggle="tab" class="nav-link" onclick="alteraUrl('orders')">Vendas</a></li>
                            <li> <a href="#orders" data-bs-toggle="tab" class="nav-link" onclick="alteraUrl('requests')">Pedidos</a></li>
                            </li>
                            <li>
                                <?= $this->Html->link('Logout',
                                    '/logout',
                                    [
                                        'class' => 'nav-link'
                                    ]
                                ) ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-9 px-0">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                        <div class="tab-pane fade show active" id="account-details">
                            <h4>Detalhes da Conta</h4>
                            <p>Do painel da sua conta. você pode facilmente verificar &amp; visualizar seus <strong>pedidos</strong>, gerenciar seus <strong>endereços</strong> e cobrança e <strong>editar sua senha e detalhes da conta</strong>.</p>
                            <?= $this->Form->create($user,
                                [
                                    'url' => ['controller' => 'Users', 'action' => 'edit', 'prefix' => 'client']
                                ]
                            ); ?>
                                <div class="default-form-box mb-20">
                                    <label>Email</label>
                                    <?= $this->Form->control('email',
                                        [
                                            'label' => false,
                                            'class' => 'form-control',
                                            'type' => 'email',
                                            'placeholder' => __('Email'),
                                            'aria-label' => __('Email'),
                                            'required' => true
                                        ]
                                    ); ?>
                                </div>
                                <div class="default-form-box mb-20">
                                    <label>Password</label>
                                    <?= $this->Form->control('new-password',
                                        [
                                            'label' => false,
                                            'class' => 'form-control',
                                            'type' => 'password',
                                            'placeholder' => __('Password'),
                                            'aria-label' => __('Password'),
                                            'required' => true
                                        ]
                                    ); ?>
                                </div>
                                <hr>
                                <div class="default-form-box mb-20">
                                    <label>Nome</label>
                                    <?= $this->Form->control('nome',
                                        [
                                            'label' => false,
                                            'class' => 'form-control',
                                            'type' => 'text',
                                            'placeholder' => __('Nome'),
                                            'aria-label' => __('Nome'),
                                            'required' => true
                                        ]
                                    ); ?>
                                </div>
                                <div class="default-form-box mb-20">
                                    <label>Sobrenome</label>
                                    <?= $this->Form->control('sobrenome',
                                        [
                                            'label' => false,
                                            'type' => 'text',
                                            'class' => 'form-control',
                                            'placeholder' => __('Sobrenome'),
                                            'aria-label' => __('Sobrenome'),
                                            'required' => true
                                        ]
                                    ); ?>
                                </div>
                                <div class="default-form-box mb-20">
                                    <label>Data de Nascimento</label>
                                    <?= $this->Form->control('data_nascimento',
                                        [
                                            'label' => false,
                                            'type' => 'text',
                                            'id' => 'data_nascimento',
                                            'class' => 'form-control',
                                            'placeholder' => __('Data de Nascimento'),
                                            'aria-label' => __('Data de Nascimento'),
                                            'required' => true
                                        ]
                                    ); ?>
                                </div>
                                <div class="default-form-box mb-20">
                                    <label>CPF</label>
                                    <?= $this->Form->control('cpf',
                                        [
                                            'label' => false,
                                            'type' => 'text',
                                            'class' => 'form-control',
                                            'placeholder' => __('CPF'),
                                            'aria-label' => __('CPF'),
                                            'required' => true
                                        ]
                                    ); ?>
                                </div>
                                <div class="default-form-box mb-20">
                                    <label>Gênero</label>
                                    <?= $this->Form->control('genero',
                                        [
                                            'label' => false,
                                            'type' => 'select',
                                            'class' => 'form-control',
                                            'placeholder' => __('Gênero'),
                                            'aria-label' => __('Gênero'),
                                            'required' => true,
                                            'empty' => "Selecione...",
                                            'options' => [
                                                'masculino' => "Masculino",
                                                'feminino' => "Feminino"
                                            ]
                                        ]
                                    ); ?>
                                </div>
                                <div class="default-form-box mb-20">
                                    <label>Telefone</label>
                                    <?= $this->Form->control('telefone',
                                        [
                                            'label' => false,
                                            'type' => 'text',
                                            'class' => 'form-control',
                                            'placeholder' => __('Telefone'),
                                            'aria-label' => __('Telefone'),
                                        ]
                                    ); ?>
                                </div>
                                <div class="default-form-box mb-20">
                                    <label>Celular</label>
                                    <?= $this->Form->control('celular',
                                        [
                                            'label' => false,
                                            'type' => 'text',
                                            'class' => 'form-control',
                                            'placeholder' => __('Celular'),
                                            'aria-label' => __('Celular'),
                                            'required' => true
                                        ]
                                    ); ?>
                                </div>
                                <label class="checkbox-default" for="offer">
                                    <input type="checkbox" id="offer">
                                    <span>Receba ofertas de nossos parceiros</span>
                                </label>
                                <br>
                                <label class="checkbox-default checkbox-default-more-text" for="newsletter">
                                    <input type="checkbox" id="newsletter">
                                    <span>Inscreva-se em nosso newsletter<br><em>Você pode cancelar a inscrição a
                                        qualquer momento. Para isso, por favor, encontre nossas informações de contato no.</em></span>
                                </label>
                                <div class="save_button mt-4 rounded">
                                    <?= $this->Form->button(__('Salvar'),
                                        [
                                            'submitButton' => 'true',
                                            'message-redirect' => __('Aguarde...') . ' <i class="fas fa-spinner fa-pulse"></i>',
                                            'escape' => true,
                                            'class' => 'btn'
                                        ]
                                    ); ?>
                                </div>
                            <?= $this->Form->end(); ?>
                        </div>
                        <div class="tab-pane fade" id="stores">
                            <div class="row">
                                <div class="col-9">
                                    <h4>Minhas Lojas</h4>
                                </div>
                                <div class="col-3">
                                    <?= $this->Html->link('Nova Loja',
                                        [
                                            'prefix' => $user_logged->group_name,
                                            'controller' => 'Stores',
                                            'action' => 'newStore'
                                        ],
                                        [
                                            'class' => 'btn btn-primary py-2'
                                        ]
                                    ) ?>
                                </div>
                            </div>
                            <div class="table_page table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>CNPJ</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($stores)) :  ?>
                                            <?php foreach($stores as $store) :  ?>
                                                <tr>
                                                    <td><?= $store->nome ?></td>
                                                    <td><?= $store->cnpj ? $store->cnpj : '-' ?></td>
                                                    <td><?= $store->status ? 'Ativa' : 'Desativada' ?></td>
                                                    <td>
                                                        <div class="d-flex justify-content-center align-items-center mt-1">
                                                            <?= $this->Html->link('Ver loja',
                                                                ['controller' => 'Stores', 'action' => 'view', $store->id],
                                                                [
                                                                    'class' => 'btn btn-link view-store'
                                                                ]
                                                            ) ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="orders">
                            <h4>Compras</h4>
                            <div class="table_page table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Compras</th>
                                            <th>Data da compra</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($user->sales as $sale) :  ?>
                                            <tr>
                                                <td><?= $sale->id ?></td>
                                                <td><?= $sale->created ?></td>
                                                <td><span class="success"><?= $sale->status_pagamento ?></span></td>
                                                <td>R$ <?= number_format($sale->valor_final, 2, ',', '.') ?></td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <button href="#" class="view-sale btn btn-link" data-toggle="modal" onclick="seeSale(<?= $sale->id ?>)" data-target=".bd-example-modal-xl">Ver</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade px-2" id="address">
                            <p>Os endereços a seguir também serão exibidos ​​na página de checkout.</p>
                            <?php if (!empty($endereco_padrao)): ?>
                                <h5 class="billing-address mb-3">Endereço Padrão</h5>
                                <p class="mb-2"><strong>Destinatario:</strong> <?= $endereco_padrao->destinatario ?></p>
                                <address class="mb-5">
                                    <span class="mb-1 d-inline-block"><strong>CEP:</strong> <?= $endereco_padrao->cep ?></span>
                                    <br>
                                    <span class="mb-1 d-inline-block"><strong>Rua:</strong> <?= $endereco_padrao->rua ?></span>
                                    <br>
                                    <span class="mb-1 d-inline-block"><strong>Número:</strong> <?= $endereco_padrao->numero ?></span>
                                    <br>
                                    <span class="mb-1 d-inline-block"><strong>Complemento:</strong> <?= $endereco_padrao->complemento ?></span>
                                    <br>
                                    <span class="mb-1 d-inline-block"><strong>Bairro:</strong> <?= $endereco_padrao->bairro ?></span>
                                    <br>
                                    <span class="mb-1 d-inline-block"><strong>Cidade:</strong> <?= $endereco_padrao->cidade ?></span>
                                    <br>
                                    <span class="mb-1 d-inline-block"><strong>Estado:</strong> <?= $endereco_padrao->estado ?></span>
                                </address>
                            <?php endif; ?>
                            <div class="row pb-2">
                                <h5 class="billing-address mb-3">Endereços Cadastrados</h5>                                    
                            </div>
                            <div class="table_page table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>CEP</th>
                                            <th>Rua</th>
                                            <th>Número</th>
                                            <th>Bairro</th>
                                            <th>Cidade</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($enderecos as $endereco) :?>
                                            <?= $this->Form->create(null,
                                                [
                                                    'url' => ['controller' => 'Users', 'action' => 'defineDefaultAddress', 'prefix' => 'client']
                                                ]
                                            ); ?>
                                                <tr>
                                                    <td class="px-0"><?= $endereco->cep ?></td>
                                                    <td class="px-0"><?= $endereco->rua ?></td>
                                                    <td class="px-0"><?= $endereco->numero ?></td>
                                                    <td class="px-0"><?= $endereco->bairro ?></td>
                                                    <td class="px-0"><?= $endereco->cidade ?></td>
                                                    <td class="px-0">
                                                        <?= $this->Form->control('id',
                                                            [
                                                                'label' => false,
                                                                'class' => 'd-none',
                                                                'value' => $endereco->id
                                                            ]
                                                        ) ?>
                                                        <?= $this->Form->button('Escolher',
                                                            [
                                                                'class' => 'btn-link',
                                                                'type' => 'submit'
                                                            ]
                                                        ) ?>
                                                    </td>
                                                </tr>
                                            <?= $this->Form->end() ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex flex-row-reverse">
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                    <a href="#add-address" data-bs-toggle="tab" class="btn btn-info p-2 p-md-2 text-nowrap cadastro-endereco nav-link">Cadastrar Endereço</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="add-address">
                            <h4>Cadastrar Endereço</h4>
                            <div class="d-flex justify-content-between">
                                <h5 class="billing-address mb-3">Endereços</h5>
                                <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
                                    <ul role="tablist" class="nav flex-column dashboard-list">
                                        <a href="#address" data-bs-toggle="tab" class="btn-warning cadastro-endereco nav-link">Voltar</a>
                                    </ul>
                                </div>
                            </div>
                            <?= $this->Form->create($add_endereco,
                                [
                                    'url' => ['controller' => 'Users', 'action' => 'addAddress', 'prefix' => 'client']
                                ]
                            ); ?>
                                <div class="default-form-box mb-20">
                                    <label>CEP</label>
                                    <?= $this->Form->control('cep',
                                        [
                                            'label' => false,
                                            'class' => 'form-control w-50',
                                            'type' => 'text',
                                            'placeholder' => __('CEP'),
                                            'aria-label' => __('CEP'),
                                            'required' => true
                                        ]
                                    ); ?>
                                </div>
                                <div class="default-form-box mb-20">
                                    <label>Rua</label>
                                    <?= $this->Form->control('rua',
                                        [
                                            'label' => false,
                                            'class' => 'form-control w-50',
                                            'type' => 'text',
                                            'placeholder' => __('Rua'),
                                            'aria-label' => __('Rua'),
                                            'required' => true
                                        ]
                                    ); ?>
                                </div>
                                <div class="default-form-box mb-20">
                                    <label>Número</label>
                                    <?= $this->Form->control('numero',
                                        [
                                            'label' => false,
                                            'type' => 'text',
                                            'class' => 'form-control w-50',
                                            'placeholder' => __('Número'),
                                            'aria-label' => __('Número'),
                                        ]
                                    ); ?>
                                </div>
                                <div class="default-form-box mb-20">
                                    <label>Complemento</label>
                                    <?= $this->Form->control('complemento',
                                        [
                                            'label' => false,
                                            'type' => 'text',
                                            'id' => 'data_nascimento',
                                            'class' => 'form-control w-50',
                                            'placeholder' => __('Complemento'),
                                            'aria-label' => __('Complemento'),
                                        ]
                                    ); ?>
                                </div>
                                <div class="default-form-box mb-20">
                                    <label>Bairro</label>
                                    <?= $this->Form->control('bairro',
                                        [
                                            'label' => false,
                                            'type' => 'text',
                                            'class' => 'form-control w-50',
                                            'placeholder' => __('Bairro'),
                                            'aria-label' => __('Bairro'),
                                            'required' => true
                                        ]
                                    ); ?>
                                </div>
                                <div class="default-form-box mb-20">
                                    <label>Cidade</label>
                                    <?= $this->Form->control('cidade',
                                        [
                                            'label' => false,
                                            'type' => 'text',
                                            'class' => 'form-control w-50',
                                            'placeholder' => __('Cidade'),
                                            'aria-label' => __('Cidade'),
                                        ]
                                    ); ?>
                                </div>
                                <div class="default-form-box mb-20">
                                    <label>Estado</label>
                                    <?= $this->Form->control('estado',
                                        [
                                            'label' => false,
                                            'type' => 'select',
                                            'class' => 'form-control w-50',
                                            'placeholder' => __('Estado'),
                                            'aria-label' => __('Estado'),
                                            'required' => true,
                                            'empty' => "Selecione...",
                                            'options' => [
                                                'RJ' => "RJ",
                                                'SP' => "SP"
                                            ]
                                        ]
                                    ); ?>
                                </div>
                                <div class="save_button mt-4 rounded">
                                    <?= $this->Form->button(__('Salvar'),
                                        [
                                            'submitButton' => 'true',
                                            'message-redirect' => __('Aguarde...') . ' <i class="fas fa-spinner fa-pulse"></i>',
                                            'escape' => true,
                                            'class' => 'btn'
                                        ]
                                    ); ?>
                                </div>
                            <?= $this->Form->end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- account area end -->
</div>
<div class="modal fade sale-modal-xl" tabindex="-1" role="dialog" aria-labelledby="modalSeeSale" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header p-2">
                <h5 class="modal-title"></h5>
                <button type="button" class="close close-modal" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-2"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger p-3 close-modal" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?= $this->Html->script(
    [
        '/js/plugins/datepicker/bootstrap-datepicker.min.js',
        '/js/plugins/datepicker/locale/bootstrap-datepicker.pt-BR.min.js'
    ]
)?>
<script>
    $(document).ready(function(){
        var url = "<?= $this->request->getRequestTarget() ?>";
        var regex = /\?.+/;
        if (url.match(regex) == '?stores') {
            $("#account-details").removeClass("show active");
            $("#stores").addClass("show active");
            $("a[href='#account-details']").removeClass("active");
            $("a[href='#stores']").addClass("active");
        } else if (url.match(regex) == '?orders') {
            $("#account-details").removeClass("show active");
            $("#orders").addClass("show active");
            $("a[href='#account-details']").removeClass("active");
            $("a[href='#orders']").addClass("active");
        }
        $("#data_nascimento").mask('00/00/0000');
        $("#cep").mask('00000-000');
        $("[name=cpf]").mask('000.000.000-00');
        $("[name=telefone]").mask('(00) 0000-0000');
        $("[name=celular]").mask('(00) 00000-0000');
        $('#data_nascimento').click(function () {
            $('#data_nascimento').datepicker({
                format: "dd/mm/yyyy",
                endDate: "today",
                clearBtn: true,
                language: "pt-BR",
                autoclose: true,
                todayHighlight: true
            });
        });
        $("#data_nascimento").blur(function () {
            $("#data_nascimento").val($("#data_nascimento").val());
            $("#data_nascimento").mask('00/00/0000');
        });
        $('.view-sale').on('click', function () {
            $('.bd-example-modal-xl').modal('show');
        })
    });

    function seeRequest(request_id) {
        let sale = <?= json_encode($user->sales) ?>;
        if (sale != null) {
            $.each(sale, function(index, value) {
                if (value.id == sale_id) {
                    $('.modal-title').html('');
                    $('.modal-title').html('Compra Número #' + value.id);

                    let body = $('.modal-body');
                    body.html('');
                    let div_products = $('<div />', {
                        class: 'p-3 table_page table-responsive'
                    })
                    let table_products = $('<table />', {
                        class: "table"
                    });
                    let thead_products = '<thead>\
                                            <tr>\
                                                <th></th>\
                                                <th>Nome</th>\
                                                <th>Descrição</th>\
                                                <th>Valor</th>\
                                                <th>Loja/Vendedor</th>\
                                            </tr>\
                                        </thead>'
                    table_products.append(thead_products);
                    let tbody_products = $('<tbody />');
                    
                    $.each(value.user_requests, function(i, element) {
                        if (element.product.store_id != null) {
                            var vendedor = element.product.store;
                        } else {
                            var vendedor = element.product.user
                        }
                        let tr_tbody_product = `\<tr>\
                                                    <td>${element.product.images}</td>\
                                                    <td>${element.product.nome}</td>\
                                                    <td>${element.product.descricao}</td>\
                                                    <td>${(parseFloat(element.valor)).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}</td>\
                                                    <td>${vendedor.nome}</td>\
                                                </tr>`;
                        tbody_products.append(tr_tbody_product);
                    })
                    let div_sales_data = $('<div />', {
                        class: 'd-flex justify-content-between'
                    })
                    let div_cupom = $('<div />', {
                        class: 'border rounded col-4 p-3'
                    })
                    if (value.cupom_id != null) {
                        var has_cupom = true;
                        if (value.cupon.tipo_desconto == 1) {
                            var desconto = value.cupon.valor_real
                            var valor_desconto = (value.valor - value.cupon.valor_real)
                        } else {
                            var desconto = `${value.cupon.valor_porcentagem}%`
                            var valor_desconto = ((value.cupon.valor_porcentagem/100) * value.valor)
                        }
                        let div_interna_cupom = `<div class="text-center">
                                                    <h6 class="text-center"><strong>Cupom</strong></h6><hr>
                                                    <p><strong>Código do cupom utilizado</strong></p>
                                                    <p class="text-danger">${value.cupon.codigo}</p>
                                                    <p><strong>Desconto aplicado:</strong> ${desconto}</p>
                                                </div>`;
                        div_cupom.append(div_interna_cupom);
                        div_sales_data.append(div_cupom);
                    }
                    let valor_parcelas = (value.valor_final/value.parcelas)
                    let div_sale_values = $('<div />', {
                        class: 'border rounded col-7 p-3'
                    })
                    let div_interna_sale_values = `<div class="text-center col-12">
                                                        <h6 class="text-center"><strong>Dados da compra</strong></h6><hr>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="text-center col-6" style="border-right: 1px solid #DCDCDC;">
                                                                <p><strong>Cartão:</strong> **** **** **** 1524</p>
                                                                <p><strong>Parcelas:</strong> ${value.parcelas} x  ${valor_parcelas.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})} </p>
                                                                <p><strong>Status:</strong> ${value.liberado ? 'Liberado' : 'Não liberado'} </p>
                                                            </div>
                                                            <div class="text-center col-6">
                                                                <p><strong>Subtotal:</strong> ${(parseFloat(value.valor)).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}</p>
                                                                ${has_cupom ? `<p class="text-danger"><strong>Desconto:</strong> - ${(parseFloat(valor_desconto)).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}</p>` : '' }
                                                                <p><strong>Total:</strong> ${(parseFloat(value.valor_final)).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}</p>
                                                            </div>
                                                        </div>
                                                    </div>`;
                    div_sale_values.append(div_interna_sale_values);

                    div_sales_data.append(div_sale_values);

                    table_products.append(tbody_products);
                    div_products.append(table_products);
                    div_products.append(div_sales_data);
                    body.append(div_products);
                }
            })
        }
        $('.sale-modal-xl').modal('show');
    }

    function alteraUrl(nova){
        var Url = window.location.pathname;
        if (nova == '') {
            window.history.pushState('', null, Url + `${nova}`);
        } else {
            window.history.pushState('', null, Url + `?${nova}`);
        }
    }
</script>
