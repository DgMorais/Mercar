<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Favorito[]|\Cake\Collection\CollectionInterface $favoritos
 */
?>
<div class="favoritos index content">
    <?= $this->Html->link(__('New Favorito'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Favoritos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($favoritos as $favorito): ?>
                <tr>
                    <td><?= $this->Number->format($favorito->id) ?></td>
                    <td><?= $favorito->has('product') ? $this->Html->link($favorito->product->id, ['controller' => 'Products', 'action' => 'view', $favorito->product->id]) : '' ?></td>
                    <td><?= $favorito->has('user') ? $this->Html->link($favorito->user->id, ['controller' => 'Users', 'action' => 'view', $favorito->user->id]) : '' ?></td>
                    <td><?= h($favorito->created) ?></td>
                    <td><?= h($favorito->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $favorito->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $favorito->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $favorito->id], ['confirm' => __('Are you sure you want to delete # {0}?', $favorito->id)]) ?>
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
