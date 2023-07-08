<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Examm $examm
 * @var \App\Model\Entity\Student $student
 * @var \App\Model\Entity\Subject $subject
 * @var \App\Model\Entity\College $college
 * @var \App\Model\Entity\Semester $semester
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Examm'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="examm form content">
            <?= $this->Form->create($examm) ?>
            <fieldset>
                <legend><?= __('Add Examm') ?></legend>
                <?php
                    echo $this->Form->control('college_id',['options'=> $college]);
                    echo $this->Form->control('student_id',['options'=> $student]);
                    echo $this->Form->control('subject_id',['options'=> $subject]);
                    echo $this->Form->control('semester_id',['options'=> $semester]);
                    echo $this->Form->control('marks');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
