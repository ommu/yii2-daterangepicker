<?php
/**
 * Class DateRangePicker
 * @package ommu\daterangepicker
 * 
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2020 OMMU (www.ommu.id)
 * @created date 11 August 2020, 20:42 WIB
 * @link https://github.com/ommu/yii2-daterangepicker
 *
 */

namespace ommu\daterangepicker;

use Yii;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Inflector;
use ommu\daterangepicker\DaterangepickerAsset;

class DateRangePicker extends \yii\widgets\InputWidget
{
    /**
     * @var array the HTML attributes for the form input
     */
    public $options = ['class' => 'form-control'];

    /**
     * {@inheritdoc}
     */
    public $pluginName = 'daterangepicker';

    /**
     * {@inheritdoc}
     */
    public $placeholder;

    /**
     * @var array Date Range Picker options
     * @link https://www.daterangepicker.com/#options
     */
    public $clientOptions = [];

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // add data-toggle attribute
        $this->options = ArrayHelper::merge($this->options, ['data-toggle' => $this->pluginName]);

        // add placeholder attribute
        if (isset($this->placeholder)) {
            $this->options = ArrayHelper::merge($this->options, ['placeholder' => $this->placeholder]);
        }

        if (is_array($this->clientOptions) && !empty($this->clientOptions)) {
            $this->options = ArrayHelper::merge($this->options, $this->getAttributeData($this->clientOptions));
        }

        // set value from query params
        $queryParams = Yii::$app->request->queryParams;
        if (is_array($queryParams) && !empty($queryParams) && array_key_exists($this->getInputId(), $queryParams) && $queryParams != '') {
            $this->options = ArrayHelper::merge($this->options, ['value' => Yii::$app->request->get($this->getInputId())]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $this->registerAssets();
        $this->renderContent();
    }

    /**
     * Return input id
     *
     * @return string
     */
    public function getInputId(): string
    {
        return $this->options['id'];
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeData($data): array
    {
        foreach ($data as $key => $val) {
            if ($val == '') {
                continue;
            }

            $newKey = join('-', ['data', $this->pluginName, Inflector::camel2id($key)]);
            if (is_bool($val)) {
                $val = $val == true ? 'true' : 'false';
            }
            $data[$newKey] = $val;

            unset($data[$key]);
        }

        return $data;
    }

    /**
     * Register client assets
     */
    protected function registerAssets()
    {
        $view = $this->getView();
        DaterangepickerAsset::register($view);
    }

    /**
     * Renders widget
     */
    private function renderContent()
    {
        $options = ArrayHelper::merge($this->options, ['id' => $this->id]);

        echo $this->hasModel()
            ? Html::activeTextInput($this->model, $this->attribute, $options)
            : Html::textInput($this->name, $this->value, $options);
    }
}
