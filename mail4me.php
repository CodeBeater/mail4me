<?php
	class Mail4me {
		
		private function loadPHPMailer() {
			//Instantiating PHPMailer
			require_once("libs/PHPMailer/PHPMailerAutoload.php");
			$mail = new PHPMailer();

			//Loading user configs
			require_once("config.php");

			return $mail;
		}

		private function getHTML($file, $strings) {
			//Checking if we need to render a PHP file or just dumb-get it
			if (strpos($file, ".php") !== false) {
				ob_start();
				require_once($file);
				return ob_get_clean();
			} else {
				return file_get_contents($file);
			}
		}

		public function sendMail($to, $subject, $body = "", $altBody = false, $file = false) {
			$mail = $this->loadPHPMailer();

			//Getting file contents
			if ($file) {
				$htmlBody = $this->getHTML($file[0], $file[1]);
			}

			//Setting PHPMailer up
			$mail->addAddress($to);
			$mail->Subject = $subject;
			$mail->Body = $body;

			if (isset($htmlBody)) {
				$mail->msgHtml($htmlBody);
			}

			if ($altBody !== false) {
				$mail->AltBody = $altBody;
			}

			return $mail->send();
		}

	}
?>