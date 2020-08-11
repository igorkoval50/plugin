<?php

namespace KategoriesTeaserDelight\Bootstrap;

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
        $delightElement = $this->emotionComponentInstaller->createOrUpdate(
            $this->pluginName,
            'KategoriesTeaserDelight',
            [
                'name' => 'Delight Video',
                'template' => 'emotion_vimeo',
                'cls' => 'emotion-vimeo-element',
                'description' => 'A simple delight banner element for the shopping worlds.'
            ]
        );

        $delightElement->createMediaField([
            'name' => 'delight_image',
            'fieldLabel' => 'The banner image',
            'valueField' => 'virtualPath'
        ]);

        $delightElement->createTextField([
            'name' => 'delight_headline',
            'fieldLabel' => 'Headline of the banner',
            'supportText' => 'Write your banner headline.',
            'defaultValue' => 'Lackpflege'
        ]);

        $delightElement->createTextField([
            'name' => 'delight_button_txt',
            'fieldLabel' => 'text of the button',
            'supportText' => 'Write your txt what appear in the button.',
            'defaultValue' => 'Entdecken'
        ]);

        $delightElement->createTextField([
            'name' => 'delight_button_href',
            'fieldLabel' => 'href of the button',
            'supportText' => 'Write your href of the category',
            'defaultValue' => '#'
        ]);
    }
}
