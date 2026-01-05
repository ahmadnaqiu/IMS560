<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AuthorizedUser $authorizedUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Authorized User'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="authorizedUser form content">
            <?= $this->Form->create($authorizedUser) ?>
            <fieldset>
                <legend><?= __('Add Authorized User') ?></legend>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('created_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
