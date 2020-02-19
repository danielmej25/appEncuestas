<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evaluation $evaluation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Evaluations'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="evaluations form large-9 medium-8 columns content">
    <?= $this->Form->create($evaluation) ?>
    <fieldset>
        <legend><?= __('Add Evaluation') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('token');
            echo $this->Form->control('state');
            echo $this->Form->control('age');
            echo $this->Form->control('gender');
            echo $this->Form->control('location');
            echo $this->Form->control('date');
            echo $this->Form->control('id_user_test');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
