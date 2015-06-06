<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 05.06.2015
 */
use skeeks\widget\codemirror\CodemirrorAsset;
use yii\web\JsExpression;
return [
	'assets'=>[
		CodemirrorAsset::MODE_CLIKE,
		CodemirrorAsset::MODE_PHP,
		CodemirrorAsset::ADDON_COMMENT,
		CodemirrorAsset::ADDON_DISPLAY_FULLSCREEN,
		CodemirrorAsset::THEME_ECLIPSE,
	],
	'settings' => [
		'lineNumbers' => true,
		'matchBrackets' => true,
		'mode' => "application/x-httpd-php-open",
		'indentUnit' => 4,
		'indentWithTabs' => true,
		'extraKeys' => [
			"F11" => new JsExpression("function(cm){cm.setOption('fullScreen', !cm.getOption('fullScreen'));}"),
			"Esc" => new JsExpression("function(cm){if(cm.getOption('fullScreen')) cm.setOption('fullScreen', false);}"),
		],
	],
];