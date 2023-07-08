<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 * @var \App\Model\Entity\Dividion $division
 */
?>
<style>.container-fluid {
    padding: 60px 50px;
  }
  .bg-aqua{
    background: aquamarine;
  }
  
  </style>
<div class="yo">
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Student'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    
       
            

        </div>
    </div>
</div>
<div class="container-fluid bg-aqua">
  <h1 class="text-center">STUDENT INFORMATION</h1>
  <div class="row">
    <div class="col-sm-5">
    <h3><?= h($student->id) ?></h3>
      <p><span class="glyphicon glyphicon-phone"></span> <?= __('Student Name :') ?>
                    <?= h($student->student_name) ?></p>
      <p><span class="glyphicon glyphicon-phone"></span> <?= __('Student Address :') ?>
                    <?= h($student->student_address) ?></p>
      <p><span class="glyphicon glyphicon-envelope"></span> <?= __('Email :') ?>
                    <?= h($student->email) ?></p>
      <p><span class="glyphicon glyphicon-envelope"></span> <?= __('Gender :') ?>
                    <?= h($student->gender) ?></p>
      <p><span class="glyphicon glyphicon-envelope"></span> <?= __('Id :') ?>
                    <?= $this->Number->format($student->id) ?>
                </p>
      <p><span class="glyphicon glyphicon-envelope"></span> <?= __('Division Number :') ?>
                    <?= $this->Number->format($student->division_id) ?></p>
      <p><span class="glyphicon glyphicon-envelope"></span> <?= __('Branch Id :') ?>
                    <?= $this->Number->format($student->branch_id) ?></p>
      <p><span class="glyphicon glyphicon-envelope"></span><?= __('Semester Id :') ?>
                    <?= $this->Number->format($student->semester_id) ?></p>
      <p><span class="glyphicon glyphicon-envelope"></span><?= __('City Id :') ?>
                    <?= $this->Number->format($student->city_id) ?> </p>
      <p><span class="glyphicon glyphicon-envelope"></span><?= __('State Id :') ?>
                    <?= $this->Number->format($student->state_id) ?> </p>
      <p><span class="glyphicon glyphicon-envelope"></span><?= __('Postalcode :') ?>
                    <?= $this->Number->format($student->postalcode) ?></p>
      <p><span class="glyphicon glyphicon-envelope"></span><?= __('Phone Number :') ?></th>
                    <td><?= $this->Number->format($student->phone_number) ?></p>
      <p><span class="glyphicon glyphicon-envelope"></span><?= __('Created :') ?>
                    <?= h($student->created) ?></p>
      <p><span class="glyphicon glyphicon-envelope"></span><?= __('Modified :') ?>
                    <?= h($student->modified) ?></p>
                    <p><?= __('Status  :') ?>
                    <?= $student->status ? __('Yes') : __('No'); ?></p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <?php echo $this->Html->image('girl.jpg', ['alt' => 'image','height' => 400, 'width' => 500]);?>
      <img src="C:\xampp\htdocs\cakee\webroot\img\girl.jpg" class="img-rounded" alt="image">
</div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php

use Cake\Core\App;

 
/**
 * 
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 * @var \App\Model\Entity\Dividion $division
 *   @var \App\Model\Entity\Division $division
 *  @var \App\Model\Entity\Branch $branch
 *  @var \App\Model\Entity\Semseter $semester
 *  @var \App\Model\Entity\State $state
 *  @var \App\Model\Entity\City $city
 *  @var App\View\Helper\HtmlHelper;
 */
?>
<style>.container-fluid {
    padding: 60px 50px;
  }
  .bg-aqua{
    background: aquamarine;
  }
  .container
 {
    border-image-source: 12px;
     
 } 
 hr{
    border-color: blue;
    border-width: 1px;
  border-style: dotted;
 }
 .row{
    color:black;
     font-size:x-large;
     
     font-family: 'Times of new roman';
     
 }
 
  </style>
<div class="yo">
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Student'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    
       
            

        </div>
    </div>
</div>
<div class="container-fluid "style="background-color:#FFE4C4;">
  <h1 class="text-center">STUDENT INFORMATION</h1>
  <div class="row">
  <h1><?= h($student->id) ?></h1>
    <div class="col-sm-12">
    <div class="bg-1">
   
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center"  style="background-color:#FFA07A; ">
          <?php echo $this->Html->image($student->image, ['class' => 'img-fluid rounded-circle','style'=>'width: 250px']);?>
            <br><br>
            <h5 class="my-3"><?= __('Student Name :') ?>
                    <?= h($student->student_name) ?></h5></div>
</div>
</div>
            
     <div class="col-lg-8">
        <div class="card mb-4 ">
          <div class="card-body" style="background-color:#FFFACD;">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0"> <?= __('Student Address :') ?>
                    </p></div>
             <div class="col-sm-9">
                <p class="text-muted mb-0"><?= h($student->student_address) ?></p>
              </div>
            </div>
            <hr>
              
              <div class="row">
              <div class="col-sm-3">
                <p class="mb-0"> <?= __('Email :') ?>
                    </p></div>
             <div class="col-sm-9">
                <p class="text-muted mb-0"><?= h($student->email) ?></p>
              </div>
            </div>
            <hr>
              
              <div class="row">
              <div class="col-sm-3">
                <p class="mb-0"><?= __('Gender :') ?>
                    </p></div>
             <div class="col-sm-9">
                <p class="text-muted mb-0"><?= h($student->gender) ?></p>
              </div>
            </div>
            <hr>
              
              <div class="row">
              <div class="col-sm-3">
                <p class="mb-0"> <?= __('Id :') ?>
                    </p></div>
             <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $this->Number->format($student->id) ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0"> <?= __('Division Number :') ?>
                    </p></div>
             <div class="col-sm-9">
                <p class="text-muted mb-0"> <?= $this->Number->format($student->division_id) ?></p>
              </div>
            </div>
            <hr>
             
              <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">  <?= __('Branch Name :') ?>
                    </p></div>
             <div class="col-sm-9">
                <p class="text-muted mb-0"><?= h($student->branch->Branch_name) ?></p>
              </div>
            </div>
            <hr>
              
              <div class="row">
              <div class="col-sm-3">
                <p class="mb-0"> <?= __('Semester number:') ?>
                    </p></div>
             <div class="col-sm-9">
                <p class="text-muted mb-0"> <?= $this->Number->format($student->semester_id) ?></p>
              </div>
            </div>
            <hr>
              
              <div class="row">
              <div class="col-sm-3">
                <p class="mb-0"> <?= __('City Name :') ?>
                    </p></div>
             <div class="col-sm-9">
                <p class="text-muted mb-0"> <?= h($student->city_id) ?></p>
              </div>
            </div>
            <hr>
            
              <div class="row">
              <div class="col-sm-3">
                <p class="mb-0"><?= __('State Name :') ?>
                    </p></div>
             <div class="col-sm-9">
                <p class="text-muted mb-0"><?= h($student->state_id) ?></p>
              </div>
            </div>
            <hr>
              
              <div class="row">
              <div class="col-sm-3">
                <p class="mb-0"><?= __('Postalcode :') ?>
                    </p></div>
             <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $this->Number->format($student->postalcode) ?></p>
              </div>
            </div>
            <hr>
              
              <div class="row">
              <div class="col-sm-3">
                <p class="mb-0"> <?= __('Phone Number :') ?>
                    </p></div>
             <div class="col-sm-9">
                <p class="text-muted mb-0"><?= $this->Number->format($student->phone_number) ?></p>
              </div>
            </div>
            <hr>
              
              <div class="row">
              <div class="col-sm-3">
                <p class="mb-0"><?= __('Modified :') ?>
                    </p></div>
             <div class="col-sm-9">
                <p class="text-muted mb-0">  <?= h($student->modified) ?></p>
              </div>
            </div>
            <hr>
              
              <div class="row">
              <div class="col-sm-3">
                <p class="mb-0"><?= __('Status  :') ?>
                    </p></div>
             <div class="col-sm-9">
                <p class="text-muted mb-0">  <?= $student->status ? __('Yes') : __('No'); ?></p>
              </div>
            </div>
        