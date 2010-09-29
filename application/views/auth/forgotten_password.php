<?php if ( ! is_null($code) ): ?>
<form action="<?php echo site_url('auth/forgotten_password'); ?>" method="post" id="reset-password-code">
	<div class="field text">
		<label for="reset-code"><?php echo lang('reset_code'); ?></label>
		<input type="text" name="reset_code" id="reset-code" value="<?php echo $code; ?>" />
	</div>
	<div class="field submit">
		<input type="submit" name="reset_finish" value="<?php echo lang('reset_password'); ?>" />
	</div>
</form>
<?php else: ?>
<form action="<?php echo site_url('auth/forgotten_password'); ?>" method="post" id="reset-password">
	<div class="field text">
		<label for="user-email"><?php echo lang('email'); ?></label>
		<input type="text" name="user_email" id="user-email" />
	</div>
	<div class="field submit">
		<input type="submit" name="reset_submit" value="<?php echo lang('request_new_password'); ?>" />
	</div>

</form>
<?php endif; ?>

