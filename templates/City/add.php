<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\City $city 
 * @var \App\Model\Entity\state $state
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List City'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="city form content">
            <?= $this->Form->create($city) ?>
            <fieldset>
                <legend><?= __('Add City') ?></legend>
                <?php
                    echo $this->Form->control('state_id',['options' => $state]);
                    
                    
                    echo $this->Form->control('city_name');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
