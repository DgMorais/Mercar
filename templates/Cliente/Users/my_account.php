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
</style>

<div class="main-wrapper">
    <!-- account area start -->
    <div class="account-dashboard pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3 py-0">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#account-details" data-bs-toggle="tab" class="nav-link active" onclick="alteraUrl('')">Detalhes da Conta</a></li>
                            <li> <a href="#orders" data-bs-toggle="tab" class="nav-link" onclick="alteraUrl('orders')">Compras</a></li>
                            <li><a href="#address" data-bs-toggle="tab" class="nav-link" onclick="alteraUrl('address')">Endereços</a></li>
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
                <div class="col-sm-12 col-md-9 col-lg-9 px-0">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                        <div class="tab-pane fade show active" id="account-details">
                            <h4>Detalhes da Conta</h4>
                            <p>Do painel da sua conta. você pode facilmente verificar &amp; visualizar seus <strong>pedidos</strong>, gerenciar seus <strong>endereços</strong> e cobrança e <strong>editar sua senha e detalhes da conta</strong>.</p>
                            <?= $this->Form->create($user,
                                [
                                    'url' => ['controller' => 'Users', 'action' => 'edit', 'prefix' => 'cliente']
                                ]
                            ); ?>
                                <div class="default-form-box mb-20">
                                    <label>Email</label>
                                    <?= $this->Form->control('email',
                                        [
                                            'label' => false,
                                            'class' => 'form-control w-50',
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
                                            'class' => 'form-control w-50',
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
                                            'class' => 'form-control w-50',
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
                                            'class' => 'form-control w-50',
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
                                            'class' => 'form-control w-50',
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
                                            'class' => 'form-control w-50',
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
                                            'class' => 'form-control w-50',
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
                                            'class' => 'form-control w-50',
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
                                            'class' => 'form-control w-50',
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
                        <div class="tab-pane fade" id="orders">
                            <h4>Compras</h4>
                            <div class="table_page table-responsive">
                                <table>
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
                                                        <button href="#" class="view-sale btn btn-link">Ver</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="address">
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
                                <div class="d-flex justify-content-between">
                                    <h5 class="billing-address mb-3">Endereços</h5>
                                    <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
                                        <ul role="tablist" class="nav flex-column dashboard-list">
                                            <a href="#add-address" data-bs-toggle="tab" class="btn-info cadastro-endereco nav-link">Cadastrar Endereço</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="table_page table-responsive overflow-hidden">
                                <table>
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
                                                    'url' => ['controller' => 'Users', 'action' => 'defineDefaultAddress', 'prefix' => 'cliente']
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
                                    'url' => ['controller' => 'Users', 'action' => 'addAddress', 'prefix' => 'cliente']
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
        if (url.match(regex) == '?address') {
            $("#account-details").removeClass("show active");
            $("#address").addClass("show active");
            $("a[href='#account-details']").removeClass("active");
            $("a[href='#address']").addClass("active");
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
    });

    function alteraUrl(nova){
        var Url = window.location.pathname;
        if (nova == '') {
            window.history.pushState('', null, Url + `${nova}`);
        } else {
            window.history.pushState('', null, Url + `?${nova}`);
        }
    }
</script>
