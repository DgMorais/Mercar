<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Store $store
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $store->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $store->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Stores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stores form content">
            <?= $this->Form->create($store) ?>
            <fieldset>
                <legend><?= __('Edit Store') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('nome');
                    echo $this->Form->control('razao_social');
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('cnpj');
                    echo $this->Form->control('cep');
                    echo $this->Form->control('rua');
                    echo $this->Form->control('numero');
                    echo $this->Form->control('complemento');
                    echo $this->Form->control('bairro');
                    echo $this->Form->control('cidade');
                    echo $this->Form->control('estado');
                    echo $this->Form->control('slug');
                    echo $this->Form->control('status');
                    echo $this->Form->control('images');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
