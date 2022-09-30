<style>
    input {
        padding-right: 5px !important;
    }
    .swiper {
        width: auto;
        height: auto;
    }
    input[type=file]::-webkit-file-upload-button {
        border-radius: 5px 0 0 5px;
        background: #266BF9;
        padding: 14px;
        padding-right: 15px;
        padding-left: 25px;
        color: #FFF;
    }
    .form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
        background-color: #252525
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .swiper {
        width: 100%;
        height: 300px;
        margin-left: auto;
        margin-right: auto;
    }

    .swiper-slide {
        background-size: cover;
        background-position: center;
    }

    .swiper-one {
        height: 80%;
        width: 100%;
    }

    .swiper-two {
        height: 20%;
        box-sizing: border-box;
        padding: 10px 0;
    }

    .swiper-two .swiper-slide {
        width: 25%;
        height: 100%;
        opacity: 0.4;
    }

    .swiper-two .swiper-slide-thumb-active {
        opacity: 1;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
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
                            <div>
                                <?= $this->Form->control('images',
                                    [
                                        'label' => [
                                            'text' => 'Carregue as imagens do produto',
                                            'class' => 'text-primary w-100 m-0 p-0',
                                            'for' => "form-img-file",
                                            'escape' => false,
                                            'role' => 'button'
                                        ],
                                        'name' => 'images[]',
                                        'multiple' => 'multiple',
                                        'type' => 'file',
                                        'style' => 'padding: 5px;',
                                        'class' => 'form-control',
                                        'onChange' => 'showImages()', 
                                        'required' => true
                                    ]
                                ) ?>
                            </div>
                            <div class="load-images d-none">
                                <div class="swiper-slider-container swiper swiper-one swiper-container mt-20px zoom-thumbs slider-nav-style-1 small-nav">
                                    <div class="swiper-wrapper">
                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-buttons">
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
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
<?= $this->Html->script('lory.min') ?>
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

    function showImages() {
        var input = document.getElementById('images')
        if (input.files.length != 0) {
            readUrl(input, $('#main-image'), 0);
            for (i=0; i<=input.files.length; i++) {
                let wrapper = $('.swiper-slider-container').children('.swiper-wrapper')
                let wrapper_two = $('.swiper-slider-container-two').children('.swiper-wrapper')
                let div_slide = $('<div />', {
                    class: 'swiper-slide'
                });
                let div_slide_two = $('<div />', {
                    class: 'swiper-slide'
                });
                let img_slide = $('<img />', {
                    class: 'img-responsive m-auto',
                    style: 'width: 500px;',
                });
                let img_slide_two = $('<img />', {
                    class: 'img-responsive m-auto',
                    style: 'width: 180px;',
                });
                if (i == 0) {
                    div_slide.addClass('swiper-slide-active');
                    div_slide_two.addClass('swiper-slide-active');
                }
                readUrl(input, img_slide, i);
                readUrl(input, img_slide_two, i);
                let last_element = wrapper.children().last();
                div_slide.append(img_slide)
                div_slide_two.append(img_slide_two)
                wrapper.append(div_slide)
                wrapper_two.append(div_slide_two)
                $('.load-images').removeClass('d-none');
            }
            const swiper = new Swiper('.swiper-one', {
                // Optional parameters
                direction: 'horizontal',
                spaceBetween: 5,

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                thumbs: {
                    swiper: swiper,
                },
            });
        }
    }

    function readUrl(input, tag, image) {
        let reader = new FileReader();
        reader.onload = function (e) {
            tag.attr('src', e.target.result)
        };
        reader.readAsDataURL(input.files[image]);
    }
</script>