<?php
/**
 * Copyright 2010 - 2014, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2014, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<?php 
  echo $this->Html->script('jquery-2.1.1.min');
  echo $this->Html->script('cake'); 
?>
<div class="users form">
	<?php echo $this->Form->create($model); ?>
		<fieldset>
			<legend><?php echo __d('users', 'Edit User'); ?></legend>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('username', array(
					'label' => __d('users', 'Username')));
				echo $this->Form->input('email', array(
					'label' => __d('users', 'Email')));
				if (!empty($roles)) {
					echo $this->Form->input('role', array(
						'label' => __d('users', 'Role'), 'values' => $roles));
				}
				if ($this->Session->read('Auth.User.is_admin')) {
					echo $this->Form->input('is_admin', array(
						'label' => __d('users', 'Is Admin')));
				}
				echo $this->Form->input('active', array(
						'label' => __d('users', 'Active')));
			?>
			<p><br />
				<?php echo $this->Html->link(__d('users', 'Change account password'), array('action' => 'change_account_password', basename($_SERVER["REQUEST_URI"]))); ?>
			</p>
		</fieldset>
	<?php echo $this->Form->end('Submit'); ?>
</div>
<?php echo $this->element('Users.Users/admin_sidebar'); ?>