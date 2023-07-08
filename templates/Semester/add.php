<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Branch $branch
 * @var \App\Model\Entity\Semester $semester
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Semester'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="semester form content">
            <?= $this->Form->create($semester) ?>
            <fieldset>
                <legend><?= __('Add Semester') ?></legend>
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
