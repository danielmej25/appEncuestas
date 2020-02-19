<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evaluation $evaluation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Evaluation'), ['action' => 'edit', $evaluation->id_evaluation]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Evaluation'), ['action' => 'delete', $evaluation->id_evaluation], ['confirm' => __('Are you sure you want to delete # {0}?', $evaluation->id_evaluation)]) ?> </li>
        <li><?= $this->Html->link(__('List Evaluations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evaluation'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="evaluations view large-9 medium-8 columns content">
    <h3><?= h($evaluation->id_evaluation) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($evaluation->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Token') ?></th>
            <td><?= h($evaluation->token) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($evaluation->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($evaluation->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Evaluation') ?></th>
            <td><?= $this->Number->format($evaluation->id_evaluation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($evaluation->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id User Test') ?></th>
            <td><?= $this->Number->format($evaluation->id_user_test) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($evaluation->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $evaluation->state ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
