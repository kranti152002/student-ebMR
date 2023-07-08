<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 *  @var \App\Model\Entity\Division $division
 *  @var \App\Model\Entity\Branch $branch
 *  @var \App\Model\Entity\Semseter $semester
 *  @var \App\Model\Entity\State $state
 *  @var \App\Model\Entity\City $city
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $student->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $student->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Student'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="student form content">
            <?= $this->Form->create($student) ?>
            <fieldset>
                <legend><?= __('Edit Student') ?></legend>
                <?php
                 echo $this->Form->control('division_id',[ 'options' => $division]);
                 echo $this->Form->control('branch_id', [ 'options' => $branch]);
                 echo $this->Form->control('semester_id', [ 'options' => $semester]);
                 echo $this->Form->control('student_name');
                 echo $this->Form->control('student_address');
                 echo $this->Form->control('city_id', [ 'options' => $city]);
                 echo $this->Form->control('state_id',[ 'options' => $state] );
                 echo $this->Form->control('postalcode');
                 echo $this->Form->control('phone_number');
                 echo $this->Form->control('email');
                 echo $this->Form->control('gender');
                 echo $this->Form->control('image');
                 echo $this->Form->control('status');

                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
