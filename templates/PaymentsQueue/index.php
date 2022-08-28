<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PaymentsQueue[]|\Cake\Collection\CollectionInterface $paymentsQueue
 */
?>
<div class="paymentsQueue index content">
    <?= $this->Html->link(__('New Payments Queue'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Payments Queue') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('sale_id') ?></th>
                    <th><?= $this->Paginator->sort('begin') ?></th>
                    <th><?= $this->Paginator->sort('end') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('tries') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($paymentsQueue as $paymentsQueue): ?>
                <tr>
                    <td><?= $this->Number->format($paymentsQueue->id) ?></td>
                    <td><?= $this->Number->format($paymentsQueue->sale_id) ?></td>
                    <td><?= h($paymentsQueue->begin) ?></td>
                    <td><?= h($paymentsQueue->end) ?></td>
                    <td><?= $this->Number->format($paymentsQueue->status) ?></td>
                    <td><?= $this->Number->format($paymentsQueue->tries) ?></td>
                    <td><?= h($paymentsQueue->created) ?></td>
                    <td><?= h($paymentsQueue->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $paymentsQueue->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paymentsQueue->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paymentsQueue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paymentsQueue->id)]) ?>
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
