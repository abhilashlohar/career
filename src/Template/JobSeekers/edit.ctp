<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $jobSeeker->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $jobSeeker->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Job Seekers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Job Seeker Rows'), ['controller' => 'JobSeekerRows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job Seeker Row'), ['controller' => 'JobSeekerRows', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jobSeekers form large-9 medium-8 columns content">
    <?= $this->Form->create($jobSeeker) ?>
    <fieldset>
        <legend><?= __('Edit Job Seeker') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('name');
            echo $this->Form->control('mobile_no');
            echo $this->Form->control('located_city');
            echo $this->Form->control('skill_set');
            echo $this->Form->control('job_profile');
            echo $this->Form->control('profile_document');
            echo $this->Form->control('created_on');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
