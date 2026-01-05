<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendance $attendance
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $attendance->attendance_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $attendance->attendance_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Attendance'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="attendance form content">
            <?= $this->Form->create($attendance) ?>
            <fieldset>
                <legend><?= __('Edit Attendance') ?></legend>
                <?php
                    echo $this->Form->control('student_id');
                    echo $this->Form->control('lecturer_id');
                    echo $this->Form->control('subject_id');
                    echo $this->Form->control('status');
                    echo $this->Form->control('date');
                    echo $this->Form->control('time');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
