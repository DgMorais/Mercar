<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserRequest $userRequest
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User Request'), ['action' => 'edit', $userRequest->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User Request'), ['action' => 'delete', $userRequest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRequest->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List User Requests'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User Request'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userRequests view content">
            <h3><?= h($userRequest->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Sale') ?></th>
                    <td><?= $userRequest->has('sale') ? $this->Html->link($userRequest->sale->id, ['controller' => 'Sales', 'action' => 'view', $userRequest->sale->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $userRequest->has('product') ? $this->Html->link($userRequest->product->id, ['controller' => 'Products', 'action' => 'view', $userRequest->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($userRequest->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor') ?></th>
                    <td><?= $this->Number->format($userRequest->valor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($userRequest->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($userRequest->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Liberado') ?></th>
                    <td><?= $userRequest->liberado ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Observacoes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($userRequest->observacoes)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
