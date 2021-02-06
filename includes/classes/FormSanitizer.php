<?php
	class FormSanitizer{
		public static function sanitizeFormString($inputText){
			$inputText = strip_tags($inputText);
			$inputText = str_replace(" ", "", $inputText);
			//$inputText = trim($inputText); // 刪除前後空白且保留中間空白
			$inputText = strtolower($inputText);
			$inputText = ucfirst($inputText); // 第一個字改大寫
			return $inputText;
		}

		public static function sanitizeFormUsername($inputText){
			$inputText = strip_tags($inputText);
			$inputText = str_replace(" ", "", $inputText);
			return $inputText;
		}

		public static function sanitizeFormPassword($inputText){
			$inputText = strip_tags($inputText);
			return $inputText;
		}

		public static function sanitizeFormEmail($inputText){
			$inputText = strip_tags($inputText);
			$inputText = str_replace(" ", "", $inputText);
			return $inputText;
		}
	}
?>