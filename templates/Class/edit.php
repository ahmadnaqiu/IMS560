<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clas $clas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clas->class_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clas->class_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Class'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="class form content">
            <?= $this->Form->create($clas) ?>
            <fieldset>
                <legend><?= __('Edit Clas') ?></legend>
                <?php
                    echo $this->Form->control('class_name');
                    echo $this->Form->control('lecturer_id');
                    echo $this->Form->control('academic_year');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
