<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cupon[]|\Cake\Collection\CollectionInterface $cupons
 */
?>
<div class="cupons index content">
    <?= $this->Html->link(__('New Cupon'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cupons') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('category_id') ?></th>
                    <th><?= $this->Paginator->sort('tipo_desconto') ?></th>
                    <th><?= $this->Paginator->sort('valor_real') ?></th>
                    <th><?= $this->Paginator->sort('valor_porcentagem') ?></th>
                    <th><?= $this->Paginator->sort('qtd_usos') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('validade') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cupons as $cupon): ?>
                <tr>
                    <td><?= $this->Number->format($cupon->id) ?></td>
                    <td><?= $cupon->has('category') ? $this->Html->link($cupon->category->id, ['controller' => 'Categories', 'action' => 'view', $cupon->category->id]) : '' ?></td>
                    <td><?= $this->Number->format($cupon->tipo_desconto) ?></td>
                    <td><?= $this->Number->format($cupon->valor_real) ?></td>
                    <td><?= $this->Number->format($cupon->valor_porcentagem) ?></td>
                    <td><?= $this->Number->format($cupon->qtd_usos) ?></td>
                    <td><?= h($cupon->status) ?></td>
                    <td><?= h($cupon->validade) ?></td>
                    <td><?= h($cupon->created) ?></td>
                    <td><?= h($cupon->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cupon->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cupon->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cupon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cupon->id)]) ?>
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
