
<textarea name="posting" id="posting" cols="30" rows="10"></textarea>

<script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
<script>
	var konten = document.getElementById("posting");
	CKEDITOR.replace(konten,{
		language:'en-gb'
	});
	CKEDITOR.config.allowedContent = true;
</script>
