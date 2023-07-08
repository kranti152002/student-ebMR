gi<?php

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
<html><head>
    <style>
   th,td{padding:20px;
        text-align:left;
        font-size: 20px;}</style>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id], ['class' => 'side-nav-item']) ?>&#160;
            <?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id), 'class' => 'side-nav-item']) ?>&#160;
            <?= $this->Html->link(__('List Student'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>&#160;
            <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>&#160;
        </div>
    </aside><section class="content">
      <div class="row">
       
          <div class="box box-primary">
            <div class="box-header with-border" >
            <div class="text-center">
              <h3 class="box-title ">Student data</h3>
            </div></div>
            <!-- /.box-header -->
            
    <div class="column-responsive column-80">
        <div class="subject view content">
        
              
            <h3><?= h($student->id) ?></h3>
            <table class="table table-bordered">
            <div class="row">
        <div class="col-md-6">
          
            <div class="box-header with-border">
</table>
       
            
<div class="text-center">
          <?php echo $this->Html->image($student->image, ['class' => 'align:center','style'=>'width: 250px']);?></div>
            <br><br>
            

            

<table class="table table-bordered" ><div class="hello">
            <tr>
              <th><?= __('Student Name :') ?></th>
                   <td> <?= h($student->student_name) ?></td>
</tr>
     <tr><th> <?= __('Student Address :') ?></th>
                   <td> <?= h($student->student_address) ?></td></tr>
      <tr>
        <th> <?= __('Email :') ?></th>
                  <td>  <?= h($student->email) ?></td>
</tr>
      <tr> 
        <th><?= __('Gender :') ?></th>
                   <td> <?= h($student->gender) ?></td>>
</tr>
      <tr> 
        <th><?= __('Id :') ?></th>
                    <td><?= $this->Number->format($student->id) ?></td>
</tr>
      <tr>
        <th> <?= __('Division Number :') ?></th>
                    <td><?= $this->Number->format($student->division_id) ?></td>
</tr>
      <tr>
        <th> <?= __('Branch Id :') ?></th>
                    <td><?= $this->Number->format($student->branch_id) ?></td>
</tr>
      <tr>
        <th><?= __('Semester Id :') ?></th>
                    <td><?= $this->Number->format($student->semester_id) ?></td>
</tr>

      <tr>
        <th><?= __('City Id :') ?></th>
                   <td> <?= $this->Number->format($student->city_id) ?> </td>
      </tr>
      <tr>
        <th><?= __('State Id :') ?></th>
                    <td><?= $this->Number->format($student->state_id) ?> </td>
</tr>
      <tr>
        <th><?= __('Postalcode :') ?></th>
                    <td><?= $this->Number->format($student->postalcode) ?></td>
</tr>
      <tr>
        <th><?= __('Phone Number :') ?></th>
                    <td><?= $this->Number->format($student->phone_number) ?></td>
</tr>
      <tr>
        <th><?= __('Created :') ?></th>
                  <td>  <?= h($student->created) ?></td>
</tr>
<<tr>
      <th><?= __('Modified :') ?></th>
                    <td><?= h($student->modified) ?></td>
  </tr>
                    <tr>
                      <th><?= __('Status  :') ?></th>
                    <td><?= $student->status ? __('Yes') : __('No'); ?></td>
</tr>
    </div></div>
</table>
              



















    
    