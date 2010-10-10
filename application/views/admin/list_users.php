<?php mpr($users); ?>
<?php foreach($users as $u): ?>
	<ul id="user-<?php echo $u->id; ?>" class="user">
		<li class="username"><?php echo $u->username; ?></li>
		<li class="email"><?php echo $u->email; ?></li>
		<li class="last-login"><?php echo $u->last_login; ?></li>
		<li><a href="<?php echo param_url( $u->id ); ?>"><?php echo lang('edit'); ?></a></li>
	</ul>
<?php endforeach; ?>
