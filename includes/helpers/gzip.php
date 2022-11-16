<?php 

function _sh_GZipNinjaSpeed_write_file( $file_path ){

	$response = @file_get_contents(ABSPATH.'.htaccess');
	if(strstr($response, 'AddOutputFilterByType')) return false;

	$status = true;
	$fp = fopen($file_path, "a");
	if (flock($fp, LOCK_EX)) {  // acquire an exclusive lock
		//fwrite($fp, "# GZip Ninja Speed -- Starts here\n");
		//fwrite($fp, "# Do not write anything between \"GZip Ninja Speed -- Starts\" and \"GZip Ninja Speed -- Ends\"\n");
		//fwrite($fp, "# It will be deleted while uninstalling GZip Ninja Speed plugin\n");
		fwrite($fp, "AddOutputFilterByType DEFLATE text/plain \n");
		fwrite($fp, "AddOutputFilterByType DEFLATE text/html \n");
		fwrite($fp, "AddOutputFilterByType DEFLATE text/xml \n");
		fwrite($fp, "AddOutputFilterByType DEFLATE text/css \n");
		fwrite($fp, "AddOutputFilterByType DEFLATE application/xml \n");
		fwrite($fp, "AddOutputFilterByType DEFLATE application/xhtml+xml \n");
		fwrite($fp, "AddOutputFilterByType DEFLATE application/rss+xml \n");
		fwrite($fp, "AddOutputFilterByType DEFLATE application/javascript \n");
		fwrite($fp, "AddOutputFilterByType DEFLATE application/x-javascript \n");
		fwrite($fp, "AddType x-font/otf .otf \n");
		fwrite($fp, "AddType x-font/ttf .ttf \n");
		fwrite($fp, "AddType x-font/eot .eot \n");
		fwrite($fp, "AddType x-font/woff .woff \n");
		fwrite($fp, "AddType image/x-icon .ico \n");
		fwrite($fp, "AddType image/png .png \n\n\n");


		fwrite( $fp, "## EXPIRES CACHING ## \n" );
		fwrite( $fp, "<IfModule mod_expires.c>\n" );
		fwrite($fp, "ExpiresActive On \n");
		fwrite($fp, "ExpiresByType image/jpg 'access plus 1 year' \n");
		fwrite($fp, "ExpiresByType image/jpeg 'access plus 1 year' \n" );
		fwrite($fp, "ExpiresByType image/gif 'access plus 1 year' \n" );
		fwrite($fp, "ExpiresByType image/png 'access plus 1 year' \n" );
		fwrite($fp, "ExpiresByType image/css 'access plus 1 month' \n" );
		fwrite($fp, "ExpiresByType image/pdf 'access plus 1 month' \n" );
		fwrite($fp, "ExpiresByType image/x-javascript 'access plus 1 month' \n" );
		fwrite($fp, "ExpiresByType image/x-shockwave-flash 'access plus 1 month' \n" );
		fwrite($fp, "ExpiresByType image/x-icon 'access plus 1 year' \n" );
		fwrite($fp, "ExpiresByDefault 'access plus 1 year' \n" );
		fwrite($fp, "</IfModule \n" );
		fwrite($fp, "## EXPIRES CACHING ## \n" );

		fwrite($fp, "");
		

		fflush($fp);
		flock($fp, LOCK_UN);    // release the lock
	} else {
		$status = false;
	}
	fclose($fp);
	return $status;
}