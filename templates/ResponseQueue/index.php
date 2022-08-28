<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ResponseQueue[]|\Cake\Collection\CollectionInterface $responseQueue
 */
?>
<div class="responseQueue index content">
    <?= $this->Html->link(__('New Response Queue'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Response Queue') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('payment_id') ?></th>
                    <th><?= $this->Paginator->sort('redirect') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('tries') ?></th>
                    <th><?= $this->Paginator->sort('begin') ?></th>
                    <th><?= $this->Paginator->sort('end') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($responseQueue as $responseQueue): ?>
                <tr>
                    <td><?= $this->Number->format($responseQueue->id) ?></td>
                    <td><?= $this->Number->format($responseQueue->payment_id) ?></td>
                    <td><?= h($responseQueue->redirect) ?></td>
                    <td><?= $this->Number->format($responseQueue->status) ?></td>
                    <td><?= $this->Number->format($responseQueue->tries) ?></td>
                    <td><?= h($responseQueue->begin) ?></td>
                    <td><?= h($responseQueue->end) ?></td>
                    <td><?= h($responseQueue->created) ?></td>
                    <td><?= h($responseQueue->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $responseQueue->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $responseQueue->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $responseQueue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $responseQueue->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
