<?php

use Michelf\Markdown;
use Michelf\MarkdownExtra;
#
# Markdown  -  A text-to-HTML conversion tool for web writers
#
# PHP Markdown
# Copyright (c) 2004-2012 Michel Fortin  
# <http://michelf.com/projects/php-markdown/>
#
# Original Markdown
# Copyright (c) 2004-2006 John Gruber  
# <http://daringfireball.net/projects/markdown/>
#
define( 'MARKDOWN_VERSION',  "1.0.1o" ); # Sun 8 Jan 2012
#
# Global default settings:
#
# Change to ">" for HTML output
@define( 'MARKDOWN_EMPTY_ELEMENT_SUFFIX',  " />");
# Define the width of a tab for code blocks.
@define( 'MARKDOWN_TAB_WIDTH',     4 );
### Standard Function Interface ###
@define( 'MARKDOWN_PARSER_CLASS',  '\\Michelf\\Markdown' );
if( !function_exists('Markdown') )
{
	function Markdown($text) {
	#
	# Initialize the parser and return the result of its transform method.
	#
		# Setup static parser variable.
		static $parser;
		if (!isset($parser)) {
			$parser_class = MARKDOWN_PARSER_CLASS;
			$parser = new $parser_class;
		}
		# Transform text using parser.
		return $parser->transform((string)$text);
	}
}
### bBlog Plugin Info ###
if( !function_exists('identify_modifier_markdown') )
{
	function identify_modifier_markdown() {
		return array(
			'name'			=> 'markdown',
			'type'			=> 'modifier',
			'nicename'		=> 'Markdown',
			'description'	=> 'A text-to-HTML conversion tool for web writers',
			'authors'		=> 'Michel Fortin and John Gruber',
			'licence'		=> 'BSD-like',
			'version'		=> MARKDOWN_VERSION,
			'help'			=> '<a href="http://daringfireball.net/projects/markdown/syntax">Markdown syntax</a> allows you to write using an easy-to-read, easy-to-write plain text format. Based on the original Perl version by <a href="http://daringfireball.net/">John Gruber</a>. <a href="http://michelf.com/projects/php-markdown/">More...</a>'
		);
	}
}
### Smarty Modifier Interface ###
if( !function_exists('smarty_modifier_markdown') )
{
	function smarty_modifier_markdown($text) {
		return Markdown($text);
	}
}

/*
PHP Markdown
============
Description
-----------
This is a PHP translation of the original Markdown formatter written in
Perl by John Gruber.
Markdown is a text-to-HTML filter; it translates an easy-to-read /
easy-to-write structured text format into HTML. Markdown's text format
is most similar to that of plain text email, and supports features such
as headers, *emphasis*, code blocks, blockquotes, and links.
Markdown's syntax is designed not as a generic markup language, but
specifically to serve as a front-end to (X)HTML. You can use span-level
HTML tags anywhere in a Markdown document, and you can use block level
HTML tags (like <div> and <table> as well).
For more information about Markdown's syntax, see:
<http://daringfireball.net/projects/markdown/>
Bugs
----
To file bug reports please send email to:
<michel.fortin@michelf.com>
Please include with your report: (1) the example input; (2) the output you
expected; (3) the output Markdown actually produced.
Version History
--------------- 
See the readme file for detailed release notes for this version.
Copyright and License
---------------------
PHP Markdown
Copyright (c) 2004-2009 Michel Fortin  
<http://michelf.com/>  
All rights reserved.
Based on Markdown
Copyright (c) 2003-2006 John Gruber   
<http://daringfireball.net/>   
All rights reserved.
Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are
met:
*	Redistributions of source code must retain the above copyright notice,
	this list of conditions and the following disclaimer.
*	Redistributions in binary form must reproduce the above copyright
	notice, this list of conditions and the following disclaimer in the
	documentation and/or other materials provided with the distribution.
*	Neither the name "Markdown" nor the names of its contributors may
	be used to endorse or promote products derived from this software
	without specific prior written permission.
This software is provided by the copyright holders and contributors "as
is" and any express or implied warranties, including, but not limited
to, the implied warranties of merchantability and fitness for a
particular purpose are disclaimed. In no event shall the copyright owner
or contributors be liable for any direct, indirect, incidental, special,
exemplary, or consequential damages (including, but not limited to,
procurement of substitute goods or services; loss of use, data, or
profits; or business interruption) however caused and on any theory of
liability, whether in contract, strict liability, or tort (including
negligence or otherwise) arising in any way out of the use of this
software, even if advised of the possibility of such damage.
*/