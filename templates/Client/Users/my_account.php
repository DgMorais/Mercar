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
                            <li><a href="#group" data-bs-toggle="tab" class="nav-link" onclick="alteraUrl('group')">Perfil da Conta</a></li>
                            <li> <a href="#orders" data-bs-toggle="tab" class="nav-link" onclick="alteraUrl('orders')">Compras</a></li>
                            <li><a href="#address" data-bs-toggle="tab" class="nav-link" onclick="alteraUrl('address')">Endere??os</a></li>
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
                            <p>Do painel da sua conta. voc?? pode facilmente verificar &amp; visualizar seus <strong>pedidos</strong>, gerenciar seus <strong>endere??os</strong> e cobran??a e <strong>editar sua senha e detalhes da conta</strong>.</p>
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
                                    <label>G??nero</label>
                                    <?= $this->Form->control('genero',
                                        [
                                            'label' => false,
                                            'type' => 'select',
                                            'class' => 'form-control',
                                            'placeholder' => __('G??nero'),
                                            'aria-label' => __('G??nero'),
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
                                    <span>Inscreva-se em nosso newsletter<br><em>Voc?? pode cancelar a inscri????o a
                                        qualquer momento. Para isso, por favor, encontre nossas informa????es de contato no.</em></span>
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
                        <div class="tab-pane fade" id="group">
                            <h4>Perfil</h4>
                            <div>
                                <p>Sua conta esta cadastrada como <strong>cliente</strong>. Caso queria mudar o perfil de sua conta para <strong>vendedor</strong>, clique em ler termos e condi????es de uso, leia atentamente as informa????es abaixo e prossiga para a muda??a de perfil clicando em <strong>alterar grupo do perfil</strong></p>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <button class="btn btn-secondary py-2 px-4" id="read-terms-conditions">Ler Termos</button>
                                    </div>
                                </div>
                                <div class="border rounded mt-3 p-3 terms-conditions">
                                    <h3 class="text-center">Termos e Condi????es de Uso</h3>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pulvinar dui ante, ac tempus arcu lobortis quis. Vestibulum fermentum magna ut arcu laoreet molestie. Vivamus porta tellus et leo accumsan aliquam. Integer condimentum, est eget vestibulum cursus, dolor eros blandit erat, vel tristique libero neque auctor metus. Ut vel lobortis magna, vitae mattis nisl. Curabitur volutpat augue non neque egestas convallis. Nam auctor urna ut cursus tempus. Suspendisse et massa mauris.

                                    Curabitur laoreet pellentesque ante, eget mollis nulla congue sit amet. Morbi aliquet dui euismod finibus gravida. Nulla facilisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed at sem libero. Duis pellentesque, orci eu condimentum euismod, purus turpis pellentesque velit, at euismod est ligula nec dui. Fusce imperdiet dapibus varius. Fusce vitae ipsum vel elit cursus rutrum ut egestas ligula. Maecenas egestas enim dictum, sodales risus at, pulvinar velit. In ut egestas sapien, nec porta odio. Curabitur tempor eros vitae rhoncus dapibus. Praesent vel nulla eu odio scelerisque laoreet. Pellentesque quis scelerisque lectus, eu maximus augue. Nullam porta elit sed sapien efficitur pulvinar.

                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam hendrerit eleifend tempor. Pellentesque diam nibh, tempus et dui nec, condimentum placerat velit. Aenean mollis tincidunt diam, vitae molestie leo aliquet ut. Etiam eu sapien enim. Vivamus dictum, purus in bibendum tempor, mi urna eleifend ex, quis dignissim odio orci ornare libero. In congue in elit ut scelerisque. Sed vehicula iaculis diam eu consequat. Cras blandit ipsum in sagittis luctus. Nam sed rutrum dolor, ac rutrum quam. Duis quis orci aliquam, rhoncus metus ac, bibendum risus. Pellentesque at consequat tortor, tempus volutpat nunc. In eleifend eros ut rutrum luctus. Ut sodales pulvinar molestie.

                                    Duis iaculis urna urna. Praesent viverra magna non pretium sollicitudin. Nullam scelerisque metus eget nisl tincidunt, et elementum augue posuere. Ut vulputate metus et pellentesque pulvinar. Curabitur cursus pulvinar gravida. In erat felis, convallis eget vehicula et, aliquam sit amet sem. Aliquam tincidunt leo id urna mattis, vitae elementum tortor placerat. Nam hendrerit quam a lorem lobortis porttitor. Curabitur aliquam eu sem ultricies vulputate. Aliquam fermentum auctor mi, sed ullamcorper justo auctor nec. Donec lacinia ultricies diam eu auctor. Integer fringilla lacinia orci, ut fringilla elit egestas id. Donec tempus tincidunt turpis, vitae accumsan orci euismod nec. Donec magna velit, pellentesque a felis a, condimentum dignissim turpis. Fusce suscipit justo sit amet mi tempor euismod. Donec ultrices, quam ut fringilla imperdiet, sapien est tristique nisl, sed hendrerit elit dui quis nibh.</p>
                                </div>
                                <?= $this->Html->link('Alterar perfil da conta',
                                    [
                                        'controller' => 'Users',
                                        'action' => 'changeProfileSeller',
                                        'prefix' => 'client'
                                    ],
                                    [
                                        'class' => 'btn btn-primary mt-3 py-2',
                                        'id' => 'change-profile'
                                    ]
                                ) ?>
                            </div>
                        </div>
                        <?= $this->element('orders/list_orders', 
                            [
                                'group' => 'client'
                            ]
                        ) ?>
                        <div class="tab-pane fade px-2" id="address">
                            <p>Os endere??os a seguir tamb??m ser??o exibidos ??????na p??gina de checkout.</p>
                            <?php if (!empty($endereco_padrao)): ?>
                                <h5 class="billing-address mb-3">Endere??o Padr??o</h5>
                                <p class="mb-2"><strong>Destinatario:</strong> <?= $endereco_padrao->destinatario ?></p>
                                <address class="mb-5">
                                    <span class="mb-1 d-inline-block"><strong>CEP:</strong> <?= $endereco_padrao->cep ?></span>
                                    <br>
                                    <span class="mb-1 d-inline-block"><strong>Rua:</strong> <?= $endereco_padrao->rua ?></span>
                                    <br>
                                    <span class="mb-1 d-inline-block"><strong>N??mero:</strong> <?= $endereco_padrao->numero ?></span>
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
                                <h5 class="billing-address mb-3">Endere??os Cadastrados</h5>                                    
                            </div>
                            <div class="table_page table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>CEP</th>
                                            <th>Rua</th>
                                            <th>N??mero</th>
                                            <th>Bairro</th>
                                            <th>Cidade</th>
                                            <th>A????es</th>
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
                                    <a href="#add-address" data-bs-toggle="tab" class="btn btn-info p-2 p-md-2 text-nowrap cadastro-endereco nav-link">Cadastrar Endere??o</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="add-address">
                            <h4>Cadastrar Endere??o</h4>
                            <div class="d-flex justify-content-between">
                                <h5 class="billing-address mb-3">Endere??os</h5>
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
                                    <label>N??mero</label>
                                    <?= $this->Form->control('numero',
                                        [
                                            'label' => false,
                                            'type' => 'text',
                                            'class' => 'form-control w-50',
                                            'placeholder' => __('N??mero'),
                                            'aria-label' => __('N??mero'),
                                        ]
                                    ); ?>
                                </div>
                                <div class="default-form-box mb-20">
                                    <label>Complemento</label>
                                    <?= $this->Form->control('complemento',
                                        [
                                            'label' => false,
                                            'type' => 'text',
                                            'id' => 'complemento',
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
        if (url.match(/address/) == 'address') {
            $("#account-details").removeClass("show active");
            $("#address").addClass("show active");
            $("a[href='#account-details']").removeClass("active");
            $("a[href='#address']").addClass("active");
        } else if (url.match(/orders/) == 'orders') {
            $("#account-details").removeClass("show active");
            $("#orders").addClass("show active");
            $("a[href='#account-details']").removeClass("active");
            $("a[href='#orders']").addClass("active");
        } else if (url.match(/group/) == 'group') {
            $("#account-details").removeClass("show active");
            $("#group").addClass("show active");
            $("a[href='#account-details']").removeClass("active");
            $("a[href='#group']").addClass("active");
        }
        $('#change-profile').addClass('disabled');
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
        $('.terms-conditions').hide();
        $('#read-terms-conditions').on('click', function() {
            $('.terms-conditions').toggle("slow");
        })
        $('.view-sale').on('click', function () {
            $('.bd-example-modal-xl').modal('show');
        })
        $('#read-terms-conditions').on('click', function() {
            $('#change-profile').removeClass('disabled')
        })
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
