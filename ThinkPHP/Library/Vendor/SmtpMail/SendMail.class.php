<?php
namespace Vendor\SmtpMail;
class SendMail {
	
	function send($smtp,$tomail,$title,$content) {
		$smtpserver = $smtp['smtpserver']; // SMTP������
		$smtpserverport = $smtp['smtpserverport']; // SMTP�������˿�
		$smtpusermail = $smtp['smtpusermail']; // SMTP���������û�����		
		$smtpuser = $smtp['smtpuser']; // SMTP���������û��ʺ�
		$smtppass = $smtp['smtppass']; // SMTP���������û�����
		$smtpemailto = $tomail; // ���͸�˭
		$mailtitle = $title; // �ʼ�����
		$mailcontent = "<h1>" . $content . "</h1>"; // �ʼ�����
		$mailtype = "HTML"; // �ʼ���ʽ��HTML/TXT��,TXTΪ�ı��ʼ�
		                    // ************************ ������Ϣ ****************************
		$smtp = new Email( $smtpserver, $smtpserverport, true, $smtpuser, $smtppass ); // �������һ��true�Ǳ�ʾʹ�������֤,����ʹ�������֤.
		$smtp->debug = false; // �Ƿ���ʾ���͵ĵ�����Ϣ
		$state = $smtp->sendmail ( $smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype );
		if ($state == "") {
			return false;
		}
		else {
			return true;
		}
	}
}
?>