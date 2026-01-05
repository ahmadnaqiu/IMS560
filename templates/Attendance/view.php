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
            <?= $this->Html->link(__('Edit Attendance'), ['action' => 'edit', $attendance->attendance_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Attendance'), ['action' => 'delete', $attendance->attendance_id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendance->attendance_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Attendance'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Attendance'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="attendance view content">
            <h3><?= h($attendance->status) ?></h3>
            <table>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($attendance->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Attendance Id') ?></th>
                    <td><?= $this->Number->format($attendance->attendance_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Student Id') ?></th>
                    <td><?= $this->Number->format($attendance->student_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lecturer Id') ?></th>
                    <td><?= $this->Number->format($attendance->lecturer_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Id') ?></th>
                    <td><?= $this->Number->format($attendance->subject_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($attendance->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Time') ?></th>
                    <td><?= h($attendance->time) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>