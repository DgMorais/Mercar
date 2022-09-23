<style>
    input {
        padding-right: 5px !important;
    }
</style>
<div class="main-wrapper">
    <div class="container p-2">
        <div class="border rounded">
            <?= $this->Form->create($product,
                [
                    'url' => ['controller' => 'Products', 'action' => 'add', 'prefix' => 'seller', $store->id],
                    'type' => 'file'
                ]
            ); ?>
            <div class="product-details-area py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                            <div class="swiper-container zoom-top">
                                <?= $this->Form->control('images',
                                    [
                                        'label' => [
                                            'text' => $this->Html->image('product-image/zoom-image/1.webp',
                                                [
                                                    'class' => 'img-responsive m-auto'
                                                ]
                                            ),
                                            'class' => 'text-primary border rounded w-100 m-0 p-0',
                                            'for' => "form-img-file",
                                            'escape' => false,
                                            'role' => 'button'
                                        ],
                                        'name' => 'images[]', 
                                        'multiple' => 'multiple',
                                        'type' => 'file',
                                        'class' => 'form-control form-control-lg d-none w-100',
                                        'placeholder' => 'Titulo do Produto',
                                        'required' => true
                                    ]
                                ) ?>
                            </div>
                            <div class="swiper-container mt-20px zoom-thumbs slider-nav-style-1 small-nav">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <?= $this->Html->image('product-image/small-image/1.webp',
                                            [
                                                'class' => 'img-responsive m-auto'
                                            ]
                                        )?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?= $this->Html->image('product-image/small-image/2.webp',
                                            [
                                                'class' => 'img-responsive m-auto'
                                            ]
                                        )?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?= $this->Html->image('product-image/small-image/3.webp',
                                            [
                                                'class' => 'img-responsive m-auto'
                                            ]
                                        )?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?= $this->Html->image('product-image/small-image/4.webp',
                                            [
                                                'class' => 'img-responsive m-auto'
                                            ]
                                        )?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?= $this->Html->image('product-image/small-image/5.webp',
                                            [
                                                'class' => 'img-responsive m-auto'
                                            ]
                                        )?>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-details-content quickview-content ml-25px">
                                <div class="col-12">
                                    <?= $this->Form->control('nome',
                                        [
                                            'label' => [
                                                'text' => 'Título',
                                                'class' => 'text-primary m-0 p-0'
                                            ],
                                            'class' => 'form-control w-100',
                                            'placeholder' => 'Titulo do Produto'
                                        ]
                                    ) ?>
                                </div>
                                <div class="col-12 d-flex justify-content-between my-2">
                                    <div class="col-5">
                                        <?= $this->Form->control('preco.preco_por',
                                            [
                                                'label' => [
                                                    'text' => 'Preço',
                                                    'class' => 'text-primary m-0 p-0'
                                                ],
                                                'type' => 'text',
                                                'class' => 'form-control w-100',
                                                'placeholder' => 'Preço'
                                            ]
                                        ) ?>
                                    </div>
                                    <div class="col-6 select-max-parcelas d-none">
                                        <?= $this->Form->control('max_parcelas',
                                            [
                                                'label' => [
                                                    'text' => 'Máx. parcelas',
                                                    'class' => 'text-primary m-0 p-0'
                                                ],
                                                'type' => 'select',
                                                'class' => 'form-control w-100',
                                                'style' => 'height: 50px;',
                                                'id' => 'max-parcelas'
                                            ]
                                        ) ?>
                                    </div>
                                </div>
                                <div class="col-12 my-2">
                                    <?= $this->Form->control('descricao',
                                        [
                                            'label' => [
                                                'text' => 'Descrição',
                                                'class' => 'text-primary m-0 p-0'
                                            ],
                                            'class' => 'form-control w-100',
                                            'style' => "resize: none",
                                            'placeholder' => 'Descrição do Produto',
                                            'type' => 'textarea'
                                        ]
                                    ) ?>
                                </div>
                                <div class="col-12 my-2">
                                    <?= $this->Form->control('category_id',
                                        [
                                            'label' => [
                                                'text' => 'Categorias',
                                                'class' => 'text-primary m-0 p-0'
                                            ],
                                            'class' => 'form-select w-100',
                                            'type' => 'select',
                                            'empty' => 'Selecione a categoria do produto...',
                                            'options' => $list_category
                                        ]
                                    ) ?>
                                </div>
                                <div class="col-12 my-2">
                                    <?= $this->Form->control('tags',
                                        [
                                            'label' => [
                                                'text' => 'Tags',
                                                'class' => 'text-primary m-0 p-0'
                                            ],
                                            'class' => 'form-control w-100',
                                            'type' => 'text',
                                            'placeholder' => 'Tags',
                                        ]
                                    ) ?>
                                </div>
                                <div class="col-12 my-2">
                                    <?= $this->Form->control('quantity',
                                        [
                                            'label' => [
                                                'text' => 'Quantidades',
                                                'class' => 'text-primary m-0 p-0'
                                            ],
                                            'class' => 'form-control w-50',
                                            'type' => 'text',
                                            'placeholder' => 'Quantidade disponíveis',
                                        ]
                                    ) ?>
                                </div>
                            </div>
                            <div class="description-review-wrapper">
                                <div class="description-review-topbar nav">
                                    <span class="text-primary h5">Informações</span>
                                </div>
                                <div class="row">
                                    <div class="col-6 my-2 py-0">
                                        <?= $this->Form->control('product_information.weight',
                                            [
                                                'label' => [
                                                    'text' => 'Peso',
                                                    'class' => 'text-primary m-0 p-0'
                                                ],
                                                'class' => 'form-control w-100',
                                                'type' => 'text',
                                                'placeholder' => 'Peso',
                                                ]
                                            ) 
                                        ?>
                                    </div>
                                    <div class="col-6 my-2 py-0">
                                        <?= $this->Form->control('product_information.dimension',
                                            [
                                                'label' => [
                                                    'text' => 'Dimensoes',
                                                    'class' => 'text-primary m-0 p-0'
                                                ],
                                                'class' => 'form-control w-100',
                                                'type' => 'text',
                                                'placeholder' => 'Dimensoes',
                                            ]
                                        ) ?>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-12 my-2 py-0">
                                        <?= $this->Form->control('product_information.other_informations',
                                            [
                                                'label' => [
                                                    'text' => 'Outras Informações',
                                                    'class' => 'text-primary m-0 p-0'
                                                ],
                                                'class' => 'form-control w-100',
                                                'type' => 'textarea',
                                                'placeholder' => 'Outras Informações',
                                                'style' => "resize: none; height: 250px;",
                                            ]
                                        ) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <?= $this->Form->control('product_information.more_informations',
                                [
                                    'label' => [
                                        'text' => 'Mais informações',
                                        'class' => 'text-primary m-0 p-0'
                                    ],
                                    'class' => 'form-control w-100',
                                    'type' => 'textarea',
                                    'placeholder' => 'Mais Informações',
                                    'style' => "resize: none; height: 600px;",
                                ]
                            ) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mx-1 mb-3">
                <div class="d-flex flex-row-reverse save_button rounded">
                    <?= $this->Form->button(__('Salvar'),
                        [
                            'submitButton' => 'true',
                            'message-redirect' => __('Aguarde...') . ' <i class="fas fa-spinner fa-pulse"></i>',
                            'escape' => true,
                            'class' => 'btn'
                        ]
                    ); ?>
                </div>
            </div>
            <?= $this->Form->end(); ?>
        </div>
    </div>
</div>
<?= $this->Html->script('jquery.maskMoney.min') ?>
<script>
    $(document).ready(function() {
        var preco = $('#preco-preco-por');
        preco.maskMoney({
            prefix:'R$ ', 
            thousands:'.', 
            decimal:',',
            precision: 2
        });

        preco.blur(function() {
            if (preco.val() != '') {
                $('#max-parcelas').empty();
                var preco_value = parseFloat(preco.val().replace(/[R$ ]/g, '').replace('.', '').replace(',', '.'));
                for (i = 1; i <= 12; i++) {
                    $('#max-parcelas').append(
                        $('<option>', { 
                            value: i,
                            text : `${i} x ${(preco_value/i).toLocaleString("pt-BR", { style: "currency" , currency:"BRL"})}` 
                        })
                    );
                }
                
                $('.select-max-parcelas').append()
                $('.select-max-parcelas').removeClass('d-none')
            } else {
                $('.select-max-parcelas').addClass('d-none')
            }
        })
    })
</script>