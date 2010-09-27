<form action="/auth/login" method="post" id="login-form">
	<div class="field email">
		<label for="login-email"><?php echo lang('email') ?></label>
		<input id="login-email" name="login_email" value="" type="email" />
	</div>
	<div class="field password">
		<label for="login-password"><?php echo lang('password'); ?></label>
		<input id="login-password" name="login_password" value="" type="password" />
	</div>
	<div class="field submit">
		<input id="login-submit" name="login_submit" value="<?php echo lang('login'); ?>" type="submit" />
	</div>
</form>
