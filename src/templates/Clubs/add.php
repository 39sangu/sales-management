<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Club $club
 * @var \Cake\Collection\CollectionInterface|string[] $teachers
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Clubs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clubs form content">
            <?= $this->Form->create($club) ?>
            <fieldset>
                <legend><?= __('クラブの登録') ?></legend>
                <?php
                    echo $this->Form->control('部活名');
                    echo $this->Form->control('教員', ['options' => $teachers]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('登録')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
