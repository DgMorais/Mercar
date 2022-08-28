<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserRequest $userRequest
 * @var string[]|\Cake\Collection\CollectionInterface $sales
 * @var string[]|\Cake\Collection\CollectionInterface $products
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userRequest->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userRequest->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List User Requests'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userRequests form content">
            <?= $this->Form->create($userRequest) ?>
            <fieldset>
                <legend><?= __('Edit User Request') ?></legend>
                <?php
                    echo $this->Form->control('sale_id', ['options' => $sales]);
                    echo $this->Form->control('product_id', ['options' => $products]);
                    echo $this->Form->control('valor');
                    echo $this->Form->control('liberado');
                    echo $this->Form->control('observacoes');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
