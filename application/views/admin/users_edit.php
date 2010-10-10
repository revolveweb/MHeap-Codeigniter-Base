<?php mpr($user); ?>

<form action="/admin/users/edit/<?php echo $user->id; ?>/" method="post">
	<div class="field text">
		<label for="user-name"><?php echo lang('username') ?></label>
		<input id="user-name" name="user_name" value="<?php echo $user->username; ?>" type="text" />
	</div>
	<div class="field email">
		<label for="user-email"><?php echo lang('email') ?></label>
		<input id="user-email" name="user_email" value="<?php echo $user->email;?>" type="email" />
	</div>
	<div class="field submit">
		<input id="user-submit" name="user_submit" value="<?php echo lang('update'); ?>" type="submit" />
	</div>

</form>
