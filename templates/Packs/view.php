<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pack $pack
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pack'), ['action' => 'edit', $pack->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pack'), ['action' => 'delete', $pack->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pack->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Packs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pack'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="packs view content">
            <h3><?= h($pack->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('ProductName') ?></th>
                    <td><?= h($pack->ProductName) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unit') ?></th>
                    <td><?= h($pack->unit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Period') ?></th>
                    <td><?= h($pack->period) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pack->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $this->Number->format($pack->amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pack Length') ?></th>
                    <td><?= $this->Number->format($pack->pack_length) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
