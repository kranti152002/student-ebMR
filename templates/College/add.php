<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\College $college
 *  @var \App\Model\Entity\City $city 
 * @var \App\Model\Entity\state $state
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List College'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="college form content">
            <?= $this->Form->create($college) ?>
            <fieldset>
                <legend><?= __('Add College') ?></legend>
                <?php
                    echo $this->Form->control('college_name');
                    echo $this->Form->control('principal_name');
                    echo $this->Form->control('phone_number');
                    echo $this->Form->control('address');
                    echo $this->Form->control('city_id',['options' => $city]);
                    echo $this->Form->control('state_id',['options' => $state]);
                    echo $this->Form->control('postalcode');
                    echo $this->Form->control('website');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
