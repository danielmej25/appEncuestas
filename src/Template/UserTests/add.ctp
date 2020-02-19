<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserTest $userTest
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List User Tests'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="userTests form large-9 medium-8 columns content">
    <?= $this->Form->create($userTest) ?>
    <fieldset>
        <legend><?= __('Add User Test') ?></legend>
        <?php
            echo $this->Form->control('url_page');
            echo $this->Form->control('max_date');
            echo $this->Form->control('id_test');
            echo $this->Form->control('username');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
