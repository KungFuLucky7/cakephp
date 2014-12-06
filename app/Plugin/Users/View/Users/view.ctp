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
<div class="users view">
<h2><?php echo __d('users', 'User'); ?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
			<?php echo $user[$model]['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
			<?php echo $user[$model]['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
			<?php echo $user[$model]['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
			<?php echo $user[$model]['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Last Logged In'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
			<?php echo $user[$model]['last_login']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Role'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
			<?php echo $user[$model]['role']; ?>
			&nbsp;
		</dd>
		<?php
		if (!empty($user['UserDetail'])) :
			foreach ($user['UserDetail'] as $section => $details) :
				foreach ($details as $field => $value) :
					echo '<dt>' . $section . ' - ' . $field . '</dt>';
					echo '<dd>' . $value . '</dd>';
				endforeach;
			endforeach;
		endif;
		?>
	</dl><br /><br />
	<div class="submit">
		<?php echo '<input id="back-button" type="button" value="Back" onClick="window.location.href=\'' . $this->webroot . 'users/admin_index\'">' ?>
	</div>
</div>
<?php echo $this->element('Users.Users/sidebar'); ?>