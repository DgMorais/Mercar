<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Preco $preco
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Preco'), ['action' => 'edit', $preco->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Preco'), ['action' => 'delete', $preco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $preco->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Precos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Preco'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="precos view content">
            <h3><?= h($preco->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($preco->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Id') ?></th>
                    <td><?= $this->Number->format($preco->product_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preco De') ?></th>
                    <td><?= $preco->preco_de === null ? '' : $this->Number->format($preco->preco_de) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preco Por') ?></th>
                    <td><?= $this->Number->format($preco->preco_por) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($preco->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($preco->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $preco->status ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Products') ?></h4>
                <?php if (!empty($preco->products)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Store Id') ?></th>
                            <th><?= __('Nome') ?></th>
                            <th><?= __('Descricao') ?></th>
                            <th><?= __('Slug') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Images') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($preco->products as $products) : ?>
                        <tr>
                            <td><?= h($products->id) ?></td>
                            <td><?= h($products->user_id) ?></td>
                            <td><?= h($products->store_id) ?></td>
                            <td><?= h($products->nome) ?></td>
                            <td><?= h($products->descricao) ?></td>
                            <td><?= h($products->slug) ?></td>
                            <td><?= h($products->status) ?></td>
                            <td><?= h($products->images) ?></td>
                            <td><?= h($products->created) ?></td>
                            <td><?= h($products->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
