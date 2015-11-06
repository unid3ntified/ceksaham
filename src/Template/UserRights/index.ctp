<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Right'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userRights index large-9 medium-8 columns content">
    <h3><?= __('User Rights') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('fitur1') ?></th>
                <th><?= $this->Paginator->sort('fitur2') ?></th>
                <th><?= $this->Paginator->sort('fitur3') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userRights as $userRight): ?>
            <tr>
                <td><?= $userRight->has('user') ? $this->Html->link($userRight->user->id, ['controller' => 'Users', 'action' => 'view', $userRight->user->id]) : '' ?></td>
                <td><?= h($userRight->fitur1) ?></td>
                <td><?= h($userRight->fitur2) ?></td>
                <td><?= h($userRight->fitur3) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userRight->user_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userRight->user_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userRight->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRight->user_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
