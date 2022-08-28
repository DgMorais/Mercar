<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PaymentsQueue $paymentsQueue
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $paymentsQueue->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $paymentsQueue->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Payments Queue'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="paymentsQueue form content">
            <?= $this->Form->create($paymentsQueue) ?>
            <fieldset>
                <legend><?= __('Edit Payments Queue') ?></legend>
                <?php
                    echo $this->Form->control('sale_id');
                    echo $this->Form->control('data_raw');
                    echo $this->Form->control('begin', ['empty' => true]);
                    echo $this->Form->control('end', ['empty' => true]);
                    echo $this->Form->control('status');
                    echo $this->Form->control('tries');
                    echo $this->Form->control('erros');
                    echo $this->Form->control('request');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
