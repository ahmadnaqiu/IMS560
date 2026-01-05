<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Attendance> $attendance
 */
?>
<div class="attendance index content">
    <?= $this->Html->link(__('New Attendance'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Attendance') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('attendance_id') ?></th>
                    <th><?= $this->Paginator->sort('student_id') ?></th>
                    <th><?= $this->Paginator->sort('lecturer_id') ?></th>
                    <th><?= $this->Paginator->sort('subject_id') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('time') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($attendance as $attendance): ?>
                <tr>
                    <td><?= $this->Number->format($attendance->attendance_id) ?></td>
                    <td><?= $this->Number->format($attendance->student_id) ?></td>
                    <td><?= $this->Number->format($attendance->lecturer_id) ?></td>
                    <td><?= $this->Number->format($attendance->subject_id) ?></td>
                    <td><?= h($attendance->status) ?></td>
                    <td><?= h($attendance->date) ?></td>
                    <td><?= h($attendance->time) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $attendance->attendance_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $attendance->attendance_id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $attendance->attendance_id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $attendance->attendance_id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
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