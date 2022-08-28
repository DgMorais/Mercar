<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('sobrenome');
                    echo $this->Form->control('slug');
                    echo $this->Form->control('data_nascimento', ['empty' => true]);
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('status');
                    echo $this->Form->control('group_id');
                    echo $this->Form->control('cpf');
                    echo $this->Form->control('modified_by');
                    echo $this->Form->control('token');
                    echo $this->Form->control('token_expires', ['empty' => true]);
                    echo $this->Form->control('last_login', ['empty' => true]);
                    echo $this->Form->control('avatar');
                    echo $this->Form->control('genero');
                    echo $this->Form->control('telefone');
                    echo $this->Form->control('celular');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
