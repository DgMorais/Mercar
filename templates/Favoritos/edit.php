<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Favorito $favorito
 * @var string[]|\Cake\Collection\CollectionInterface $products
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $favorito->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $favorito->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Favoritos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="favoritos form content">
            <?= $this->Form->create($favorito) ?>
            <fieldset>
                <legend><?= __('Edit Favorito') ?></legend>
                <?php
                    echo $this->Form->control('product_id', ['options' => $products]);
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
