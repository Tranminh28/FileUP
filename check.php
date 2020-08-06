<?php
$configs = parse_ini_file('config.ini');
		$fileUpload = $_FILES['fimg'];
		$fileName = ramdomstring($fileUpload['name'], 7);
		$flagSize = checkSizeFile($fileUpload['size'], $configs['min_size'], $configs['max_size']);

		$flagExtension = checkExtensionFile($fileUpload['name'], explode('|', $configs['extension']));

		$flagExtension == false;

		if ($flagSize == true && $flagExtension == true) {
			@move_uploaded_file($fileUpload['tmp_name'], './data/' . $fileName);

		}
