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
            <?= $this->Html->link(__('Edit Response Queue'), ['action' => 'edit', $responseQueue->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Response Queue'), ['action' => 'delete', $responseQueue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $responseQueue->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Response Queue'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Response Queue'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="responseQueue view content">
            <h3><?= h($responseQueue->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Redirect') ?></th>
                    <td><?= h($responseQueue->redirect) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($responseQueue->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment Id') ?></th>
                    <td><?= $this->Number->format($responseQueue->payment_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($responseQueue->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tries') ?></th>
                    <td><?= $this->Number->format($responseQueue->tries) ?></td>
                </tr>
                <tr>
                    <th><?= __('Begin') ?></th>
                    <td><?= h($responseQueue->begin) ?></td>
                </tr>
                <tr>
                    <th><?= __('End') ?></th>
                    <td><?= h($responseQueue->end) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($responseQueue->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($responseQueue->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Data Raw') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($responseQueue->data_raw)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Erros') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($responseQueue->erros)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
