<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Store $store
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Store'), ['action' => 'edit', $store->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Store'), ['action' => 'delete', $store->id], ['confirm' => __('Are you sure you want to delete # {0}?', $store->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Stores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Store'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stores view content">
            <h3><?= h($store->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $store->has('user') ? $this->Html->link($store->user->id, ['controller' => 'Users', 'action' => 'view', $store->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($store->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Razao Social') ?></th>
                    <td><?= h($store->razao_social) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cnpj') ?></th>
                    <td><?= h($store->cnpj) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cep') ?></th>
                    <td><?= h($store->cep) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rua') ?></th>
                    <td><?= h($store->rua) ?></td>
                </tr>
                <tr>
                    <th><?= __('Complemento') ?></th>
                    <td><?= h($store->complemento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bairro') ?></th>
                    <td><?= h($store->bairro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cidade') ?></th>
                    <td><?= h($store->cidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($store->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Slug') ?></th>
                    <td><?= h($store->slug) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($store->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= $store->numero === null ? '' : $this->Number->format($store->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($store->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($store->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $store->status ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descricao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($store->descricao)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Images') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($store->images)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Precos') ?></h4>
                <?php if (!empty($store->precos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Store Id') ?></th>
                            <th><?= __('Preco De') ?></th>
                            <th><?= __('Preco Por') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($store->precos as $precos) : ?>
                        <tr>
                            <td><?= h($precos->id) ?></td>
                            <td><?= h($precos->user_id) ?></td>
                            <td><?= h($precos->store_id) ?></td>
                            <td><?= h($precos->preco_de) ?></td>
                            <td><?= h($precos->preco_por) ?></td>
                            <td><?= h($precos->status) ?></td>
                            <td><?= h($precos->created) ?></td>
                            <td><?= h($precos->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Precos', 'action' => 'view', $precos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Precos', 'action' => 'edit', $precos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Precos', 'action' => 'delete', $precos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $precos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Products') ?></h4>
                <?php if (!empty($store->products)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Store Id') ?></th>
                            <th><?= __('Preco Id') ?></th>
                            <th><?= __('Nome') ?></th>
                            <th><?= __('Descricao') ?></th>
                            <th><?= __('Slug') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Images') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($store->products as $products) : ?>
                        <tr>
                            <td><?= h($products->id) ?></td>
                            <td><?= h($products->user_id) ?></td>
                            <td><?= h($products->store_id) ?></td>
                            <td><?= h($products->preco_id) ?></td>
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
