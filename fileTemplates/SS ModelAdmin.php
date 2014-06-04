<?php
#parse("PHP File Header.php")

class ${NAME} extends ModelAdmin
{
    /**
     * The current url segment. {@link LeftAndMain::${DS}url_segment}
     *
     * @config
     * @var string
     */
    private static ${DS}url_segment = '';

    /**
     * The current menu title. {@link LeftAndMain::${DS}menu_title}
     *
     * @config
     * @var string
     */
    private static ${DS}menu_title = '';

    /**
     * List of all managed {@link DataObject}s in this interface. {@link ModelAdmin::${DS}managed_models}
     *
     * @config
     * @var array|string
     */
    private static ${DS}managed_models = array();
}