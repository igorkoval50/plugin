//
//{block name="backend/emotion/view/detail/elements/base"}
//{$smarty.block.parent}

Ext.define('Shopware.apps.Emotion.store.AdvancedElement', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend: 'Ext.data.Store',

    /**
     * Fields of the store records
     * @array
     */
    fields: ['id', 'name'],
    /**
     * Disable auto loading for this store
     * @boolean
     */
    autoLoad: false,

    pageSize: 15,
    /**
     * Configure the data communication
     * @object
     */
    proxy: {
        /**
         * Set proxy type to ajax
         * @string
         */
        type: 'ajax',

        extraParams: {
            parents: false,
            includeRoot: true
        },

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        url: '{url controller=category action=getPathByQuery}',

        /**
         * Configure the data reader
         * @object
         */
        reader: {
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }
    }
});


Ext.define('Shopware.apps.Emotion.view.detail.elements.AdvancedElementSlider', {

    /**
     * Extend from the base class for the grid elements.
     */
    extend: 'Shopware.apps.Emotion.view.detail.elements.Base',

    /**
     * Create the alias matching with the xtype you defined for your element.
     * The pattern is always 'widget.detail-element-' + xtype
     */
    alias: 'widget.detail-element-advanced-element-slider',

    /**
     * You can define an additional CSS class which will be used for the grid element.
     */
    //componentCls: 'advanced--element-slider',

    /**
     * Define the path to an image for the icon of your element.
     * You could also use a base64 string.
     */
    icon: 'data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNjRweCIgaGVpZ2h0PSI2NHB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMCwzMHY0NTJoNTEyVjMwSDB6IE0zMCw2MGgzNjJ2NjBIMzBWNjB6IE00ODIsNDUySDMwVjE1MGg0NTJWNDUyeiBNNDgyLDEyMGgtNjBWNjBoNjBWMTIweiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTYwLDI2N3YxMTBoMTU3LjM5N2wyOS41LDQ1aDE4LjIwNWwyOS41LTQ1SDQ1MlYyNjdINjB6IE00MjIsMzQ3SDI3OC4zOTdMMjU2LDM4MS4xNjZMMjMzLjYwMywzNDdIOTB2LTUwaDMzMlYzNDd6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==',

    /**
     * You can override the original `createPreview()` method
     * to create a custom grid preview for your element.
     *
     * @returns { string }
     */
    createPreview: function () {
        var me = this,
            preview = '',
            elementName = me.getConfigValue('advanced_element_slider_line1_slide1'),
            image = me.getConfigValue('advanced_element_slider_background_image_full_slide1'),
            style = ''
        ;

        if (Ext.isDefined(image)) {
            style = Ext.String.format('background-image: url([0]); background-size: cover', image);
        }


        if (Ext.isDefined(elementName)) {
            preview = Ext.String.format('<div class="x-emotion-element-preview-content x-emotion-preview-title" style="' + style + '">Advanced Element Slider<br/><small>[0]</small></div>', elementName);
        } else {
            preview = '<div class="x-emotion-element-preview-content x-emotion-preview-title">Advanced Element Slider<br/></div>';
        }

        return preview;
    },

});
//{/block}
