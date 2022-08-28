<?php foreach ($products as $product): ?>
    <!-- Modal Cart -->
    <div class="modal customize-class fade" id=<?= "modalCart" . $product->id ?> tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="pe-7s-close"></i></button>
                    <div class="tt-modal-messages">
                        <i class="pe-7s-check"></i> Produto adicionado ao carrinho com sucesso!
                    </div>
                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <?= $this->Html->image('product-image/1.webp',
                                [
                                    'alt' => 'Produto adicionado ao carrinho'
                                ]
                            )?>
                        </div>
                        <h2 class="tt-title"><a href="#"><?= $product->nome ?></a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

