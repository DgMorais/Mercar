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
                            <li> <a href="#requests" data-bs-toggle="tab" class="nav-link" onclick="alteraUrl('requests')">Pedidos</a></li>
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
                                                            <?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'Stores', 'action' => 'view', $store->id],
                                                                [
                                                                    'id' => 'view-icon',
                                                                    'escape'=>false,
                                                                    'class'=>'btn-lg py-0',
                                                                    'data-placement'=>'top',
                                                                    'data-toggle'=>'popover',
                                                                    'data-trigger' => 'hover',
                                                                    'data-content'=> 'Ver'
                                                                ]
                                                            ) ?>
                                                            <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'Stores', 'action' => 'edit', $store->id], 
                                                                [
                                                                    'id' => 'edit-icon',
                                                                    'escape'=>false,
                                                                    'class'=>'btn-lg py-0',
                                                                    'data-placement'=>'top',
                                                                    'data-toggle'=>'popover',
                                                                    'data-content'=> 'Editar'
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
                        <div class="tab-pane fade" id="requests">
                            <h4>Pedidos</h4>
                            <div class="table_page table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><?= $this->Paginator->sort('id', 'N.º') ?></th>
                                            <th><?= $this->Paginator->sort('liberado', 'Status') ?></th>
                                            <th><?= $this->Paginator->sort('valor', 'Valor') ?></th>
                                            <th><?= $this->Paginator->sort('created', 'Data do pedido') ?></th>
                                            <th class="actions"><?= __('Ações') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($requests as $request) : ?>
                                            <tr>
                                                <td><?= $request->id ?></td>
                                                <td><?= $request->liberado ? 'Pago' : 'Pagamento pendente' ?></td>
                                                <td>R$ <?= number_format($request->valor, 2, ',', '.') ?></td>
                                                <td><?= $request->created ?></td>
                                                <td>
                                                    <div class="d-flex justify-content-center align-items-center mt-1">
                                                        <button href="#" class="view-sale btn btn-link" data-toggle="modal" onclick="seeRequest(<?= $request->id ?>)" data-target=".bd-example-modal-xl">Ver pedido</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <div class="paginator">
                                        <ul class="pagination" style="justify-content: center;">
                                            <?= $this->Paginator->first('<< ' . __('first')) ?>
                                            <?= $this->Paginator->prev('< ' . __('previous')) ?>
                                            <?= $this->Paginator->numbers() ?>
                                            <?= $this->Paginator->next(__('next') . ' >') ?>
                                            <?= $this->Paginator->last(__('last') . ' >>') ?>
                                        </ul>
                                        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, exibindo {{current}} registro(s) de um total de {{count}}')) ?></p>
                                    </div>
                                </div>
                            </div>
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
        } else if (url.match(regex) == '?requests') {
            $("#account-details").removeClass("show active");
            $("#requests").addClass("show active");
            $("a[href='#account-details']").removeClass("active");
            $("a[href='#requests']").addClass("active");
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
        let request = <?= json_encode($requests) ?>;
        if (request != null) {
            $.each(request, function(index, value) {
                if (value.id == request_id) {
                    $('.modal-title').html('');
                    $('.modal-title').html('Pedido Número #' + value.id);

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
                                                <th>Produto</th>\
                                                <th>Quantidade</th>\
                                                <th>Valor</th>\
                                                <th>Status</th>\
                                            </tr>\
                                        </thead>'
                    table_products.append(thead_products);
                    let tbody_products = $('<tbody />');
                    
                    let tr_tbody_product = `\<tr>\
                                                <td>images</td>\
                                                <td>${value.product.nome}</td>\
                                                <td class="py-4">1</td>\
                                                <td class="py-4">${(parseFloat(value.valor)).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}</td>\
                                                ${value.liberado ? '<td class="py-4">Pago</td>' : '<td>Pagamento pendente</td>'}\
                                            </tr>`;
                    tbody_products.append(tr_tbody_product);

                    let div_sales_data = $('<div />', {
                        class: 'd-flex justify-content-between'
                    })
                    let div_cupom = $('<div />', {
                        class: 'border rounded col-4 p-3'
                    })
                    if (value.sale.cupom_id != null) {
                        var has_cupom = true;
                        if (value.sale.cupon.tipo_desconto == 1) {
                            var desconto = value.sale.cupon.valor_real
                            var valor_desconto = (value.valor - value.cupon.valor_real)
                        } else {
                            var desconto = `${value.sale.cupon.valor_porcentagem}%`
                            var valor_desconto = ((value.sale.cupon.valor_porcentagem/100) * value.valor)
                        }
                        let div_interna_cupom = `<div class="text-center">
                                                    <h6 class="text-center"><strong>Cupom</strong></h6><hr>
                                                    <p><strong>Código do cupom utilizado</strong></p>
                                                    <p class="text-danger">${value.sale.cupon.codigo}</p>
                                                    <p><strong>Desconto aplicado:</strong> ${desconto}</p>
                                                </div>`;
                        div_cupom.append(div_interna_cupom);
                        div_sales_data.append(div_cupom);
                    }
                    let valor_parcelas = (value.sale.valor_final/value.sale.parcelas)
                    let div_sale_values = $('<div />', {
                        class: 'border rounded col-7 p-3'
                    })
                    let div_interna_sale_values = `<div class="text-center col-12">
                                                        <h6 class="text-center"><strong>Dados da compra</strong></h6><hr>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="text-center col-6" style="border-right: 1px solid #DCDCDC;">
                                                                <p><strong>Parcelas:</strong> ${value.sale.parcelas} x  ${valor_parcelas.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})} </p>
                                                                <p><strong>Status:</strong> ${value.liberado ? 'Pago' : 'Pagamento pendente'} </p>
                                                            </div>
                                                            <div class="text-center col-6">
                                                                <p><strong>Subtotal:</strong> ${(parseFloat(value.valor)).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}</p>
                                                                ${has_cupom ? `<p class="text-danger"><strong>Desconto:</strong> - ${(parseFloat(valor_desconto)).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}</p>` : '' }
                                                                <p><strong>Total:</strong> ${(parseFloat(value.sale.valor_final)).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}</p>
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
