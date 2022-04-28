<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 * @var \Cake\Collection\CollectionInterface|string[] $clubs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Students'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="students form content">
            <?= $this->Form->create($student) ?>
            <fieldset>
                <legend><?= __('学生登録') ?></legend>
                <?php
                    echo $this->Form->control('名前');
                    echo $this->Form->control('性別');
                    echo $this->Form->control('生年月日');
                    echo $this->Form->control('学年');
                    echo $this->Form->control('クラス');
                    echo $this->Form->control('部活名', ['options' => $clubs]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('登録')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
