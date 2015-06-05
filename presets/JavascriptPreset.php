<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 05.06.2015
 */
use skeeks\widget\codemirror\CodemirrorAsset;

return [
	'assets'=>[
		CodemirrorAsset::ADDON_EDIT_MATCHBRACKETS,
		CodemirrorAsset::ADDON_CONTINUECOMMENT,
		CodemirrorAsset::ADDON_COMMENT,
		CodemirrorAsset::MODE_JAVASCRIPT,
	],
	'settings'=>[
		'lineNumbers'=> true,
		'matchBrackets'=>true,
		'continueComments' => "Enter",
		'extraKeys' => ["Ctrl-/"=> "toggleComment"],
	],
];