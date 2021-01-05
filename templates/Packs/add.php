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
            <?= $this->Html->link(__('List Packs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="packs form content">
            <?= $this->Form->create($pack) ?>
            <fieldset>
                <legend><?= __('Add Pack') ?></legend>
                <?php
                    echo $this->Form->control('amount');
                    echo $this->Form->control('ProductName');
                    echo $this->Form->control('pack_length');
                    echo $this->Form->control('unit');
                    echo $this->Form->control('period');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
