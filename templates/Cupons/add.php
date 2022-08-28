<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cupon $cupon
 * @var \Cake\Collection\CollectionInterface|string[] $categories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Cupons'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cupons form content">
            <?= $this->Form->create($cupon) ?>
            <fieldset>
                <legend><?= __('Add Cupon') ?></legend>
                <?php
                    echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true]);
                    echo $this->Form->control('tipo_desconto');
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('valor_real');
                    echo $this->Form->control('valor_porcentagem');
                    echo $this->Form->control('qtd_usos');
                    echo $this->Form->control('status');
                    echo $this->Form->control('validade', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
