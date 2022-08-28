<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cupon $cupon
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cupon'), ['action' => 'edit', $cupon->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cupon'), ['action' => 'delete', $cupon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cupon->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cupons'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cupon'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cupons view content">
            <h3><?= h($cupon->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $cupon->has('category') ? $this->Html->link($cupon->category->id, ['controller' => 'Categories', 'action' => 'view', $cupon->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cupon->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Desconto') ?></th>
                    <td><?= $this->Number->format($cupon->tipo_desconto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Real') ?></th>
                    <td><?= $this->Number->format($cupon->valor_real) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Porcentagem') ?></th>
                    <td><?= $this->Number->format($cupon->valor_porcentagem) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qtd Usos') ?></th>
                    <td><?= $this->Number->format($cupon->qtd_usos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Validade') ?></th>
                    <td><?= h($cupon->validade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($cupon->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($cupon->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $cupon->status ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Codigo') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($cupon->codigo)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
