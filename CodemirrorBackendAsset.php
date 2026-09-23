<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 */
namespace skeeks\widget\codemirror;

/**
 * Интеграция CodeMirror с SkeekS Backend UI: светлая и тёмная тема бэкенда
 * и защита строк редактора от общего стиля `html[data-sx-theme] pre`.
 * Все правила ограничены html[data-sx-theme], вне бэкенда ничего не меняется.
 *
 * @package skeeks\widget\codemirror
 */
class CodemirrorBackendAsset extends \yii\web\AssetBundle
{
    public $sourcePath = __DIR__.'/assets';

    public $css = [
        'sx-codemirror.css',
    ];
}
