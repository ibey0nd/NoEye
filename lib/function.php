<?php

    function daddslashes($str){
			return (!get_magic_quotes_gpc())?addslashes($str):$str;
		}

		function filtersql($str) {
			$blacklist = array("'", "\\", "and", "or", "xor", "select", "delete", "=", "+", "-");
			for ($i = 0; $i < count($blacklist); $i++) {
					$res = stripos($str, $blacklist[$i]);
					if (!(is_bool($res))) {
							//发现注入了
							return true;
							//  return "is_sqli";
					}
			}
	}
