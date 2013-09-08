<div class="prices index">
	<h2><?php echo __('Prices'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('shop_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($prices as $price): ?>
	<tr>
		<td><?php echo h($price['Price']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($price['Item']['name'], array('controller' => 'items', 'action' => 'view', $price['Item']['id'])); ?>
		</td>
		<td><?php echo h($price['Price']['price']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($price['Shop']['name'], array('controller' => 'shops', 'action' => 'view', $price['Shop']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $price['Price']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $price['Price']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $price['Price']['id']), null, __('Are you sure you want to delete # %s?', $price['Price']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Price'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shops'), array('controller' => 'shops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shop'), array('controller' => 'shops', 'action' => 'add')); ?> </li>
	</ul>
	<?php
	echo $this->Search->create();
echo $this->Search->input('filter1');
echo $this->Search->end(__('Filter', true));?>

</div>
