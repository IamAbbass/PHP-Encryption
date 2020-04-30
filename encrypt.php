<?php
include('function/function.php');

	if($_POST['text'] || $_POST['key']){
		$encrypted_txt = encrypt_decrypt('encrypt', $_POST['text'], $_POST['key']);
	}
?>

<form method="POST">
	<textarea name="text" rows="5" cols="30" placeholder="Write text here (for encryption)"><?= $_POST['text'] ?></textarea><br/>
	<input name="key" placeholder="key" type="text" value="<?= $_POST['key'] ?>" /><br/><br/>
	<button>Encrypt Text</button><br/>

	<textarea disabled name="text" rows="5" cols="30"><?= $encrypted_txt ?></textarea><br/>
</form>
