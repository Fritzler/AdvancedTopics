<?php
	echo('<b>You need to follow along with the source code to fully understanf this example.</b><br /><br/ >');
	echo 'This is a test page for logging errors';
	echo '<br /><br/ >';
	
	echo 'If the answer is a one, logging of errors is already on, otherwise a zero means logging of errors are off. ';
	echo '<br /><br/ >';
	
	echo'Default / current setting is: ' .ini_get('log_errors');
	echo '<br /><br/ >';
	
	if(ini_get('log_errors') == 1)
	{
		echo 'Logging errors are on.';
	} else {
		echo 'Logging errors are off.';
	}
	echo '<br /><br/ >';
	
	echo 'You can change the setting by using int_set(&#39; log_errors &#39; , &#39; 0 &#39;) in your code, as shown in this example.';
	echo '<br /><br/ >';
	
	echo 'Setting a zero turns it off, setting a one turns it on.';
	echo '<br /><br/ >';
	
	ini_set('log_errors', 0); //Sets the logging of errors to off.
	if(ini_get('log_errors') == 1)
	{
		echo 'Logging errors are on.';
	} else {
		echo 'Logging errors are off.';
	}
	echo '<br /><br/ >';
	
	ini_set('log_errors', 1); //Sets the logging of errors to on.
	if(ini_get('log_errors') == 1)
	{
		echo 'Logging errors are on.';
	} else {
		echo 'Logging errors are off.';
	}
	echo '<br /><br/ >';
	
	ini_set('error_log', 'php-error.log'); //Sets the name of the error log. This is placed in your root directory.
	error_log('Starting Error Log: Logging_errors_example.php!'); //Creates a manual log entry in the start of the log.
	error_log(CHR(13)); //Forces the carriage return in the log file.
	error_log('Manual Error Entry Example!'); //Creates a manual log entry in the log.
	error_log(CHR(13)); //Forces the carriage return in the log file.
	
	echo 'You should now have enteries in your error log. Go to your root directory and view the log file.';
	error_log('Ending Error Log: Loggin_errors_example.php!'); //Creates a manual log entry in the end of the log.
	error_log(CHR(13)); //Forces the carriage return in the log file.
	ini_set('log_errors', 0); //Sets the logging of errors to off.
	echo '<br /><br/ >';
	
	if(ini_get('log_errors') == 1)
	{
		echo 'Logging errors are on.';
	} else {
		echo 'Logging errors are off.';
	}
	echo '<br /><br/ >';
?>