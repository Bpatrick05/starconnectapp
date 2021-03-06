<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Category'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categories view content">
            <h3><?= h($category->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Category Name') ?></th>
                    <td><?= h($category->category_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($category->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($category->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Celebrities') ?></h4>
                <?php if (!empty($category->celebrities)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Names') ?></th>
                            <th><?= __('Phone Number') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($category->celebrities as $celebrities) : ?>
                        <tr>
                            <td><?= h($celebrities->id) ?></td>
                            <td><?= h($celebrities->names) ?></td>
                            <td><?= h($celebrities->phone_number) ?></td>
                            <td><?= h($celebrities->Status) ?></td>
                            <td><?= h($celebrities->category_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Celebrities', 'action' => 'view', $celebrities->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Celebrities', 'action' => 'edit', $celebrities->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Celebrities', 'action' => 'delete', $celebrities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $celebrities->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
