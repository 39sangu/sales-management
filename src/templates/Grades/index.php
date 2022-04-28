<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grade[]|\Cake\Collection\CollectionInterface $grades
 */
?>
<div class="grades index content">
    <?= $this->Html->link(__('New Grade'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Grades') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('students_id') ?></th>
                    <th><?= $this->Paginator->sort('score') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($grades as $grade): ?>
                <tr>
                    <td><?= $this->Number->format($grade->id) ?></td>
                    <td><?= $grade->has('student') ? $this->Html->link($grade->student->name, ['controller' => 'Students', 'action' => 'view', $grade->student->id]) : '' ?></td>
                    <td><?= $this->Number->format($grade->score) ?></td>
                    <td><?= h($grade->created) ?></td>
                    <td><?= h($grade->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $grade->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $grade->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $grade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grade->id)]) ?>
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
