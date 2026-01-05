<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subject $subject
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Subject'), ['action' => 'edit', $subject->subject_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Subject'), ['action' => 'delete', $subject->subject_id], ['confirm' => __('Are you sure you want to delete # {0}?', $subject->subject_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Subject'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Subject'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="subject view content">
            <h3><?= h($subject->subject_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Subject Name') ?></th>
                    <td><?= h($subject->subject_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject Id') ?></th>
                    <td><?= $this->Number->format($subject->subject_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lecturer Id') ?></th>
                    <td><?= $this->Number->format($subject->lecturer_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Class Id') ?></th>
                    <td><?= $this->Number->format($subject->class_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>