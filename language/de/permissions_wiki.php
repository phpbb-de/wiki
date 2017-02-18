<?php
/**
*
* @package phpBB Extension - Wiki
 * @copyright (c) 2015 tas2580 (https://tas2580.net)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//
$lang = array_merge($lang, array(
	'ACL_U_WIKI_VIEW'				=> 'Kann Artikel in KB anschauen',
	'ACL_U_WIKI_EDIT'				=> 'Kann Artikel in KB bearbeiten und anlegen',
	'ACL_U_WIKI_VERSIONS'			=> 'Kann Versionen eines Artikels anschauen',
	'ACL_M_WIKI_DELETE'				=> 'Kann Versionen eines Artikels löschen',
	'ACL_M_WIKI_DELETE_ARTICLE'		=> 'Kann einen kompletten Artikel löschen',
	'ACL_M_WIKI_VIEW_INACTIVE'		=> 'Kann inaktive Artikel anschauen',
	'ACL_U_WIKI_EDIT_TOPIC'			=> 'Kann das Diskussionsthema zu einem Artikel ändern',
	'ACL_U_WIKI_SET_ACTIVE'			=> 'Kann die aktive Version eines Artikels ändern',
	'ACL_U_WIKI_SET_STICKY'			=> 'Kann einen Artikel als wichtig markieren',
	'ACL_U_WIKI_SET_REDIRECT'		=> 'Kann eine Weiterleitung in einem Artikel einrichten',
	'ACL_CAT_WIKI'					=> 'KB',
));
