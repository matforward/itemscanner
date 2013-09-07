<div class="shops index">
	<h2><?php echo __('Shops'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('geox'); ?></th>
			<th><?php echo $this->Paginator->sort('geoy'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($shops as $shop): ?>
	<tr>
		<td><?php echo h($shop['Shop']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($shop['Item']['name'], array('controller' => 'items', 'action' => 'view', $shop['Item']['id'])); ?>
		</td>
		<td><?php echo h($shop['Shop']['name']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['address']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['geox']); ?>&nbsp;</td>
		<td><?php echo h($shop['Shop']['geoy']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $shop['Shop']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $shop['Shop']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $shop['Shop']['id']), null, __('Are you sure you want to delete # %s?', $shop['Shop']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Shop'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
