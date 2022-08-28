<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Preco $preco
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $preco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $preco->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Precos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="precos form content">
            <?= $this->Form->create($preco) ?>
            <fieldset>
                <legend><?= __('Edit Preco') ?></legend>
                <?php
                    echo $this->Form->control('product_id');
                    echo $this->Form->control('preco_de');
                    echo $this->Form->control('preco_por');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
