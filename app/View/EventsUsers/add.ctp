<div class="eventsUsers form">
<?php echo $this->Form->create('EventsUser'); ?>
	<fieldset>
		<legend><?php echo __('Add Events User'); ?></legend>
	<?php
		echo $this->Form->input('event_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Events Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
