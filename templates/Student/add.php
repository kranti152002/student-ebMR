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
?><html>

<head><style>
.hi{padding: 30px;
}</style></head>
<div class="row">
    <aside class="column col-sm-3">
        <div class="side-nav">
            <h1 class="heading"><?= __(' Actions') ?></h1>
          <h3>  <?= $this->Html->link(__('List Student'), ['action' => 'index'], ['class' => 'label label-primary']) ?></h3>
        </div>
    </aside>
    <div class="column col-sm-9">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            
                                <?= $this->Form->create($student, ['class' => 'form-horizontal']) ?>
                                <fieldset>
                                    <legend><?= __('Add Student') ?></legend>
                                    
                                        
                                      
                                    <div class="col-xs-6 col-md-6">
                                        <?= $this->Form->control('division_id', [ 'options' => $division, 'class' => 'form-control col-md-6']) ?>
                                    </div>
                                    <div class="col-xs-6 col-md-6">
                                        <?= $this->Form->control('semester_id', [ 'options' => $semester, 'class' => 'form-control']) ?>
                                    </div>
                                   
                                    <div class="col-xs-6 col-md-6">
                                        <?= $this->Form->control('branch_id', [ 'options' => $branch, 'class' => 'form-control']) ?>
                                    </div>
                                        
                                   
                                    <div class="">
                                    <div class="col-xs-12 col-md-6">
                                        <?= $this->Form->control('student_name', ['class' => 'form-control']) ?>
                                    </div></div>
                                    <div class="">
                                    <div class="col-xs-12 col-md-6">
                                        <?= $this->Form->control('student_address', ['class' => 'form-control']) ?>
                                    </div></div>
                                    <div class="">
                                    <div class="col-xs-12 col-md-6">
                                        <?= $this->Form->control('city_id', [ 'options' => $city, 'class' => 'form-control']) ?>
                                    </div></div>
                                    <div class=""> 
                                    <div class="col-xs-12 col-md-6">
                                        <?= $this->Form->control('state_id', [ 'options' => $state, 'class' => 'form-control']) ?>
                                    </div></div>
                                    <div class="">
                                    <div class="col-xs-12 col-md-6">
                                        <?= $this->Form->control('postalcode', ['class' => 'form-control']) ?>
                                    </div></div>
                                    <div class="">
                                    <div class="col-xs-12 col-md-6">
                                        <?= $this->Form->control('phone_number', ['class' => 'form-control']) ?>
                                    </div></div>
                                    <div class="">
                                    <div class="col-xs-12 col-md-6">
                                        <?= $this->Form->control('email', ['class' => 'form-control']) ?>
                                    </div></div>
                                    <div class="">
                                    <div class="col-xs-12 col-md-6">
                                        <?= $this->Form->control('gender', [ 'options' => ['Male' => 'Male', 'Female' => 'Female'], 'class' => 'form-control']) ?>
                                    </div></div>
                                    <div class="">
                                    <div class="col-xs-12 col-md-6">
                                        <?= $this->Form->control('image', ['type' => 'file', 'class' => 'form-control']) ?>
                                    </div></div>
                                    <div class="">
                                    <div class="col-xs-12 col-md-6">
                                        <?= $this->Form->control('status', [ 'options' => ['1' => 'Active', '0' => 'Inactive'], 'class' => 'form-control']) ?>
                                    </div></div>
                                </fieldset>
                                
                                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-info']) ?>
                                <?= $this->Form->end() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
