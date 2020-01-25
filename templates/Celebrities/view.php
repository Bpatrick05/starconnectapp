<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $celebrity
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Celebrity'), ['action' => 'edit', $celebrity->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Celebrity'), ['action' => 'delete', $celebrity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $celebrity->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Celebrities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Celebrity'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="celebrities view content">
            <h3><?= h($celebrity->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Names') ?></th>
                    <td><?= h($celebrity->names) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($celebrity->Status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($celebrity->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone Number') ?></th>
                    <td><?= $this->Number->format($celebrity->phone_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category Id') ?></th>
                    <td><?= $this->Number->format($celebrity->category_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
