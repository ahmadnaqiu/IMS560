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
            <?= $this->Html->link(__('Edit Clas'), ['action' => 'edit', $clas->class_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Clas'), ['action' => 'delete', $clas->class_id], ['confirm' => __('Are you sure you want to delete # {0}?', $clas->class_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Class'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Clas'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="class view content">
            <h3><?= h($clas->class_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Class Name') ?></th>
                    <td><?= h($clas->class_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Class Id') ?></th>
                    <td><?= $this->Number->format($clas->class_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lecturer Id') ?></th>
                    <td><?= $this->Number->format($clas->lecturer_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Academic Year') ?></th>
                    <td><?= $this->Number->format($clas->academic_year) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>