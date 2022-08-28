<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Routine $routine
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Routines'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="routines form content">
            <?= $this->Form->create($routine) ?>
            <fieldset>
                <legend><?= __('Add Routine') ?></legend>
                <?php
                    echo $this->Form->control('command');
                    echo $this->Form->control('parameters');
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
