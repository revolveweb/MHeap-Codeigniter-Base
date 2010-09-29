<form action="<?php echo site_url('auth/register'); ?>" method="post" id="register-form">
	<div class="field text">
		<label for="reg-username"><?php echo lang('username'); ?></label>
		<input type="text" name="reg_username" id="reg-username" />
	</div>
	<div class="field text">
		<label for="reg-email"><?php echo lang('email'); ?></label>
		<input type="text" name="reg_email" id="reg-email" />
	</div>
	<div class="field password">
		<label for="reg-password"><?php echo lang('password'); ?></label>
		<input type="text" name="reg_password" id="reg-password" />
	</div>
	<div class="field password">
		<label for="reg-password-con"><?php echo lang('password_confirm'); ?></label>
		<input type="text" name="reg_password_con" id="reg-password-con" />
	</div>
	<div class="field submit">
		<input type="submit" name="reg_submit" value="<?php echo lang('register'); ?>" />
	</div>
</form>
