@if(!empty($options))
	<script type="text/javascript">
		var RecaptchaOptions = {{ json_encode($options) }};
	</script>
@endif
<input type="hidden" name="g-recaptcha-response" value=""/>
<script src='https://www.google.com/recaptcha/api.js?render={{ $public_key }}{{ (isset($lang) ? "&hl=" . $lang : "") }}'></script>
<script>
	grecaptcha.ready(function() {
		grecaptcha.execute('6LfsyHgUAAAAACoe_SQn2ttP3LesVgZYHeXInApE', { action: 'login' })
		.then(function(token) {
			var el = document.querySelector('input[name="g-recaptcha-response"]');
			el.value = token;
		});
	});
</script>
