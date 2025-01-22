<?php
/**
 * Class MomentPluginAsset
 * @package ommu\daterangepicker
 * 
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)811-2540-432
 * @copyright Copyright (c) 2020 OMMU (www.ommu.id)
 * @created date 11 August 2020, 13:32 WIB
 * @link https://github.com/ommu/yii2-daterangepicker
 *
 */

namespace ommu\daterangepicker;

class MomentPluginAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@npm/moment';

	public $js = [
		'min/moment.min.js',
	];

	public $depends = [];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}