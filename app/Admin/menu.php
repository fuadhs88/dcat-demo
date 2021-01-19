<?php

return [
    [
        'id'        => 'layout',
        'title'     => 'layout',
        'icon'      => 'fa-cubes',
        'uri'       => 'layout',
        'parent_id' => 0,
    ],

    /////////////////////////////////////////////////////
    [
        'id'        => 'tables',
        'title'     => 'tables ',
        'icon'      => 'feather icon-grid',
        'uri'       => '',
        'parent_id' => 0,
    ],

    [
        'id'        => 'grid',
        'title'     => 'Default Form',
        'icon'      => 'feather icon-menu',
        'uri'       => 'components/grid',
        'parent_id' => 'tables',
    ],

    [
        'id'        => 'reports',
        'title'     => 'Combination header',
        'icon'      => 'feather icon-menu',
        'uri'       => 'reports',
        'parent_id' => 'tables',
    ],
    [
        'id'        => 'fixed-columns',
        'title'     => 'fixed-columns',
        'icon'      => 'feather icon-menu',
        'uri'       => 'fixed-columns',
        'parent_id' => 'tables',
    ],
    [
        'id'        => 'with-border',
        'title'     => 'with-border',
        'icon'      => 'feather icon-menu',
        'uri'       => 'with-border',
        'parent_id' => 'tables',
    ],
    [
        'id'        => 'grid-tree',
        'title'     => 'grid-tree',
        'icon'      => 'feather icon-align-left',
        'uri'       => 'tree',
        'parent_id' => 'tables',
    ],
    [
        'id'        => 'selector',
        'title'     => 'Filter',
        'icon'      => 'feather icon-menu',
        'uri'       => 'tables/selector',
        'parent_id' => 'tables',
    ],
    [
        'id'        => 'custom-grid',
        'title'     => 'Custom view',
        'icon'      => 'feather icon-image',
        'uri'       => 'grid/custom',
        'parent_id' => 'tables',
    ],
    [
        'id'        => 'row-space',
        'title'     => 'row-space',
        'icon'      => 'feather icon-menu',
        'uri'       => 'row-space',
        'parent_id' => 'tables',
    ],
    ///////////////////////////////

    [
        'id'        => 'form',
        'title'     => 'Form',
        'icon'      => 'feather icon-edit',
        'uri'       => '',
        'parent_id' => 0,
    ],
    [
        'id'        => 'form1',
        'title'     => 'form1',
        'icon'      => 'feather icon-edit-1',
        'uri'       => 'form',
        'parent_id' => 'form',
    ],
    [
        'id'        => 'modal',
        'title'     => 'Modal',
        'icon'      => 'feather icon-edit-1',
        'uri'       => 'form/modal',
        'parent_id' => 'form',
    ],
    [
        'id'        => 'stform',
        'title'     => 'Step-by-step form',
        'icon'      => ' fa-list-ol',
        'uri'       => 'form/step',
        'parent_id' => 'form',
    ],

    [
        'id'        => 'whenform',
        'title'     => 'Dynamic form display',
        'icon'      => 'feather icon-edit-1',
        'uri'       => 'form/when',
        'parent_id' => 'form',
    ],

    [
        'id'        => 'full',
        'title'     => 'Full Page',
        'icon'      => 'fa-cut',
        'uri'       => 'full',
        'parent_id' => 0,
    ],

    ///////////////////////////////////////////////////////
//    [
//        'id'        => 'chart',
//        'title'     => 'Chart',
//        'icon'      => ' fa-pie-chart',
//        'uri'       => 'components/charts',
//        'parent_id' => 1,
//    ],
    [
        'id'        => 'metric-card',
        'title'     => 'metric-card',
        'icon'      => ' fa  fa-line-chart',
        'uri'       => 'components/metric-cards',
        'parent_id' => 1,
    ],


    ///////////////////////////////////////////////////////
    [
        'id'        => 1,
        'title'     => 'Component ',
        'icon'      => 'fa-building',
        'uri'       => '',
        'parent_id' => 0,
    ],


    [
        'id'        => 'modal',
        'title'     => 'Modal',
        'icon'      => ' fa fa-clone',
        'uri'       => 'components/modal',
        'parent_id' => 1,
    ],
//    [
//        'id'        => 'navbar',
//        'title'     => 'Navbar',
//        'icon'      => 'fa-navicon',
//        'uri'       => 'components/navbar',
//        'parent_id' => 1,
//    ],
    [
        'id'        => 'dropdown',
        'title'     => 'Dropdown',
        'icon'      => 'fa-list-ol',
        'uri'       => 'components/dropdown-menu',
        'parent_id' => 1,
    ],
    [
        'id'        => 'button',
        'title'     => 'Tab & Button',
        'icon'      => 'fa-btc',
        'uri'       => 'components/tab-button',
        'parent_id' => 1,
    ],
    [
        'id'        => 'checkbox',
        'title'     => 'Checkbox & Radio',
        'icon'      => 'fa-check-square-o',
        'uri'       => 'components/checkbox-radio',
        'parent_id' => 1,
    ],
    [
        'id'        => 'alert',
        'title'     => 'Alert',
        'icon'      => 'fa-circle-o-notch',
        'uri'       => 'components/alert',
        'parent_id' => 1,
    ],
    [
        'id'        => 'markdown',
        'title'     => 'Markdown',
        'icon'      => 'fa-trademark',
        'uri'       => 'components/markdown',
        'parent_id' => 1,
    ],
    [
        'id'        => 'tooltip',
        'title'     => 'Tooltip',
        'icon'      => 'fa-info-circle',
        'uri'       => 'components/tooltip',
        'parent_id' => 1,
    ],
    [
        'id'        => 'loading',
        'title'     => 'Loading',
        'icon'      => 'fa-spin fa-circle-o-notch',
        'uri'       => 'components/loading',
        'parent_id' => 1,
    ],
//    [
//        'id'        => 'accordion',
//        'title'     => 'Accordion',
//        'icon'      => 'fa-plus-circle',
//        'uri'       => 'components/accordion',
//        'parent_id' => 1,
//    ],


    ///////////////////////////////////////////////////////
    [
        'id'        => 'api',
        'title'     => 'Data From Api',
        'icon'      => 'fa-film',
        'uri'       => '',
        'parent_id' => 0,
    ],
    [
        'id'        => 'theaters',
        'title'     => 'In Theaters',
        'icon'      => '',
        'uri'       => 'movies/in-theaters',
        'parent_id' => 'api',
    ],
    [
        'id'        => 'coming',
        'title'     => 'Coming Soon',
        'icon'      => '',
        'uri'       => 'movies/coming-soon',
        'parent_id' => 'api',
    ],
    [
        'id'        => 'top250',
        'title'     => 'Top 250',
        'icon'      => '',
        'uri'       => 'movies/top250',
        'parent_id' => 'api',
    ],

    //////////////////////////////////
//    [
//        'id'        => 'extensions',
//        'title'     => 'Extension Demo',
//        'icon'      => 'fa fa-plugin',
//        'uri'       => '',
//        'parent_id' => 0,
//    ],
    [
        'id'        => 'editor',
        'title'     => 'Editor ',
        'icon'      => 'fa-underline',
        'uri'       => '',
        'parent_id' => '0',
    ],
    [
        'id'        => 'tinymce',
        'title'     => 'TinyMCE',
        'icon'      => '',
        'uri'       => 'form/tinymce',
        'parent_id' => 'editor',
    ],
    [
        'id'        => 'markdown',
        'title'     => 'Markdown',
        'icon'      => '',
        'uri'       => 'form/markdown',
        'parent_id' => 'editor',
    ],
    [
        'id'        => 'ueditor',
        'title'     => 'UEditor',
        'icon'      => '',
        'uri'       => 'extensions/ueditor',
        'parent_id' => 'editor',
    ],
];
