<?
	function getlang($path = null, $isso = "", $porisso = "") {
		$json  = str_replace(array(PHP_EOL, "\n", "\r"), "", file_get_contents('./pt-BR.json'));
		$obj   = json_decode($json, TRUE);
		$paths = explode(">",str_replace(" ","",$path));
		if ($path == null) {
			$content = "Invalid path ws::getlang( ? )";
		} elseif ($obj == '') {
			$content = "JSON error";
		} else {
			foreach ($paths as $value) {
				if (empty($obj[trim($value)]) && empty($content[trim($value)])) {
					$content = "Path " . $path . " does not exist";
					break;
				} else {
					$content = (empty($content)) ? $obj[trim($value)] : $content[trim($value)];
				}
			}
		}
		return str_replace($isso, $porisso, $content);
	}
