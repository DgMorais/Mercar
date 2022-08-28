<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Store[]|\Cake\Collection\CollectionInterface $stores
 */
?>
<div class="stores index content">
    <?= $this->Html->link(__('New Store'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Stores') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('razao_social') ?></th>
                    <th><?= $this->Paginator->sort('cnpj') ?></th>
                    <th><?= $this->Paginator->sort('cep') ?></th>
                    <th><?= $this->Paginator->sort('rua') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('complemento') ?></th>
                    <th><?= $this->Paginator->sort('bairro') ?></th>
                    <th><?= $this->Paginator->sort('cidade') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th><?= $this->Paginator->sort('slug') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stores as $store): ?>
                <tr>
                    <td><?= $this->Number->format($store->id) ?></td>
                    <td><?= $store->has('user') ? $this->Html->link($store->user->id, ['controller' => 'Users', 'action' => 'view', $store->user->id]) : '' ?></td>
                    <td><?= h($store->nome) ?></td>
                    <td><?= h($store->razao_social) ?></td>
                    <td><?= h($store->cnpj) ?></td>
                    <td><?= h($store->cep) ?></td>
                    <td><?= h($store->rua) ?></td>
                    <td><?= $store->numero === null ? '' : $this->Number->format($store->numero) ?></td>
                    <td><?= h($store->complemento) ?></td>
                    <td><?= h($store->bairro) ?></td>
                    <td><?= h($store->cidade) ?></td>
                    <td><?= h($store->estado) ?></td>
                    <td><?= h($store->slug) ?></td>
                    <td><?= h($store->status) ?></td>
                    <td><?= h($store->created) ?></td>
                    <td><?= h($store->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $store->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $store->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $store->id], ['confirm' => __('Are you sure you want to delete # {0}?', $store->id)]) ?>
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
