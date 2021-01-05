<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pack[]|\Cake\Collection\CollectionInterface $packs
 */
?>
<div class="packs index content">
    <?= $this->Html->link(__('New Pack'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Packs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('amount') ?></th>
                    <th><?= $this->Paginator->sort('ProductName') ?></th>
                    <th><?= $this->Paginator->sort('pack_length') ?></th>
                    <th><?= $this->Paginator->sort('unit') ?></th>
                    <th><?= $this->Paginator->sort('period') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($packs as $pack): ?>
                <tr>
                    <td><?= $this->Number->format($pack->id) ?></td>
                    <td><?= $this->Number->format($pack->amount) ?></td>
                    <td><?= h($pack->ProductName) ?></td>
                    <td><?= $this->Number->format($pack->pack_length) ?></td>
                    <td><?= h($pack->unit) ?></td>
                    <td><?= h($pack->period) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pack->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pack->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pack->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pack->id)]) ?>
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
