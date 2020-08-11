<?php
/**
 * Class DaterangepickerPluginAsset
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

class DaterangepickerPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/daterangepicker';
	
	public $css = [
		'daterangepicker.css',
	];

	public $js = [
		'daterangepicker.js',
	];

	public $depends = [
		'ommu\daterangepicker\MomentPluginAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}