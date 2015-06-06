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
		CodemirrorAsset::ADDON_EDIT_MATCHBRACKETS,
		CodemirrorAsset::ADDON_CONTINUECOMMENT,
		CodemirrorAsset::ADDON_COMMENT,
		CodemirrorAsset::MODE_XML,
		CodemirrorAsset::MODE_JAVASCRIPT,
		CodemirrorAsset::MODE_CSS,
		CodemirrorAsset::MODE_VBSCRIPT,
		CodemirrorAsset::MODE_HTMLMIXED,
	],
	'settings'=>[
		'lineNumbers' => true,
		'selectionPointer' => true,
		'continueComments' => "Enter",
        'indentUnit' => 4,
		'indentWithTabs' => true,
		'extraKeys' => [
            "F11" => new JsExpression("function(cm){cm.setOption('fullScreen', !cm.getOption('fullScreen'));}"),
			"Esc" => new JsExpression("function(cm){if(cm.getOption('fullScreen')) cm.setOption('fullScreen', false);}"),
            "Ctrl-/" => "toggleComment"
		],
        'mode' => new JsExpression(<<<JS
        {
            name: "htmlmixed",
            scriptTypes: [{matches: /\/x-handlebars-template|\/x-mustache/i,
                       mode: null},
                      {matches: /(text|application)\/(x-)?vb(a|script)/i,
                       mode: "vbscript"},
                       ]
        }
JS
),
	],
];