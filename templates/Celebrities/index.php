<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $celebrities
 */
?>
<div class="celebrities index content">
    <?= $this->Html->link(__('New Celebrity'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Celebrities') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('names') ?></th>
                    <th><?= $this->Paginator->sort('phone_number') ?></th>
                    <th><?= $this->Paginator->sort('Status') ?></th>
                    <th><?= $this->Paginator->sort('category_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($celebrities as $celebrity): ?>
                <tr>
                    <td><?= $this->Number->format($celebrity->id) ?></td>
                    <td><?= h($celebrity->names) ?></td>
                    <td><?= $this->Number->format($celebrity->phone_number) ?></td>
                    <td><?= h($celebrity->Status) ?></td>
                    <td><?= $this->Number->format($celebrity->category_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $celebrity->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $celebrity->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $celebrity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $celebrity->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
