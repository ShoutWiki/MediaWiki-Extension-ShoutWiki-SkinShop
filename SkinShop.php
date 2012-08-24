<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Extensions
 * @author Lewis Cawte
 * @copyright Copyright © 2012, Lewis Cawte
 */

if( !defined( 'MEDIAWIKI' ) ) {
	die();
}

$wgExtensionCredits['specialpage'][] = array(
	'path'           => __FILE__,
	'name'           => 'ShoutWiki Skin Shop',
	'author'         => 'Lewis Cawte',
	'descriptionmsg' => 'skinshop-desc',
	'url'            => 'https://www.mediawiki.org/wiki/Extension:ShoutWiki_SkinShop',
	'version'		 => '0.5alpha',
);

$dir = dirname(__FILE__) . '/';
$wgAutoloadClasses['SpecialSkinShop'] = $dir . 'SpecialSkinShop.php';
$wgSpecialPages['SkinShop'] = 'SpecialSkinShop';
$wgExtensionMessagesFiles['SkinShop'] = $dir . 'SkinShop.i18n.php';
$wgSpecialPageGroups['SkinShop'] = 'wiki';

$wgResourceModules['ext.skinshop'] = array(
	'styles' => 'skinshop.css',
	'localBasePath' => dirname(__FILE__),
	'remoteExtPath' => 'SkinShop',
	'position' => 'top',
);