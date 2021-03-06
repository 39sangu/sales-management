<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grade $grade
 * @var string[]|\Cake\Collection\CollectionInterface $students
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $grade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $grade->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Grades'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="grades form content">
            <?= $this->Form->create($grade) ?>
            <fieldset>
                <legend><?= __('Edit Grade') ?></legend>
                <?php
                    echo $this->Form->control('students_id', ['options' => $students]);
                    echo $this->Form->control('score');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
