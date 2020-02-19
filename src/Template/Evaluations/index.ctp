<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evaluation[]|\Cake\Collection\CollectionInterface $evaluations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Evaluation'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evaluations index large-9 medium-8 columns content">
    <h3><?= __('Evaluations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_evaluation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('token') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_user_test') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($evaluations as $evaluation): ?>
            <tr>
                <td><?= $this->Number->format($evaluation->id_evaluation) ?></td>
                <td><?= h($evaluation->email) ?></td>
                <td><?= h($evaluation->token) ?></td>
                <td><?= h($evaluation->state) ?></td>
                <td><?= $this->Number->format($evaluation->age) ?></td>
                <td><?= h($evaluation->gender) ?></td>
                <td><?= h($evaluation->location) ?></td>
                <td><?= h($evaluation->date) ?></td>
                <td><?= $this->Number->format($evaluation->id_user_test) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $evaluation->id_evaluation]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $evaluation->id_evaluation]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $evaluation->id_evaluation], ['confirm' => __('Are you sure you want to delete # {0}?', $evaluation->id_evaluation)]) ?>
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
