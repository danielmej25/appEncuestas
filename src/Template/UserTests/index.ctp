<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserTest[]|\Cake\Collection\CollectionInterface $userTests
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Test'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userTests index large-9 medium-8 columns content">
    <h3><?= __('User Tests') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_user_test') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url_page') ?></th>
                <th scope="col"><?= $this->Paginator->sort('max_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_test') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userTests as $userTest): ?>
            <tr>
                <td><?= $this->Number->format($userTest->id_user_test) ?></td>
                <td><?= h($userTest->url_page) ?></td>
                <td><?= h($userTest->max_date) ?></td>
                <td><?= $this->Number->format($userTest->id_test) ?></td>
                <td><?= h($userTest->username) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userTest->id_user_test]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userTest->id_user_test]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userTest->id_user_test], ['confirm' => __('Are you sure you want to delete # {0}?', $userTest->id_user_test)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
