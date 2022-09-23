<style>
    .carousel-control-next,
    .carousel-control-prev /*, .carousel-indicators */ {
        filter: invert(100%);
    }
    #carouselControls {
        width: 18%;
        min-height: 160px;
        max-height: 160px;
    }
    .list-group-item {
        height: 180px;
    }
    .image-not-found, .image-product {
        width: 18%;
        min-height: 140px;
        max-height: 140px;
    }
    #product-description {
        white-space: nowrap; 
        width: 40em; 
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
<div class="main-wrapper">
    <div class="container p-2">
        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#products-list">Meus Produtos</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <div id="products-list">
            <div class="d-flex flex-row-reverse mt-2">
                <?= $this->Html->link('Adicionar Produto',
                    ['controller' => 'Products', 'action' => 'add', 'prefix' => 'seller', $store->id],
                    [
                        'class' => 'btn btn-primary py-3 px-4'
                    ]
                ) ?>
            </div>
            <div class="list-group">
                <?php if (!empty($products)) : ?>
                    <?php foreach($products as $product) : ?>
                            <div class="list-group-item border rounded flex-column align-items-start my-2">
                                <div class="w-100 d-flex">
                                    <?php if(!empty($product->images)) : ?>
                                        <div id="carouselControls" class="carousel slide border rounded alig-items-center p-2 mx-2" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <?php foreach(json_decode($product->images) as $image) : ?>
                                                    <div class="carousel-item">
                                                        <?= $this->Html->image($image,
                                                            [
                                                                'pathPrefix' => "/mercar/img/uploads/products/{$store->id}/",
                                                                'class' => 'image-product w-100'
                                                            ]
                                                        ) ?>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <?= $this->Html->image('not-found/imagem-nao-cadastrada.jpg',
                                            [
                                                'class' => 'd-block image-not-found border rounded p-2 mx-2'
                                            ]
                                        ) ?>
                                    <?php endif; ?>
                                    <div class="d-flex w-100">
                                        <div class="w-100 h-100">
                                            <h5 class="mb-1"><?= $product->nome ?></h5>
                                            <p id="product-description"><small><?= $product->descricao ?></small></p>
                                        </div>
                                        <div class="d-flex align-items-end flex-column align-content-between" style="width: 50%;">
                                            <div class="d-flex flex-row-reverse self-start">
                                                <?= $this->Html->link('<i class="fa fa-trash" aria-hidden="true"></i>', '#', [
                                                    'id' => 'delete-icon',
                                                    'data-title' => __('Are you sure?'),
                                                    'data-message' => __('Are you sure you want to delete {0}?', $product->nome),
                                                    'class' => ['btn-sm btn-confirm-delete'],
                                                    'escape'=>false
                                                ]) ?>
                                                <?= $this->Form->postLink('<i class="fa fa-trash danger-text" aria-hidden="true"></i>', ['controller' => 'Products', 'action' => 'delete', $product->id], [
                                                    'confirm' => __('Are you sure you want to delete # {0}?',  $product->id),
                                                    'escape'=> false,
                                                    'class'=>'d-none btn-sm waves-effect',
                                                    'data-placement'=>'top',
                                                    'data-toggle'=>'popover',
                                                    'data-content'=>__('Delete')
                                                ]) ?>
                                                <?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'Products', 'action' => 'view', $product->id],[
                                                    'id' => 'view-icon',
                                                    'escape'=>false,
                                                    'class'=>'btn-sm waves-effect',
                                                    'data-placement'=>'top',
                                                    'data-toggle'=>'popover',
                                                    'data-content'=>__('Ver')
                                                ]) ?>
                                                <?= $this->Html->link('<i class="fa fa-edit"></i>', ['controller' => 'Products', 'action' => 'edit', $product->id], [
                                                        'id' => 'edit-icon',
                                                        'escape'=>false,
                                                        'class'=>'btn-sm waves-effect',
                                                        'data-placement'=>'top',
                                                        'data-toggle'=>'popover',
                                                        'data-content'=>__('Editar')
                                                ]) ?>
                                            </div>
                                            <?php if (isset($product->preco)) : ?>
                                                <div class="d-flex align-self-end">
                                                    <strong><small>R$ <?= number_format($product->preco->preco_por, 2, ',', '.') ?></small></strong>
                                                </div>
                                            <?php else: ?>
                                                <div class="border rounded text-center">
                                                    <small>Valor do produto não cadastrado.</small><br>
                                                    <small><strong class="text-danger">O produto náo será exibido na loja até que um valor seja cadastrado!</strong></small>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <dic class="text-center">
                <nav aria-label="<?= __('Navegação de páginas')?>">
                    <?php if ($this->Paginator->counter('{{pages}}') >= 2) : ?>
                        <ul class="pagination pg-primary justify-content-center">
                            <?= $this->Paginator->first(__x('pagination', 'First')) ?>
                            <?= $this->Paginator->prev(__('Previous')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__x('pagination', 'Next')) ?>
                            <?= $this->Paginator->last(__x('pagination', 'Last')) ?>
                        </ul>
                    <?php endif;?>
                    <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, visualizando {{current}} registro(s) de um total de {{count}}')) ?></p>
                </nav>
            </dic>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        document.querySelectorAll('.list-group-item > div > #carouselControls > .carousel-inner').forEach((element, i) => {
            var childrens = Array.from(element.children)
            childrens[0].classList.add("active");
        })
        $('.carousel').carousel();
    })
</script>