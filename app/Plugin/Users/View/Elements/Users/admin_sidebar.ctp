<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__d('users', 'Logout'), array('admin' => false, 'action' => 'logout')); ?>
		<li><?php if ($this->Session->read('Auth.User.is_admin') || ($this->Session->check('Auth.User.role') && $this->Session->read('Auth.User.role') === 'admin')) {
                echo $this->Html->link(__d('users', 'My Account'), array('action' => 'admin_edit', $this->Session->read('Auth.User.id'))) . '</li>';
								echo '<li>' . $this->Html->link(__d('users', 'Change password'), array('plugin' => 'users', 'controller' => 'users', 'action' => 'change_password'));
                echo '<li>&nbsp;</li>';
                echo '<li>' . $this->Html->link(__d('users', 'Add Users'), array('admin' => true, 'action'=>'admin_add')) . '</li>';
                echo '<li>' . $this->Html->link(__d('users', 'List Users'), array('admin' => true, 'action'=>'admin_index')) . '</li>';
              }
              else {
                echo $this->Html->link(__d('users', 'My Account'), array('admin' => false, 'action' => 'edit', $this->Session->read('Auth.User.id'))) . '</li>';
								echo '<li>' . $this->Html->link(__d('users', 'Change password'), array('plugin' => 'users', 'controller' => 'users', 'action' => 'change_password'));
                echo '<li>&nbsp;</li>';
                echo '<li>' . $this->Html->link(__d('users', 'List Users'), array('admin' => true, 'action'=>'admin_index')) . '</li>';
              }
              echo '<li>' . $this->Html->link(__d('users', 'Dashboard'), array('admin' => false, 'action'=>'dashboard')) . '</li>';
        ?>
	</ul>
</div>