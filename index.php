<?php 
/*
 * A Design by W3layouts
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
 *
 */
include "app/config.php";
include "app/detect.php";

if ($page_name=='') {
	include'web/index.html';
	}
elseif ($page_name=='index.html') {
	include'web/index.html';
	}
elseif ($page_name=='about.html') {
	include'web/about.html';
	}
elseif ($page_name=='works.html') {
	include'web/works.html';
	}
elseif ($page_name=='blog.html') {
	include'web/blog.html';
	}
elseif ($page_name=='details.html') {
	include'web/details.html';
	}
elseif ($page_name=='contact.html') {
	include'web/contact.html';
	}
elseif ($page_name=='contact-post.html') {
	include 'app/contact.php';
	}
else
	{
		include'web/404.html';
	}

?>
