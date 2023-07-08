<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Student> $student
 */
?>
<html><head>
    <style>.hello{
        padding:20px;
        text-align: center;
        font-size: 16px;
        
    }
    .table_wrapper{
    display: block;
    overflow-x: auto;
    white-space: nowrap;}</style>
</head>

<div class="row">
<aside class="column col-sm-2">
<div class="side-nav">
        <h1 class="heading"><?= __('Actions') ?></h1><hr>
       
            <h4>  <?= $this->Html->link(__('List division'), ['controller' => 'division','action' => 'index'], ['class' => 'side-nav-item']) ?><br>  
              <?= $this->Html->link(__('List semester'), ['controller' => 'semester','action' => 'index'], ['class' => 'side-nav-item']) ?><br>
              <?= $this->Html->link(__('List state'), ['controller' => 'state','action' => 'index'], ['class' => 'side-nav-item']) ?><br>
              <?= $this->Html->link(__('List student'), ['controller' => 'student','action' => 'index'], ['class' => 'side-nav-item']) ?><br>
              <?= $this->Html->link(__('List subject'), ['controller' => 'subject','action' => 'index'], ['class' => 'side-nav-item']) ?><br>
              <?= $this->Html->link(__('List faculty'), ['controller' => 'faculty','action' => 'index'], ['class' => 'side-nav-item']) ?><br>
              <?= $this->Html->link(__('List city'), ['controller' => 'city','action' => 'index'], ['class' => 'side-nav-item']) ?><br>
              <?= $this->Html->link(__('List branch'), ['controller' => 'branch','action' => 'index'], ['class' => 'side-nav-item']) ?> </h4>       
</div>
</aside>

<div class="column-responsive column-80">
<div class="column col-sm-9">
<section class="content">
      <div class="row">
        <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">student data table</h3>
            </div>
            <h4><?= $this->Html->link(__('... Add New Student...
            '), ['action' => 'add'], ['class' => ' label label-warning']) ?></h4>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="table_wrapper">
              <table id="example2" class="table table-bordered table-hover" class="table-responsive">
              <div class="col-xl-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder aria-controls="example1"></label></div></div>
                <thead>
          
                <tr class="hello">
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('division_id') ?></th>
                    <th><?= $this->Paginator->sort('branch_id') ?></th>
                    <th><?= $this->Paginator->sort('semester_id') ?></th>
                    <th><?= $this->Paginator->sort('student_name') ?></th>
                    <th><?= $this->Paginator->sort('student_address') ?></th>
                    <th><?= $this->Paginator->sort('city_id') ?></th>
                    <th><?= $this->Paginator->sort('state_id') ?></th>
                    <th><?= $this->Paginator->sort('postalcode') ?></th>
                    <th><?= $this->Paginator->sort('phone_number') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th></div>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($student as $student): ?>
                <tr class="hello">
                    <td><?= $this->Number->format($student->id) ?></td>
                    <td><?= $this->Number->format($student->division_id) ?></td>
                    <td><?= h($student->branch->Branch_name) ?></td>
                    <td><?= $this->Number->format($student->semester_id) ?></td>
                    <td><?= h($student->student_name) ?></td>
                    <td><?= h($student->student_address) ?></td>
                    <td><?= h($student->city->city_name) ?></td>
                    <td><?= h($student->state->state_name) ?></td>
                    <td><?= $this->Number->format($student->postalcode) ?></td>
                    <td><?= $this->Number->format($student->phone_number) ?></td>
                    <td><?= h($student->email) ?></td>
                    <td><?= h($student->gender) ?></td>
                    <td><?= h($student->image) ?></td>
                    <td><?= h($student->status) ?></td>
                    <td><?= h($student->created) ?></td>
                    <td><?= h($student->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $student->id],['class' =>'label label-warning']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $student->id],['class' =>'label label-success']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $student->id],['class' =>'label label-info'] ,['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table></div></div>
    </div></div></div>
    </div></div>
    
          
        
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
<?php echo $this->Html->css('AdminLTE./bower_components/datatables.net-bs/css/dataTables.bootstrap.min', ['block' => 'css']); ?>

<!-- DataTables -->
<?php echo $this->Html->script('AdminLTE./bower_components/datatables.net/js/jquery.dataTables.min', ['block' => 'script']); ?>
<?php echo $this->Html->script('AdminLTE./bower_components/datatables.net-bs/js/dataTables.bootstrap.min', ['block' => 'script']); ?>
