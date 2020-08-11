{block name="widgets_emotion_components_vimeo_element"}
<div class="delight-banner-wrapper">
    <div class="img">
        <img src="{$Data.delight_image}" alt="banner-image">
    </div>
    <div class="banner-txt">
        <h3 class="delight-headline">{$Data.delight_headline}</h3>
        <a href="{$Data.delight_button_href}" class="btn delight-button">{$Data.delight_button_txt}</a>
    </div>
</div>
{/block}


<style>
    .delight-banner-wrapper {
        position: relative;
    }
    .delight-banner-wrapper .banner-txt {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translate(-50%, 0);
        text-align: center;
    }
    .delight-banner-wrapper .delight-headline {
        color: #fff;
        text-transform: uppercase;
    }
    .delight-banner-wrapper .delight-button {
        background: #741427;
        border: 1px solid #741427;
        color: #fff;
        text-transform: uppercase;
        border-radius: 20px;
        padding-left: 15px;
        padding-right: 15px;
    }
    .delight-banner-wrapper .delight-button:hover {
        background: #aa142e;
        border: 1px solid #aa142e;
    }
    .delight-banner-wrapper .img img {
        min-width: 100%;
        min-height: 100%;
    }
</style>