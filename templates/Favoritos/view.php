<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Favorito $favorito
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Favorito'), ['action' => 'edit', $favorito->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Favorito'), ['action' => 'delete', $favorito->id], ['confirm' => __('Are you sure you want to delete # {0}?', $favorito->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Favoritos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Favorito'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="favoritos view content">
            <h3><?= h($favorito->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $favorito->has('product') ? $this->Html->link($favorito->product->id, ['controller' => 'Products', 'action' => 'view', $favorito->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $favorito->has('user') ? $this->Html->link($favorito->user->id, ['controller' => 'Users', 'action' => 'view', $favorito->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($favorito->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($favorito->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($favorito->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
