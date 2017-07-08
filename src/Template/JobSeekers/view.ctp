<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\JobSeeker $jobSeeker
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Job Seeker'), ['action' => 'edit', $jobSeeker->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Job Seeker'), ['action' => 'delete', $jobSeeker->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobSeeker->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Job Seekers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job Seeker'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Job Seeker Rows'), ['controller' => 'JobSeekerRows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job Seeker Row'), ['controller' => 'JobSeekerRows', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jobSeekers view large-9 medium-8 columns content">
    <h3><?= h($jobSeeker->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($jobSeeker->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($jobSeeker->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($jobSeeker->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile No') ?></th>
            <td><?= h($jobSeeker->mobile_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Located City') ?></th>
            <td><?= h($jobSeeker->located_city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Skill Set') ?></th>
            <td><?= h($jobSeeker->skill_set) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Job Profile') ?></th>
            <td><?= h($jobSeeker->job_profile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profile Document') ?></th>
            <td><?= h($jobSeeker->profile_document) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($jobSeeker->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created On') ?></th>
            <td><?= h($jobSeeker->created_on) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Job Seeker Rows') ?></h4>
        <?php if (!empty($jobSeeker->job_seeker_rows)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Job Seeker Id') ?></th>
                <th scope="col"><?= __('Degree Type') ?></th>
                <th scope="col"><?= __('Degree Name') ?></th>
                <th scope="col"><?= __('Institute Name') ?></th>
                <th scope="col"><?= __('Location') ?></th>
                <th scope="col"><?= __('Percentage Cgpa') ?></th>
                <th scope="col"><?= __('Passed Out Year') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($jobSeeker->job_seeker_rows as $jobSeekerRows): ?>
            <tr>
                <td><?= h($jobSeekerRows->id) ?></td>
                <td><?= h($jobSeekerRows->job_seeker_id) ?></td>
                <td><?= h($jobSeekerRows->degree_type) ?></td>
                <td><?= h($jobSeekerRows->degree_name) ?></td>
                <td><?= h($jobSeekerRows->institute_name) ?></td>
                <td><?= h($jobSeekerRows->location) ?></td>
                <td><?= h($jobSeekerRows->percentage_cgpa) ?></td>
                <td><?= h($jobSeekerRows->passed_out_year) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'JobSeekerRows', 'action' => 'view', $jobSeekerRows->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'JobSeekerRows', 'action' => 'edit', $jobSeekerRows->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'JobSeekerRows', 'action' => 'delete', $jobSeekerRows->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobSeekerRows->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
