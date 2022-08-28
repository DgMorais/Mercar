<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cupon $cupon
 * @var string[]|\Cake\Collection\CollectionInterface $categories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cupon->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cupon->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cupons'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cupons form content">
            <?= $this->Form->create($cupon) ?>
            <fieldset>
                <legend><?= __('Edit Cupon') ?></legend>
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
