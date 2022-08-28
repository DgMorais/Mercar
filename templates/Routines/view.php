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
            <?= $this->Html->link(__('Edit Routine'), ['action' => 'edit', $routine->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Routine'), ['action' => 'delete', $routine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $routine->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Routines'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Routine'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="routines view content">
            <h3><?= h($routine->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($routine->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($routine->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tries') ?></th>
                    <td><?= $this->Number->format($routine->tries) ?></td>
                </tr>
                <tr>
                    <th><?= __('Begin') ?></th>
                    <td><?= h($routine->begin) ?></td>
                </tr>
                <tr>
                    <th><?= __('End') ?></th>
                    <td><?= h($routine->end) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($routine->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($routine->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Command') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($routine->command)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Parameters') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($routine->parameters)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Erros') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($routine->erros)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
