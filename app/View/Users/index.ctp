<div class="row">
	<div class="span12">
	<h2>Users</h2>
	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Email</th>
			<th>Name</th>
			<th>Actions</th>
		</tr>
		<?php foreach($users as $user){ ?>
		<tr>
			<td><?php echo $user['User']['id']; ?></td>
			<td><?php echo $user['User']['username']; ?></td> 
			<td><?php echo $user['User']['email']; ?></td>
			<td><?php echo $user['User']['name']; ?></td>
			<td>
				<?php
					echo $this->Html->link('View', array('action' => 'view', $user['User']['id']), array('div' => false,'class' => 'btn float_r')); 
				?>
				<?php if($current_user['id'] == $user['User']['id'] || $current_user['role'] == 'admin'): ?>
					<?php
						echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id']), array('div' => false,'class' => 'btn float_r'));
					?>
					<?php
						echo $this->Html->link('Delete', array('action' => 'delete', $user['User']['id']), array('div' => false,'class' => 'btn float_r'));
					?>
				<?php endif; ?>
			</td>
		</tr>
		<?php } ?>
	</table>
	</div>
</div>