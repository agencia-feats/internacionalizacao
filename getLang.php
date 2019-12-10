<?
	function getlang($path = null, $isso = "", $porisso = "") {
		####################################################################
		# CAPTAMOS A STRING DO JSON E TRANSFORMAMOS EM OBJETO
		####################################################################
		$json  = str_replace(array(PHP_EOL, "\n", "\r"), "", file_get_contents('./pt-BR.json'));
		$obj   = json_decode($json, TRUE);

		####################################################################
		# TRATAMOS A RODA DA STRING
		####################################################################
		$paths = explode(">",str_replace(" ","",$path));


		if ($path == null) {
			$content = "Invalid path getlang( ? )";
		} elseif ($obj == '') {
			$content = "JSON error";
		} else {
			####################################################################
			# VARREMOS A ARRAY DA ROTA
			####################################################################
			foreach ($paths as $value) {
				if (empty($obj[trim($value)]) && empty($content[trim($value)])) {
					$content = "Path " . $path . " does not exist";
					break;
				} else {
					####################################################################
					# GRAVA A VARIÁVEL COM A STRING REQUISITADA
					####################################################################
					$content = (empty($content)) ? $obj[trim($value)] : $content[trim($value)];
				}
			}
		}
		####################################################################
		# RETORNAMOS A STRING, SUBSTITUINDO O QUE OS PARÂMETROS PEDEM
		####################################################################
		return str_replace($isso, $porisso, $content);
	}
