{block name="frontend_widgets_banner_slider"}
    <div class="emotion--banner-slider image-slider"
         data-image-slider="true"
         data-thumbnails="false"
         data-lightbox="false"
         data-loopSlides="true"
         data-animationSpeed="500"
         data-arrowControls="{$Data.showArrows}}"
         data-autoSlideInterval="{$Data.advanced_element_slider_settings_slideduration}"
         data-autoSlide="true"
         data-imageSelector=".image-slider--item">


        {block name="frontend_widgets_banner_slider_container"}
            <div class="banner-slider--container image-slider--container">

                {block name="frontend_widgets_banner_slider_slide"}
                    <div class="banner-slider--slide image-slider--slide">

                        {for $i=1 to 3}

                            {assign var='slidePreLine' value="advanced_element_slider_pre_line1_slide`$i`"}
                            {assign var='slideLine1' value="advanced_element_slider_line1_slide`$i`"}
                            {assign var='slideLine2' value="advanced_element_slider_line2_slide`$i`"}
                            {assign var='slideLink1' value="advanced_element_slider_badge1_slide`$i`"}
                            {assign var='slideButtonText' value="advanced_element_slider_button_text_slide`$i`"}
                            {assign var='slideImageFull' value="advanced_element_slider_background_image_full_slide`$i`"}
                            {assign var='slideModelName' value="advanced_element_slider_model_name_slide`$i`"}

                            {* Slide output start *}
                            {if !empty($Data.$slideLine1)}
                                {block name="frontend_widgets_banner_slider_item"}
                                    <div class="banner-slider--item image-slider--item"
                                         data-coverImage="true"
                                         data-containerSelector=".banner-slider--banner">

                                        {block name="frontend_widgets_banner_slider_banner"}
                                            <div class="banner-slider--banner">

                                                {block name="frontend_widgets_banner_slider_banner_picture"}
                                                    <picture>
                                                        {insert name="getSourceSet" source="{$Data.$slideImageFull}" class="banner-slider--image" max-size="2500"}
                                                    </picture>
                                                {/block}
                                            </div>
                                        {/block}


                                        {block name="frontend_widgets_banner_slider_link"}
                                            <a href="{$Data.$slideLink1}"
                                               class="banner-slider--box-link">
                                                <div class="banner-slider--box-link-content">
                                                    <span class="subtitle">
                                                        {$Data.$slidePreLine}
                                                    </span>
                                                    <div class="title">
                                                        {$Data.$slideLine1}
                                                    </div>
                                                    <p> {$Data.$slideLine2}</p>
                                                    <button class="btn is--primary"
                                                            href="{$Data.$slideLink1}">
                                                        {$Data.$slideButtonText}
                                                    </button>
                                                    <div class="link">
                                                        {$Data.$slideModelName}
                                                    </div>
                                                </div>
                                            </a>
                                        {/block}
                                    </div>
                                {/block}
                            {/if}
                        {/for}
                    </div>
                {/block}

            </div>
        {/block}
    </div>
{/block}

