<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PaymentsQueue $paymentsQueue
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Payments Queue'), ['action' => 'edit', $paymentsQueue->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Payments Queue'), ['action' => 'delete', $paymentsQueue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paymentsQueue->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Payments Queue'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Payments Queue'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="paymentsQueue view content">
            <h3><?= h($paymentsQueue->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($paymentsQueue->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sale Id') ?></th>
                    <td><?= $this->Number->format($paymentsQueue->sale_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($paymentsQueue->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tries') ?></th>
                    <td><?= $this->Number->format($paymentsQueue->tries) ?></td>
                </tr>
                <tr>
                    <th><?= __('Begin') ?></th>
                    <td><?= h($paymentsQueue->begin) ?></td>
                </tr>
                <tr>
                    <th><?= __('End') ?></th>
                    <td><?= h($paymentsQueue->end) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($paymentsQueue->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($paymentsQueue->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Data Raw') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($paymentsQueue->data_raw)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Erros') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($paymentsQueue->erros)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Request') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($paymentsQueue->request)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Sales') ?></h4>
                <?php if (!empty($paymentsQueue->sales)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Address Id') ?></th>
                            <th><?= __('Valor') ?></th>
                            <th><?= __('Cupom Id') ?></th>
                            <th><?= __('Desconto') ?></th>
                            <th><?= __('Valor Final') ?></th>
                            <th><?= __('Destinatario') ?></th>
                            <th><?= __('Forma Pagamento') ?></th>
                            <th><?= __('Parcelas') ?></th>
                            <th><?= __('Liberado') ?></th>
                            <th><?= __('Status Moip') ?></th>
                            <th><?= __('Token Moip') ?></th>
                            <th><?= __('Id Moip') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($paymentsQueue->sales as $sales) : ?>
                        <tr>
                            <td><?= h($sales->id) ?></td>
                            <td><?= h($sales->user_id) ?></td>
                            <td><?= h($sales->address_id) ?></td>
                            <td><?= h($sales->valor) ?></td>
                            <td><?= h($sales->cupom_id) ?></td>
                            <td><?= h($sales->desconto) ?></td>
                            <td><?= h($sales->valor_final) ?></td>
                            <td><?= h($sales->destinatario) ?></td>
                            <td><?= h($sales->forma_pagamento) ?></td>
                            <td><?= h($sales->parcelas) ?></td>
                            <td><?= h($sales->liberado) ?></td>
                            <td><?= h($sales->status_moip) ?></td>
                            <td><?= h($sales->token_moip) ?></td>
                            <td><?= h($sales->id_moip) ?></td>
                            <td><?= h($sales->created) ?></td>
                            <td><?= h($sales->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Sales', 'action' => 'view', $sales->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Sales', 'action' => 'edit', $sales->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sales', 'action' => 'delete', $sales->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sales->id)]) ?>
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
