<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orders form content">
            <?= $this->Form->create($order) ?>
            <fieldset>
                <legend><?= __('Add Order') ?></legend>
                <?php
                echo $this->Form->control('total_amount', ['label' => 'Total order amount']);
                echo $this->Form->control('postcode');
                echo $this->Form->control('long_product');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Save and calculate')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
