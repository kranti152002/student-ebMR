<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faculty $faculty
 *  @var \App\Model\Entity\City $city 
 * @var \App\Model\Entity\state $state
 *  @var \App\Model\Entity\Subject $subject 
 * @var \App\Model\Entity\Semester $semester
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Faculty'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="faculty form content">
            <?= $this->Form->create($faculty) ?>
            <fieldset>
                <legend><?= __('Add Faculty') ?></legend>
                <?php
                    echo $this->Form->control('subject_id',['options'=> $subject]);
                    echo $this->Form->control('faculty_name');
                    echo $this->Form->control('faculty_address');
                    echo $this->Form->control('city_id',['options'=> $city]);
                    echo $this->Form->control('state_id',['options'=> $state]);
                    echo $this->Form->control('postalcode');
                    echo $this->Form->control('semester_id',['options'=> $semester]);
                    echo $this->Form->control('phone_number');
                    echo $this->Form->control('experience');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('qualification');
                    echo $this->Form->control('salary');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
