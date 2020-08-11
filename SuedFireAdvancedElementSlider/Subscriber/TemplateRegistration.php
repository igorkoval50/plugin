<?php

namespace SuedFireAdvancedElementSlider\Subscriber;

use Enlight\Event\SubscriberInterface;
use Enlight_Controller_ActionEventArgs;

class TemplateRegistration implements SubscriberInterface
{
    /**
     * @var string
     */
    private $pluginDirectory;

    /**
     * @param $pluginDirectory
     */
    public function __construct($pluginDirectory)
    {
        $this->pluginDirectory = $pluginDirectory;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Action_PostDispatchSecure_Backend_Emotion' => 'onPostDispatchBackendEmotion',
            'Shopware_Controllers_Widgets_Emotion_AddElement' => 'onEmotionAddElement',
        ];
    }

    /**
     * @param Enlight_Controller_ActionEventArgs $args
     */
    public function onPostDispatchBackendEmotion(Enlight_Controller_ActionEventArgs $args)
    {

        /** @var \Shopware_Controllers_Backend_Emotion $controller */
        $controller = $args->getSubject();
        $view = $controller->View();

        $view->addTemplateDir($this->pluginDirectory . '/Resources/views');
        $view->extendsTemplate('backend/emotion/sf_advanced_element_slider/view/detail/elements/advanced_element_slider.js');
    }


    public function onEmotionAddElement(\Enlight_Event_EventArgs $args)
    {

        $data = $args->getReturn();
        $data['showArrows'] = "true";
        if (isset($data['advanced_element_slider_settings_slideduration'])) {
            $data['advanced_element_slider_settings_slideduration'] = $data['advanced_element_slider_settings_slideduration'] * 1000;
        } else {
            $data['advanced_element_slider_settings_slideduration'] = 5000;
        }

        // hoverEffect
        $hoverEffect = array();
        if (!empty($data['advanced_element_slider_line1_slide1'])) {

            if (empty($data['advanced_element_slider_line1_slide2']) &&
                empty($data['advanced_element_slider_line1_slide3'])) {
                $data['showArrows'] = "false";
            }

        }

        for ($i = 1; $i <= 3; $i++) {
            $data['linkId_slide' . $i] = "";
            $data['viewport_slide' . $i] = ""; // detail || cat
            if (!empty($data['advanced_element_slider_category_slide' . $i])) {
                $data['linkId_slide' . $i] = $data['advanced_element_slider_category_slide' . $i];
                $data['viewport_slide' . $i] = "cat";
            } else {
                if (!empty($data['advanced_element_slider_article_slide' . $i])) {
                    $data['linkId_slide' . $i] = $data['advanced_element_slider_article_slide' . $i];
                    $data['viewport_slide' . $i] = "detail";
                }
            }
        }


        $args->setReturn($data);

    }


}