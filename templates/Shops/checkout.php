<?= $this->Html->script(
    [
        'card.js'
    ]
) ?>
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

    .card.box1 {
        width: 550px;
        height: 500px;
        background-color: #266BF9;
        color: #baf0c3;
        border-radius: 0
    }

    .card.box2 {
        width: 650px;
        height: 580px;
        background-color: #ffffff;
        border-radius: 0
    }

    .text {
        font-size: 13px
    }

    .box2 .btn.btn-primary.bar {
        width: 20px;
        background-color: transparent;
        border: none;
        color: #266BF9
    }

    .box2 .btn.btn-primary.bar:hover {
        color: #baf0c3
    }

    .box1 .btn.btn-primary {
        background-color: #12357A;
        width: 45px;
        height: 45px;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid #ddd
    }

    .box1 .btn.btn-primary:hover {
        background-color: #f6f8f7;
        color: #12357A
    }

    .btn.btn-success {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #ddd;
        color: black;
        display: flex;
        justify-content: center;
        align-items: center;
        border: none
    }

    .nav.nav-tabs {
        border: none;
        border-bottom: 2px solid #ddd
    }

    .nav.nav-tabs .nav-item .nav-link {
        border: none;
        color: black;
        border-bottom: 2px solid transparent;
        font-size: 14px
    }

    .nav.nav-tabs .nav-item .nav-link:hover {
        border-bottom: 2px solid #266BF9;
        color: #266BF9
    }

    .nav.nav-tabs .nav-item .nav-link.active {
        border: none;
        border-bottom: 2px solid #266BF9
    }

    .form-control {
        border: none;
        border-bottom: 1px solid #ddd;
        box-shadow: none;
        height: 20px;
        font-weight: 600;
        font-size: 14px;
        padding: 15px 0px;
        letter-spacing: 1.5px;
        border-radius: 0
    }

    .inputWithIcon {
        position: relative
    }

    .inputWithIcon img {
        width: 64px;
        height: 25px;
        object-fit: cover
    }

    .type-credit-card, .type-boleto, .type-pix {
        cursor: pointer;
    }

    .inputWithIcon span {
        position: absolute;
        right: 0px;
        bottom: 9px;
        color: #12357A;
        cursor: pointer;
        transition: 0.3s;
        font-size: 14px
    }

    .form-control:focus {
        box-shadow: none;
        border-bottom: 1px solid #ddd
    }

    .btn-outline-primary {
        color: black;
        background-color: #ddd;
        border: 1px solid #ddd
    }

    .btn-outline-primary:hover {
        background-color: #266BF9;
        border: 1px solid #ddd
    }

    .btn-check:active+.btn-outline-primary,
    .btn-check:checked+.btn-outline-primary,
    .btn-outline-primary.active,
    .btn-outline-primary.dropdown-toggle.show,
    .btn-outline-primary:active {
        color: #baf0c3;
        background-color: #266BF9;
        box-shadow: none;
        border: 1px solid #ddd
    }

    .btn-group>.btn-group:not(:last-child)>.btn,
    .btn-group>.btn:not(:last-child):not(.dropdown-toggle),
    .btn-group>.btn-group:not(:first-child)>.btn,
    .btn-group>.btn:nth-child(n+3),
    .btn-group>:not(.btn-check)+.btn {
        border-radius: 50px;
        margin-right: 20px
    }

    form {
        font-size: 14px
    }

    form .btn.btn-primary {
        width: 100%;
        height: 45px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #266BF9;
        border: 1px solid #ddd
    }

    form .btn.btn-primary:hover {
        background-color: #266BF9
    }

    @media (max-width:750px) {
        .container {
            padding: 10px;
            width: 100%
        }

        .text-green {
            font-size: 14px
        }

        .card.box1,
        .card.box2 {
            width: 100%
        }

        .nav.nav-tabs .nav-item .nav-link {
            font-size: 12px
        }
    }
</style>
<script src="/js/pagseguro/pagseguro.min.js"></script>
<div class="main-wrapper"  style="background-color: #FFFFFF;">
    <?php if (isset($cart)) : ?>
        <?= $this->Form->create(null, [
            'url' => ['controller' => 'Sales', 'action' => 'paymentSale', $cart['id_sale']],
            'id' => 'form_sale'
        ]); ?>
            <div class="container d-flex justify-content-center align-items-center p-5">
                <div class="card box1 d-flex p-md-5 p-4">
                    <div class="fw-bolder mb-4 text-nowrap">
                        <?php foreach ($cart['carrinho'] as $product) : ?>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span class="text-sm"><?= $product['nome'] ?></span>
                                </div>
                                <div>
                                    <span class="ps-1">R$</span>
                                    <span class="ps-1"><?= number_format($product['preco_por'],2,",",".") ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-md-12 mb-3">
                        <span>Parcelas</span>
                            <div class="inputWithIcon">
                                <?php ?>
                            <?= $this->Form->select('parcelas',
                                $parcelas,
                                [
                                    'id' => 'parcelas',
                                    'empty' => 'Selecione o número de parcelas',
                                    'label' => false,
                                    'class' => 'form-select w-100',
                                    'type' => 'select',
                                    'placeholder' => __('Parcelas'),
                                    'aria-label' => __('Parcelas'),
                                    'required' => true,
                                ]
                            ); ?>
                            <span class="fa fa-calendar-alt"></span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between text"> 
                        <span><strong>Total</strong></span> 
                        <span class="fa fa-dollar-sign">
                            <span class="   ps-1"><strong>R$<?= number_format($total,2,",",".") ?></strong></span>
                        </span> 
                    </div>
                </div>
                <div class="card box2 shadow-sm">
                    <div class="d-flex align-items-center justify-content-between p-md-5 p-4"> 
                        <span class="h5 fw-bold m-0">Métodos de Pagamento</span>
                        <div class="btn btn-primary bar">
                            <span class="fa fa-bars"></span>
                        </div>
                    </div>
                    <ul class="nav nav-tabs mb-3 px-md-4 px-2">
                        <li class="nav-item">
                            <a class="nav-link px-2 active type-credit-card" onClick="paymentMethod(this, 'credit-card')">Cartão de Crédito</a> 
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2 type-boleto" onClick="paymentMethod(this, 'boleto')">Boleto</a> 
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2 type-pix" onClick="paymentMethod(this, 'pix')">PIX</a>
                        </li>
                    </ul>
                    <div class="d-none card-hash"></div>
                    <div id="type-credit-card">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex flex-column px-md-5 px-4 mb-4">
                                    <span>Cartão de Crédito</span>
                                    <input class="form-control d-none" type="text" value="credit-card" disabled>
                                    <div class="inputWithIcon">
                                        <?= $this->Form->control('card-number',
                                            [
                                                'id' => 'card-number',
                                                'label' => false,
                                                'class' => 'form-control',
                                                'type' => 'text',
                                                'placeholder' => __('**** **** **** ****'),
                                                'aria-label' => __('Número do cartão'),
                                                'required' => true
                                            ]
                                        ); ?>
                                        <span class="card-flag m-0 p-0">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex flex-column ps-md-5 px-md-0 px-4 mb-4"> <span>Validade</span>
                                    <div class="inputWithIcon">
                                        <?= $this->Form->control('card-validate',
                                            [
                                                'id' => 'card-validate',
                                                'label' => false,
                                                'class' => 'form-control',
                                                'type' => 'text',
                                                'placeholder' => __('**/****'),
                                                'aria-label' => __('Validade'),
                                                'required' => true
                                            ]
                                        ); ?>
                                        <span class="fa fa-calendar-alt"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex flex-column pe-md-5 px-md-0 px-4 mb-4"> <span>CVV</span>
                                    <div class="inputWithIcon">
                                        <?= $this->Form->control('card-cvv',
                                            [
                                                'id' => 'card-cvv',
                                                'label' => false,
                                                'class' => 'form-control',
                                                'type' => 'password',
                                                'placeholder' => __('***'),
                                                'aria-label' => __('CVV'),
                                                'required' => true
                                            ]
                                        ); ?>
                                        <span class="fa fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex flex-column px-md-5 px-4 mb-4"> <span>Nome</span>
                                    <div class="inputWithIcon">
                                        <?= $this->Form->control('holder-name',
                                            [
                                                'id' => 'holder-name',
                                                'label' => false,
                                                'class' => 'form-control text-uppercase',
                                                'type' => 'text',
                                                'placeholder' => __('Nome Completo'),
                                                'aria-label' => __('Nome Completo'),
                                                'required' => true
                                            ]
                                        ); ?>
                                        <span class="fa fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="type-boleto" class="d-none">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex flex-column px-md-5 px-4 mb-4">
                                    <span>Boleto</span>
                                    <input class="form-control d-none" type="text" value="boleto" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="type-pix" class="d-none">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex flex-column px-md-5 px-4 mb-4">
                                    <span>Pix</span>
                                    <input class="form-control d-none" type="text" value="pix" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-md-5 px-4 mt-3">
                        <?= $this->Form->button('Pagar', [
                            'class' => 'btn btn-primary w-100',
                            'type' => 'button',
                            'onclick' => "encryptCard('credit_card')"
                        ]) ?>
                    </div>
                </div>
            </div>
        <?= $this->Form->end(); ?>
    <?php endif; ?>
</div>
<script>
    $(document).ready(function() {
        $('#card-number').mask('0000 0000 0000 0000')
        $('#card-validate').mask('00/0000')
        $('#card-number').bind('keydown', function() {
            let card_flag = card.getCardFlag($('#card-number').val())
            if (typeof card_flag == 'string') {
                $('.card-flag').empty()
                let icon_card = $('<img />', {
                    src: `img/card-flag/${card_flag}.svg`,
                    style: 'heigth: 100%;'
                })
                $('.card-flag').append(icon_card)
            } else {
                $('.card-flag').empty()
            }
        })
    })

    function paymentMethod(element, type_method) {
        $(element).addClass('active')
        $(`#type-${type_method}`).removeClass('d-none')
        if (type_method == 'credit-card') {
            $(".type-boleto").removeClass('active')
            $(".type-pix").removeClass('active')

            $('#type-boleto').addClass('d-none')
            $('#type-pix').addClass('d-none')
        } else if (type_method == 'boleto') {
            $(".type-credit-card").removeClass('active')
            $(".type-pix").removeClass('active')

            $('#type-credit-card').addClass('d-none')
            $('#type-pix').addClass('d-none')
        } else if (type_method == 'pix') {
            $(".type-boleto").removeClass('active')
            $(".type-credit-card").removeClass('active')

            $('#type-boleto').addClass('d-none')
            $('#type-credit-card').addClass('d-none')
        }
    }

    function encryptCard(type_method) {
        if (type_method == 'credit_card') {
            let card_number = $('#card-number').val();
            card_number = card_number.replace(/( )+/g, '')
            let holder_name = $('#holder-name').val();
            let exp_month = $('#card-validate').val().split('/')[0];
            let exp_year = $('#card-validate').val().split('/')[1];
            let cvv = $('#card-cvv').val();
    
            var card = PagSeguro.encryptCard({
                publicKey: "<?= env('PAGSEGURO_PUBLIC_KEY') ?>",
                holder: holder_name,
                number: card_number,
                expMonth: exp_month,
                expYear: exp_year,
                securityCode: cvv
            })
            
            if (!card.hasErrors) {
                var encrypted = card.encryptedCard;
    
                let div = $('.card-hash');            
                let input_hash = $('<input />', {
                    type: 'text',
                    value: encrypted,
                    name: 'card-hash'
                })
                let input_type_method = $('<input />', {
                    type: 'text',
                    value: 'credit_card',
                    name: 'type-method'
                })
                div.append(input_type_method)
                div.append(input_hash)
                div.val(encrypted);
                $('.card-hash').removeClass('d-none')
                $('#form_sale').submit();
            }
        }
    }
</script>