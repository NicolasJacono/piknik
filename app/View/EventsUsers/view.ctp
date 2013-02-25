<div class="eventsUsers view">
<h2><?php  echo __('Events User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eventsUser['EventsUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event Id'); ?></dt>
		<dd>
			<?php echo h($eventsUser['EventsUser']['event_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($eventsUser['EventsUser']['user_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Events User'), array('action' => 'edit', $eventsUser['EventsUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Events User'), array('action' => 'delete', $eventsUser['EventsUser']['id']), null, __('Are you sure you want to delete # %s?', $eventsUser['EventsUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Events Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Events User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
