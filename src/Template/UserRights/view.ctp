<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Right'), ['action' => 'edit', $userRight->user_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Right'), ['action' => 'delete', $userRight->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRight->user_id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Rights'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Right'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userRights view large-9 medium-8 columns content">
    <h3><?= h($userRight->user_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $userRight->has('user') ? $this->Html->link($userRight->user->id, ['controller' => 'Users', 'action' => 'view', $userRight->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Fitur1') ?></th>
            <td><?= h($userRight->fitur1) ?></td>
        </tr>
        <tr>
            <th><?= __('Fitur2') ?></th>
            <td><?= h($userRight->fitur2) ?></td>
        </tr>
        <tr>
            <th><?= __('Fitur3') ?></th>
            <td><?= h($userRight->fitur3) ?></td>
        </tr>
    </table>
</div>
