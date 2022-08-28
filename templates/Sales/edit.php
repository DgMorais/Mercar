<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sale $sale
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $enderecos
 * @var string[]|\Cake\Collection\CollectionInterface $cupons
 * @var string[]|\Cake\Collection\CollectionInterface $paymentsQueue
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sale->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sale->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sales'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sales form content">
            <?= $this->Form->create($sale) ?>
            <fieldset>
                <legend><?= __('Edit Sale') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('address_id', ['options' => $enderecos, 'empty' => true]);
                    echo $this->Form->control('valor');
                    echo $this->Form->control('cupom_id', ['options' => $cupons, 'empty' => true]);
                    echo $this->Form->control('desconto');
                    echo $this->Form->control('valor_final');
                    echo $this->Form->control('destinatario');
                    echo $this->Form->control('forma_pagamento');
                    echo $this->Form->control('parcelas');
                    echo $this->Form->control('liberado');
                    echo $this->Form->control('status_pagseguro');
                    echo $this->Form->control('id_pagseguro');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
