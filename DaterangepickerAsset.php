<?php
/**
 * Class DaterangepickerAsset
 * @package ommu\daterangepicker
 * 
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2020 OMMU (www.ommu.id)
 * @created date 11 August 2020, 13:32 WIB
 * @link https://github.com/ommu/yii2-daterangepicker
 *
 */

namespace ommu\daterangepicker;

class DaterangepickerAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@ommu/daterangepicker/assets';
	
	public $css = [];

	public $js = [
		'js/daterangepicker-min.js',
	];

	public $depends = [
		'yii\web\JqueryAsset',
		'ommu\daterangepicker\DaterangepickerPluginAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}