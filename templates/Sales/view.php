<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sale $sale
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sale'), ['action' => 'edit', $sale->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sale'), ['action' => 'delete', $sale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sale->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sales'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sale'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sales view content">
            <h3><?= h($sale->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $sale->has('user') ? $this->Html->link($sale->user->id, ['controller' => 'Users', 'action' => 'view', $sale->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereco') ?></th>
                    <td><?= $sale->has('endereco') ? $this->Html->link($sale->endereco->id, ['controller' => 'Enderecos', 'action' => 'view', $sale->endereco->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cupon') ?></th>
                    <td><?= $sale->has('cupon') ? $this->Html->link($sale->cupon->id, ['controller' => 'Cupons', 'action' => 'view', $sale->cupon->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Forma Pagamento') ?></th>
                    <td><?= h($sale->forma_pagamento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Pagseguro') ?></th>
                    <td><?= h($sale->status_pagseguro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sale->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor') ?></th>
                    <td><?= $this->Number->format($sale->valor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Desconto') ?></th>
                    <td><?= $this->Number->format($sale->desconto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Final') ?></th>
                    <td><?= $this->Number->format($sale->valor_final) ?></td>
                </tr>
                <tr>
                    <th><?= __('Parcelas') ?></th>
                    <td><?= $sale->parcelas === null ? '' : $this->Number->format($sale->parcelas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($sale->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($sale->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Liberado') ?></th>
                    <td><?= $sale->liberado ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Destinatario') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($sale->destinatario)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Id Pagseguro') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($sale->id_pagseguro)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related User Requests') ?></h4>
                <?php if (!empty($sale->user_requests)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Sale Id') ?></th>
                            <th><?= __('Product Id') ?></th>
                            <th><?= __('Valor') ?></th>
                            <th><?= __('Liberado') ?></th>
                            <th><?= __('Observacoes') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($sale->user_requests as $userRequests) : ?>
                        <tr>
                            <td><?= h($userRequests->id) ?></td>
                            <td><?= h($userRequests->sale_id) ?></td>
                            <td><?= h($userRequests->product_id) ?></td>
                            <td><?= h($userRequests->valor) ?></td>
                            <td><?= h($userRequests->liberado) ?></td>
                            <td><?= h($userRequests->observacoes) ?></td>
                            <td><?= h($userRequests->created) ?></td>
                            <td><?= h($userRequests->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'UserRequests', 'action' => 'view', $userRequests->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'UserRequests', 'action' => 'edit', $userRequests->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserRequests', 'action' => 'delete', $userRequests->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRequests->id)]) ?>
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
