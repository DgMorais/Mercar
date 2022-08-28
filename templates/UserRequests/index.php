<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserRequest[]|\Cake\Collection\CollectionInterface $userRequests
 */
?>
<div class="userRequests index content">
    <?= $this->Html->link(__('New User Request'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('User Requests') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('sale_id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('valor') ?></th>
                    <th><?= $this->Paginator->sort('liberado') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userRequests as $userRequest): ?>
                <tr>
                    <td><?= $this->Number->format($userRequest->id) ?></td>
                    <td><?= $userRequest->has('sale') ? $this->Html->link($userRequest->sale->id, ['controller' => 'Sales', 'action' => 'view', $userRequest->sale->id]) : '' ?></td>
                    <td><?= $userRequest->has('product') ? $this->Html->link($userRequest->product->id, ['controller' => 'Products', 'action' => 'view', $userRequest->product->id]) : '' ?></td>
                    <td><?= $this->Number->format($userRequest->valor) ?></td>
                    <td><?= h($userRequest->liberado) ?></td>
                    <td><?= h($userRequest->created) ?></td>
                    <td><?= h($userRequest->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $userRequest->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userRequest->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userRequest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRequest->id)]) ?>
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
