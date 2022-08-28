<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sale[]|\Cake\Collection\CollectionInterface $sales
 */
?>
<div class="sales index content">
    <?= $this->Html->link(__('New Sale'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sales') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('address_id') ?></th>
                    <th><?= $this->Paginator->sort('valor') ?></th>
                    <th><?= $this->Paginator->sort('cupom_id') ?></th>
                    <th><?= $this->Paginator->sort('desconto') ?></th>
                    <th><?= $this->Paginator->sort('valor_final') ?></th>
                    <th><?= $this->Paginator->sort('forma_pagamento') ?></th>
                    <th><?= $this->Paginator->sort('parcelas') ?></th>
                    <th><?= $this->Paginator->sort('liberado') ?></th>
                    <th><?= $this->Paginator->sort('status_pagseguro') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sales as $sale): ?>
                <tr>
                    <td><?= $this->Number->format($sale->id) ?></td>
                    <td><?= $sale->has('user') ? $this->Html->link($sale->user->id, ['controller' => 'Users', 'action' => 'view', $sale->user->id]) : '' ?></td>
                    <td><?= $sale->has('endereco') ? $this->Html->link($sale->endereco->id, ['controller' => 'Enderecos', 'action' => 'view', $sale->endereco->id]) : '' ?></td>
                    <td><?= $this->Number->format($sale->valor) ?></td>
                    <td><?= $sale->has('cupon') ? $this->Html->link($sale->cupon->id, ['controller' => 'Cupons', 'action' => 'view', $sale->cupon->id]) : '' ?></td>
                    <td><?= $this->Number->format($sale->desconto) ?></td>
                    <td><?= $this->Number->format($sale->valor_final) ?></td>
                    <td><?= h($sale->forma_pagamento) ?></td>
                    <td><?= $sale->parcelas === null ? '' : $this->Number->format($sale->parcelas) ?></td>
                    <td><?= h($sale->liberado) ?></td>
                    <td><?= h($sale->status_pagseguro) ?></td>
                    <td><?= h($sale->created) ?></td>
                    <td><?= h($sale->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $sale->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sale->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sale->id)]) ?>
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
