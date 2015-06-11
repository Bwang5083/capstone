<?php

/**
 * @author 	Samuel Carlier
 * @package	P3Base_Mailer
 */
class P3Base_Mailer_Message {

	/**
	 * @var string
	 */
	private $text;

	/**
	 * @var string
	 */
	private $html;

	/**
	 * @var string
	 */
	private $subject;

	/**
	 * @var string
	 */
	private $encoding;

	/**
	 * @var string
	 */
	private $charset;

	/**
	 * @var string
	 */
	const ENCODING_7BIT = '7bit';

	/**
	 * @var string
	 */
	const ENCODING_8BIT = '8bit';

	/**
	 * @var string
	 */
	const ENCODING_QUOTE = 'quoted-printable';

	/**
	 * constructor
	 */
	public function __construct() {
		$this->encoding = '8bit';
		$this->charset 	= 'ISO-8859-1';
	}

	/**
	 * @param string $text
	 */
	public function setText($text) {
		$this->text = $text;
	}

	/**
 	 * @param string $html
 	 */
	public function setHTML($html) {
		$this->html = $html;
	}

	/**
	 * @return string
	 */
	public function getText() {
		return $this->text;
	}

	/**
	 * @return string
	 */
	public function getHTML() {
		return $this->html;
	}

	/**
	 * @return string
	 */
	public function getSubject() {
		return $this->subject;
	}

	/**
	 * @return string $subject
	 */
	public function setSubject($subject) {
		$this->subject = $subject;
	}

	/**
	 * @param string $encoding
	 */
	public function setEncoding($encoding) {
		$this->encoding = $encoding;
	}

	/**
	 * @param string $charset
	 */
	public function setCharset($charset) {
		$this->charset = $charset;
	}

	/**
	 * @return string
	 */
	public function getEncoding() {
		return $this->encoding;
	}

	/**
	 * @return string
	 */
	public function getCharset() {
		return $this->charset;
	}

	/**
	 * @return string
	 */
	public function getMailMessage() {
		$header  = 'Content-Type:%s;' . P3Base_Mailer_Handler_SMTP::CRLF;
		$header .= "\t" . 'charset=' . $this->charset . P3Base_Mailer_Handler_SMTP::CRLF;
		$header .= 'Content-Transfer-Encoding:' . $this->encoding . P3Base_Mailer_Handler_SMTP::CRLF;
		$header .= P3Base_Mailer_Handler_SMTP::CRLF;
		$header .= '%s';

		$html = empty($this->html) ? null : sprintf($header, 'text/html' , $this->mailFormat($this->html));
		$text = empty($this->text) ? null : sprintf($header, 'text/plain', $this->mailFormat($this->text));

		/* multipart/alternative */
		if(!is_null($this->html) && !is_null($this->text)) {
			$boundary = md5(uniqid());

			$message  = 'Content-Type:multipart/alternative;' . P3Base_Mailer_Handler_SMTP::CRLF;
			$message .= "\t" . 'boundary="' . $boundary .'"' . P3Base_Mailer_Handler_SMTP::CRLF;
			$message .= P3Base_Mailer_Handler_SMTP::CRLF;

			$message .= '--' . $boundary . P3Base_Mailer_Handler_SMTP::CRLF;
			$message .= $text . P3Base_Mailer_Handler_SMTP::CRLF;

			$message .= '--' . $boundary . P3Base_Mailer_Handler_SMTP::CRLF;
			$message .= $html . P3Base_Mailer_Handler_SMTP::CRLF;

			/* close multipart/alternative */
			$message .= '--' . $boundary . '--';

		} else {
			$message = is_null($html) ? $text : $html;
		}

		return $message;
	}

	/**
	 * format text to quoted-printable
	 * line-lenght will be 78 including CRLF
	 *
	 * @param	string	$content
	 * @return 	string
	 */
	private function quotedPrintable($content) {
		//we need to rewrite this function...
		//it isn't going well :(

		$fp = tmpfile();
		$write = fwrite($fp, $content, strlen($content));

		if($write === false) {
			throw new P3Base_Mailer_Exception(sprintf(Translator::get('write_file_error'), $this->encoding));
		}

		//reset pointer
		fseek($fp, 0);

		$params = array('line-length' => 76, 'line-break-chars' => P3Base_Mailer_Handler_SMTP::CRLF);
		stream_filter_append($fp, 'convert.quoted-printable-encode', STREAM_FILTER_READ, $params);

		$content = stream_get_contents($fp);
		fclose($fp);

		if($content === false) {
			throw new P3Base_Mailer_Exception(Translator::get('read_file_error'));
		}

		return $content;
	}

	/**
	 * according RFC 2822 lines cannot be longer then 1000 chars including CRLF
	 * but RECOMMENDED is creating lines no longer then 80 chars including CRLF
	 *
	 * @param  string $content
	 * @return string
	 */
	private function mailFormat($content) {
		if(empty($content)) return;

		$content = str_replace(array("\r\n", "\r"), "\n", $content);

		switch($this->encoding) {
			case self::ENCODING_7BIT:
			case self::ENCODING_8BIT:
				$content = chunk_split($content, 998, P3Base_Mailer_Handler_SMTP::CRLF);
			break;

			case self::ENCODING_QUOTE:
				$content = $this->quotedPrintable($content);
			break;

			default:
				throw new P3Base_Mailer_Exception(sprintf(Translator::get('unsupported_encoding'), $this->encoding));
		}

		$content = str_replace("\n.", "\n..", $content);
		return $content;
	}
}

?>
