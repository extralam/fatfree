<?php

try{
	// Kickstart the framework
	$f3=require('../lib/base.php');

	$f3->set('DEBUG',1);

	if ((float)PCRE_VERSION<7.9)
		trigger_error('PCRE version is out of date');

	// Load configuration
	$f3->config('../app/configs/config.ini');
	$f3->config('../app/configs/routes.ini');
	$f3->set('LOCALES','../app/dict/');
	$f3->set('LANGUAGE','en');

	if (!function_exists('dd')) {
		function dd($blah, $die = true) {
			# insert span tags
			$output = '';
			$output = '<span class="die_value">'.$output;
			$output = str_replace('[', '<span class="die_key">[', print_r($blah,TRUE));
			$output = str_replace(']', ']</span>', $output);
			$output = str_replace('=> ', '=> <span class="die_value">', $output);

			# temporarily swap these paterns
			$output = str_replace(")\n\n", ")#br##br#", $output);
			$output = str_replace(")\n", ")#br#", $output);
			$output = str_replace("(\n", "(#br#", $output);

			# close spans at remaining line breaks
			$output = str_replace("\n", "</span>\n", $output);

			# revert temporary swaps
			$output = str_replace(")#br##br#", ")\n\n", $output);
			$output = str_replace(")#br#", ")\n", $output);
			$output = str_replace("(#br#", "(\n", $output);

			echo '<style type="text/css">#die_object { font-size: 11px; padding: 10px; background: #eee; font-family: monospace; white-space: pre;} .die_key { color: #e00;} .die_value { color: #00e;}</style>';

			if($die)
				die('<div id="die_object">'.$output.'</div>');
			else
				echo('<div id="die_object">'.$output.'</div>');

			echo "<pre>".print_r($blah, true)."</pre>";

			if($die) die();
		}
	}

	$f3->run();
} catch(Exception $e) {
    // DO SOMETHING IF EXCEPTION
	dd($e);
}

