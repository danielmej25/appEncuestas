<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserTest $userTest
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Test'), ['action' => 'edit', $userTest->id_user_test]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Test'), ['action' => 'delete', $userTest->id_user_test], ['confirm' => __('Are you sure you want to delete # {0}?', $userTest->id_user_test)]) ?> </li>
        <li><?= $this->Html->link(__('List User Tests'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Test'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userTests view large-9 medium-8 columns content">
    <h3><?= h($userTest->id_user_test) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Url Page') ?></th>
            <td><?= h($userTest->url_page) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($userTest->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id User Test') ?></th>
            <td><?= $this->Number->format($userTest->id_user_test) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Test') ?></th>
            <td><?= $this->Number->format($userTest->id_test) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Max Date') ?></th>
            <td><?= h($userTest->max_date) ?></td>
        </tr>
    </table>
</div>
