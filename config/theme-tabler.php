<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Theme Configuration Values
    |--------------------------------------------------------------------------
    |
    | The file provides extra configs on top of config/backpack/ui.php
    |
    | Any value set here will override the ones defined in
    | config/backpack/ui.php when this theme is in use.
    |
    */

    /**
     * 1st layer of customization
     *
     * Simple pick a layout and let Backpack decide the best look for it.
     * No extra step is required.
     *
     * Where should the menu be positioned?
     */
    'layout' => 'horizontal',
    // horizontal
    // horizontal_dark
    // horizontal_overlap
    // vertical
    // vertical_dark
    // vertical_transparent
    // right_vertical
    // right_vertical_transparent
    // navbar_dark
    // navbar_sticky
    // rtl_mode
    // fluid
    // fluid_vertical

    /**
     * 2nd Layer of customization
     *
     * If you need to further customize the way your panel looks,
     * these options will help you achieve that.
     */
    'options' => [
        /**
         * When using horizontal_overlap layout, the overlap effect is not applied to all pages, but only a few (those that look nice).
         * Indicate the urls that should use an overlap effect — we include the dashboard as an example.
         */
        'urlsUsingOverLapEffect' => [
            backpack_url('dashboard'),
        ],

        /**
         * The color mode used by default.
         */
        'defaultColorMode' => 'dark', // light, dark

        /**
         * When true, a switch is displayed to let admins choose their favorite theme mode.
         * When false, the theme will only use the "defaultColorMode" set above.
         * In case "defaultColorMode" is null, light is the default.
         */
        'showColorModeSwitcher' => true,

        /**
         * When true, colors will display a beautiful Backpack skin :)
         */
        'useBackpackColorSkin' => true,

        /**
         * Fix the top-header component (present in all layout types) and the menu when the layout type is set as "horizontal".
         * This value is skipped when the layout type is horizontal-overlap, using false as default.
         */
        'useStickyHeader' => true,

        /**
         * When true, the content area will take the whole screen width.
         */
        'useFluidContainers' => false,
    ],

    /**
     * 3rd Layer of customization
     *
     * In case the first two steps were not enough, here you have full control over
     * the classes that make up the look of your panel.
     */
    'classes' => [
        /**
         * For background colors use:
         * bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success, bg-info, bg-blue, bg-light-blue,
         * bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan, bg-white.
         *
         * For links to be visible on different background colors use: "navbar-dark", "navbar-light".
         *
         */
        'topHeader' => null,

        /**
         * Applies only for Vertical Menu Layout
         * For standard sidebar look (transparent):
         *      - Remove "navbar-dark/light"
         *      - Remove "navbar-light/dark" from 'classes.topHeader' and instead use "bg-light"
         * You can also add a background class like bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success,
         * bg-info, bg-blue, bg-light-blue, bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan
         */
        'sidebar' => null,

        /**
         * Used in the top container menu when the layout is of horizontal type.
         */
        'menuHorizontalContainer' => null,

        /**
         * Used in the top menu content when the layout is of horizontal type.
         */
        'menuHorizontalContent' => null,

        /**
         * Make transparent with footer-transparent.
         * Hide it with d-none.
         *
         * Change background color with bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success, bg-info,
         * bg-blue, bg-light-blue, bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan, bg-white.
         */
        'footer' => null,
    ],

    /**
     * 4th Layer of customization
     *
     * Alright, if nothing so far met your need, then you still have an easy way to build
     * a custom layout using the already existing components of this theme.
     *
     * 1. Create a new blade file in resources/views/layouts/your-custom-layout.blade.php
     * 2. Replace the value of layout on this file with "your-custom-layout"
     * 3. Customize the blade and place components such as sidebar, header, top-bar, where you need them!
     */
];