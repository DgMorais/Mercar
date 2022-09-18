<div class="main-wrapper">
    <div class="container p-2">
        <div class="border rounded">
            <?= $this->Form->create($product,
                [
                    'url' => ['controller' => 'Products', 'action' => 'add', 'prefix' => 'seller']
                ]
            ); ?>
            <!-- Product Details Area Start -->
            <div class="product-details-area py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container zoom-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <?= $this->Html->image('product-image/zoom-image/1.webp',
                                            [
                                                'class' => 'img-responsive m-auto'
                                            ]
                                        )?>
                                        <?= $this->Html->link('<i class="fa fa-arrows-alt" aria-hidden="true"></i>',
                                            'img/product-image/zoom-image/1.webp',
                                            [
                                                'escape' => false,
                                                'class' => 'venobox full-preview',
                                                'data-gall' => 'myGallery'
                                            ]
                                        )?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?= $this->Html->image('product-image/zoom-image/2.webp',
                                            [
                                                'class' => 'img-responsive m-auto'
                                            ]
                                        )?>
                                        <?= $this->Html->link('<i class="fa fa-arrows-alt" aria-hidden="true"></i>',
                                            'img/product-image/zoom-image/2.webp',
                                            [
                                                'escape' => false,
                                                'class' => 'venobox full-preview',
                                                'data-gall' => 'myGallery'
                                            ]
                                        )?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?= $this->Html->image('product-image/zoom-image/3.webp',
                                            [
                                                'class' => 'img-responsive m-auto'
                                            ]
                                        )?>
                                        <?= $this->Html->link('<i class="fa fa-arrows-alt" aria-hidden="true"></i>',
                                            'img/product-image/zoom-image/3.webp',
                                            [
                                                'escape' => false,
                                                'class' => 'venobox full-preview',
                                                'data-gall' => 'myGallery'
                                            ]
                                        )?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?= $this->Html->image('product-image/zoom-image/4.webp',
                                            [
                                                'class' => 'img-responsive m-auto'
                                            ]
                                        )?>
                                        <?= $this->Html->link('<i class="fa fa-arrows-alt" aria-hidden="true"></i>',
                                            'img/product-image/zoom-image/4.webp',
                                            [
                                                'escape' => false,
                                                'class' => 'venobox full-preview',
                                                'data-gall' => 'myGallery'
                                            ]
                                        )?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?= $this->Html->image('product-image/zoom-image/5.webp',
                                            [
                                                'class' => 'img-responsive m-auto'
                                            ]
                                        )?>
                                        <?= $this->Html->link('<i class="fa fa-arrows-alt" aria-hidden="true"></i>',
                                            'img/product-image/zoom-image/5.webp',
                                            [
                                                'escape' => false,
                                                'class' => 'venobox full-preview',
                                                'data-gall' => 'myGallery'
                                            ]
                                        )?>
                                    </div>
                                </div>
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
                                <div class="col-6 my-2">
                                    <?= $this->Form->control('preco_por',
                                        [
                                            'label' => [
                                                'text' => 'Preço',
                                                'class' => 'text-primary m-0 p-0'
                                            ],
                                            'class' => 'form-control w-100',
                                            'placeholder' => 'Preço'
                                        ]
                                    ) ?>
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
                                    <?= $this->Form->control('categories._nome',
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
                                    <?= $this->Form->control('qtds',
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
                                        <?= $this->Form->control('peso',
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
                                        <?= $this->Form->control('dimensoes',
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
                                        <?= $this->Form->control('outras-informacoes',
                                            [
                                                'label' => [
                                                    'text' => 'Dimensoes',
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
                            ola
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Area Start -->
                <div class="save_button rounded">
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