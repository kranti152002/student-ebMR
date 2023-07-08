<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Division $division
 * @var \App\Model\Entity\Faculty $faculty
 * @var \App\Model\Entity\Branch $branch
  */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $division->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $division->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Division'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="division form content">
            <?= $this->Form->create($division) ?>
            <fieldset>
                <legend><?= __('Edit Division') ?></legend>
                <?php
                    echo $this->Form->control('faculty_id',['options' => $faculty]);
                    echo $this->Form->control('division_number');
                    echo $this->Form->control('strength');
                    echo $this->Form->control('branch_id',['options' => $branch]);
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
