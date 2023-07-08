<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Semester $semester
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $semester->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $semester->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Semester'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="semester form content">
            <?= $this->Form->create($semester) ?>
            <fieldset>
                <legend><?= __('Edit Semester') ?></legend>
                <?php
                    echo $this->Form->control('branch_id',[ 'options' => $branch]);
                    echo $this->Form->control('sem_number');
                    echo $this->Form->control('year');
                    echo $this->Form->control('fees');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
