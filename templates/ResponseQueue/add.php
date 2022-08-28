<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ResponseQueue $responseQueue
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Response Queue'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="responseQueue form content">
            <?= $this->Form->create($responseQueue) ?>
            <fieldset>
                <legend><?= __('Add Response Queue') ?></legend>
                <?php
                    echo $this->Form->control('payment_id');
                    echo $this->Form->control('data_raw');
                    echo $this->Form->control('redirect');
                    echo $this->Form->control('status');
                    echo $this->Form->control('tries');
                    echo $this->Form->control('begin', ['empty' => true]);
                    echo $this->Form->control('end', ['empty' => true]);
                    echo $this->Form->control('erros');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
