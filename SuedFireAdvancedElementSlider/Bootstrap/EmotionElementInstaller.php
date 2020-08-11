<?php

namespace SuedFireAdvancedElementSlider\Bootstrap;

use Shopware\Components\Emotion\ComponentInstaller;

class EmotionElementInstaller
{
    /**
     * @var ComponentInstaller
     */
    private $emotionComponentInstaller;

    /**
     * @var string
     */
    private $pluginName;

    /**
     * @param string $pluginName
     * @param ComponentInstaller $emotionComponentInstaller
     */
    public function __construct($pluginName, ComponentInstaller $emotionComponentInstaller)
    {
        $this->emotionComponentInstaller = $emotionComponentInstaller;
        $this->pluginName = $pluginName;
    }

    public function install()
    {
        $advancedSliderElement = $this->emotionComponentInstaller->createOrUpdate(
            $this->pluginName,
            'SuedFireAdvancedElementSlider',
            [
                'name' => 'Advanced Element Slider',
                'xtype' => 'advanced-element-slider',
                'template' => 'advanced_element_slider',
                'cls' => 'advanced-element-slider',
                'description' => 'A advanced element slider'
            ]
        );

        // Slide1
        $advancedSliderElement->createTextField([
            'name' => 'advanced_element_slider_pre_line1_slide1',
            'fieldLabel' => 'Slide 1 - kleiner Top Text oben',
            'allowBlank' => false
        ]);

        $advancedSliderElement->createTextField([
            'name' => 'advanced_element_slider_line1_slide1',
            'fieldLabel' => 'Slide 1 - Zeile 1',
            'allowBlank' => false
        ]);

        $advancedSliderElement->createTextField([
            'name' => 'advanced_element_slider_line2_slide1',
            'fieldLabel' => 'Slide 1 - Zeile 2',
            'allowBlank' => false
        ]);

        $advancedSliderElement->createTextField([
            'name' => 'advanced_element_slider_button_text_slide1',
            'fieldLabel' => 'Slide 1 - Button Text',
            'allowBlank' => true
        ]);

        $advancedSliderElement->createTextField([
            'name' => 'advanced_element_slider_badge1_slide1',
            'fieldLabel' => 'Slide 1 - Link',
            'allowBlank' => true
        ]);

        $advancedSliderElement->createMediaField(
            [
                'name' => 'advanced_element_slider_background_image_full_slide1',
                'fieldLabel' => 'Slide 1 - Hintergrundbild (voll)',
                'allowBlank' => false
            ]
        );

        $advancedSliderElement->createTextField([
            'name' => 'advanced_element_slider_model_name_slide1',
            'fieldLabel' => 'Slide 1 - Model Name',
            'allowBlank' => false
        ]);

        // Slide2
        $advancedSliderElement->createTextField([
            'name' => 'advanced_element_slider_pre_line1_slide2',
            'fieldLabel' => 'Slide 2 - kleiner Top Text oben',
            'allowBlank' => true
        ]);


        $advancedSliderElement->createTextField([
            'name' => 'advanced_element_slider_line1_slide2',
            'fieldLabel' => 'Slide 2 - Zeile 1',
            'allowBlank' => true
        ]);

        $advancedSliderElement->createTextField([
            'name' => 'advanced_element_slider_line2_slide2',
            'fieldLabel' => 'Slide 2 - Zeile 2',
            'allowBlank' => true
        ]);

        $advancedSliderElement->createTextField([
            'name' => 'advanced_element_slider_button_text_slide2',
            'fieldLabel' => 'Slide 2 - Button Text',
            'allowBlank' => true
        ]);

        $advancedSliderElement->createTextField([
            'name' => 'advanced_element_slider_badge1_slide2',
            'fieldLabel' => 'Slide 2 - Link',
            'allowBlank' => true
        ]);


        $advancedSliderElement->createMediaField(
            [
                'name' => 'advanced_element_slider_background_image_full_slide2',
                'fieldLabel' => 'Slide 2 - Hintergrundbild (voll)',
                'allowBlank' => true
            ]
        );

        $advancedSliderElement->createTextField([
            'name' => 'advanced_element_slider_model_name_slide2',
            'fieldLabel' => 'Slide 2 - Model Name',
            'allowBlank' => true
        ]);

        // Slide3
        $advancedSliderElement->createTextField([
            'name' => 'advanced_element_slider_pre_line1_slide3',
            'fieldLabel' => 'Slide 3 - kleiner Top Text oben',
            'allowBlank' => true
        ]);


        $advancedSliderElement->createTextField([
            'name' => 'advanced_element_slider_line1_slide3',
            'fieldLabel' => 'Slide 3 - Zeile 1',
            'allowBlank' => true
        ]);

        $advancedSliderElement->createTextField([
            'name' => 'advanced_element_slider_line2_slide3',
            'fieldLabel' => 'Slide 3 - Zeile 2',
            'allowBlank' => true
        ]);

        $advancedSliderElement->createTextField([
            'name' => 'advanced_element_slider_button_text_slide3',
            'fieldLabel' => 'Slide 3 - Button Text',
            'allowBlank' => true
        ]);

        $advancedSliderElement->createTextField([
            'name' => 'advanced_element_slider_badge1_slide3',
            'fieldLabel' => 'Slide 3 - Link',
            'allowBlank' => true
        ]);
        $advancedSliderElement->createMediaField(
            [
                'name' => 'advanced_element_slider_background_image_full_slide3',
                'fieldLabel' => 'Slide 3 - Hintergrundbild (voll)',
                'allowBlank' => true
            ]
        );


        $advancedSliderElement->createTextField([
            'name' => 'advanced_element_slider_model_name_slide3',
            'fieldLabel' => 'Slide 3 - Model Name',
            'allowBlank' => true
        ]);

    }
}
