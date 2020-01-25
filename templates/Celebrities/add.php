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
            <?= $this->Html->link(__('List Celebrities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="celebrities form content">
            <?= $this->Form->create($celebrity) ?>
            <fieldset>
                <legend><?= __('Add Celebrity') ?></legend>
                <?php
                    echo $this->Form->control('names');
                    echo $this->Form->control('phone_number');
                    echo $this->Form->control('Status');
                    echo $this->Form->control('category_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
