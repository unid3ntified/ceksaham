<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($userRight) ?>
    <fieldset>
        <legend><?= __('Edit User: ').$user->email ?></legend>
        <?php
            $options = ['none' => 'none', 'read' => 'read', 'write' => 'write'];
            echo $this->Form->input('fitur1', [
                'type' => 'select',
                'options' => $options,
                'label' => 'Privilege for managing User:'
            ]);
            echo $this->Form->input('fitur2', [
                'type' => 'select',
                'options' => $options,
                'label' => 'Privilege for managing Emiten:'
            ]);
            echo $this->Form->input('fitur3', [
                'type' => 'select',
                'options' => $options,
                'label' => 'Privilege for managing Financial Statement:'
            ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
