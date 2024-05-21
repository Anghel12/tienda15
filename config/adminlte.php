<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'Cyber Ecotienda',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Google Fonts
    |--------------------------------------------------------------------------
    |
    | Here you can allow or not the use of external google fonts. Disabling the
    | google fonts may be useful if your admin panel internet access is
    | restricted somehow.
    |
    | For detailed instructions you can look the google fonts section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'google_fonts' => [
        'allowed' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>Panel</b>',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Admin Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can setup an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    | For detailed instructions you can look the auth logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 50,
            'height' => 50,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Preloader Animation
    |--------------------------------------------------------------------------
    |
    | Here you can change the preloader animation configuration.
    |
    | For detailed instructions you can look the preloader section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'preloader' => [
        'enabled' => true,
        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'AdminLTE Preloader Image',
            'effect' => 'animation__shake',
            'width' => 60,
            'height' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => true,
    'usermenu_desc' => false,
    'usermenu_profile_url' => true,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => false,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-indigo elevation-4',
    'classes_sidebar_nav' => 'nav-child-indent',
    'classes_topnav' => 'navbar-dark navbar-dark',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => '/',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'search',
            'topnav_right' => true,      
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        [
            'type' => 'sidebar-menu-search',
            'text' => 'search',
        ],


        ['header' => 'ADMINISTRADOR',
        'can'        => 'admin.adminTitulo.index',
        ],

        [
            'text'        => 'Dashboard Graficos',
            'route'         => 'admin.dashboards.index',
            'icon'        => 'fas fa-tachometer-alt',
            'icon_color' => 'orange',
            'label'       => 4, 
            'label_color' => 'success',
            'submenu' => [
                [
                    'text'        => 'Analitycs web',
                    'url'         => '#',
                    'route'         => 'admin.sales.index',
                    'icon'        => 'fas fa-chart-line',
                    'icon_color' => 'pink',
                    'can'        => 'admin.error405.index',
                ],
                [
                    'text'        => 'E-Comerce',
                    'url'         => '#',
                    'route'         => 'admin.sales.index',
                    'icon'        => 'fas fa-chart-line',
                    'icon_color' => 'pink',
                    'can'        => 'admin.error405.index',
                ],
                [
                    'text'        => 'Bank',
                    'url'         => '#',
                    'route'         => 'admin.sales.index',
                    'icon'        => 'fas fa-chart-line',
                    'icon_color' => 'pink',
                    'can'        => 'admin.error405.index',
                ],
                [
                    'text'        => 'Blog',
                    'url'         => '#',
                    'route'         => 'admin.Blogs.index',
                    'icon'        => 'fas fa-chart-line',
                    'icon_color' => 'pink',
                    'can'        => 'admin.error405.index',
                ],
                [
                    'text'        => 'Proyectos',
                    'url'         => '#',
                    'route'         => 'admin.sales.index',
                    'icon'        => 'fas fa-chart-line',
                    'icon_color' => 'pink',
                    'can'        => 'admin.error405.index',
                ],
                [
                    'text'        => 'CRM',
                    'url'         => '#',
                    'route'         => 'admin.sales.index',
                    'icon'        => 'fas fa-chart-line',
                    'icon_color' => 'pink',
                    'can'        => 'admin.error405.index',
                ],
            ],
        ],
    
        [
            'text'    => 'ADMIN',
            'icon'    => 'fas fa-fw fa-cog',
            'icon_color' => 'info',
            'icon_color' => 'red',
            'can'        => 'admin.adminTitulo.index',
            'submenu' => [

                [
                    'text'        => 'Roles',
                    'route'         => 'admin.roles.index',
                    'icon'        => 'fas fa-users',
                    'icon_color' => 'green',
                    'label'       => 2,
                    'label_color' => 'success',
                    'can'        => 'admin.roles.index',
                    
                ],

                
                [
                    'text'        => 'ConfigCoin',
                    'route'         => 'admin.coinsConfig.index',
                    'icon'        => 'fas fa-cogs fa-fw',
                    'icon_color' => 'gray',
                    'label_color' => 'success',
                ],

                [
                    'text'        => 'Pagos-Metodos',
                    'route'         => 'admin.PaymentMethods.index',
                    'icon'        => 'fas fa-money-check-alt',
                    'icon_color' => 'green',
                    'label_color' => 'success',
                    'can'        => 'admin.PaymentMethods.index',
                ],

                [
                    'text'        => 'Usuarios',
                    'route'         => 'admin.users.index',
                    'icon'        => 'fas fa-users',
                    'icon_color' => 'success',
                    'label'       => 4,
                    'label_color' => 'success',
                    'can'        => 'admin.users.index',
                ],

                [
                    'text'        => 'DeviceInfos',
                    'route'         => 'admin.deviceInfos.index',
                    'icon'        => 'fas fa-mobile-alt',
                    'icon_color' => 'pink',
                    'label_color' => 'success',
                    'can'        => 'admin.deviceInfos.index',
                ],
                            
                [
                    'text'        => 'CommentsAll',
                    'route'         => 'admin.CommentsAll.index',
                    'icon'        => 'far fa-comments',
                    'icon_color' => 'orange',
                    'label_color' => 'success',
                    'can'        => 'admin.CommentsAll.index',
                ],

            
                [
                    'text'        => 'Terminos y condiciones',
                    'route'         => 'admin.Terms.index',
                    'icon'        => 'fas fa-file-contract',        
                    'label_color' => 'success',
                    'can'        => 'admin.Terms.index',
                ],

                [
                    'text'        => 'Compartidos',
                    'route'         => 'admin.Shareds.index',
                    'icon'        => 'fas fa-share-alt',
                    'label_color' => 'success',
                    'can'        => 'admin.Shareds.index',
                ],

                [
                    'text'        => 'Normas',
                    'route'         => 'admin.Rules.index',
                    'icon'        => 'fas fa-balance-scale',
                    'icon_color' => 'purple',
                    'label_color' => 'success',
                    'can'        => 'admin.Rules.index',
                ],
                [
                    'text'        => 'Proveedores',
                    'route'         => 'admin.providers.index',
                    'icon'        => 'fas fa-tachometer-alt ',
                    'icon_color' => 'info',
                    'label_color' => 'success',
                    'can'        => 'admin.providers.index',
                ],
                [
                    'text'        => 'Reportes',
                    'route'         => 'admin.reports.index',
                    'icon'        => 'fas fa-chart-bar',
                    'icon_color' => 'red',
                    'label_color' => 'success',
                    'can'        => 'admin.reports.index',
                ],
        
                [
                    'text'        => 'baneos',
                    'route'         => 'admin.bans.index',
                    'icon'        => 'fas fa-ban',
                    'icon_color' => 'red',
                    'label_color' => 'success',
                    'can'        => 'admin.bans.index',
                ],
        
                [
                    'text'        => 'Blocked_follow',
                    'route'         => 'admin.Blocked_follows.index',
                    'icon'        => 'fas fa-ban fa-fw',
                    'icon_color' => 'red',
                    'label_color' => 'success',
                    'can'        => 'admin.Blocked_follows.index',
                ],
        
            ],
        ],

        [
            'text'    => 'Home Config',
            'icon'    => 'fas fa-cogs fa-fw',
            'icon_color' => 'info',
            'can'        => 'admin.adminTitulo.index',
            'submenu' => [
                [
                    'text' => 'NavBar',
                    'route'         => 'admin.navbars.index',
                    'icon_color' => 'primary',
                    'can'        => 'admin.navbars.index',
                ],
                [
                    'text'        => 'Sobre nosotros',
                    'route'         => 'admin.about_us_homes.index',
                    'icon'        => 'fas fa-icons',
                    'icon_color' => 'gray',
                    'label_color' => 'success',
                    'can'        => 'admin.icons.index',
                ],
                [
                    'text'        => 'Ayuda',
                    'route'         => 'admin.home_helps.index',
                    'icon'        => 'fas fa-icons',
                    'icon_color' => 'gray',
                    'label_color' => 'success',
                    'can'        => 'admin.icons.index',
                ],

                [
                    'text' => 'Slider',                
                    'route'         => 'admin.sliders.index', 
                    'icon_color' => 'primary',
                    'can'        => 'admin.sliders.index',
                ],
                [
                    'text' => 'Post youtube',                
                    'route'         => 'admin.postyoutubes.index', 
                    'icon_color' => 'primary',
                    'can'        => 'admin.postyoutubes.index',
                ],

                [
                    'text' => 'HomeBaner',                
                    'route'         => 'admin.HomeBaners.index', 
                    'icon_color' => 'primary',
                    'can'        => 'admin.HomeBaner.index',
                ],

                [
                    'text' => 'Footer',                
                    'route'         => 'admin.footers.index',
                    'icon_color' => 'primary', 
                    'can'        => 'admin.footers.index',
                ],
                [
                    'text' => 'Redes Sociales',                
                    'route'         => 'admin.footers.index', 
                    'icon_color' => 'primary',
                    'can'        => 'admin.footers.index',
                ],
                [
                    'text'        => 'HomeContact',
                    'route'         => 'admin.HomeContact.index',
                    'icon'        => 'fas fa-home fa-fw',
                    'label_color' => 'success',
                    'can'        => 'admin.HomeContact.index',
                ],
                
            ],
        ],


        [
            'text'    => 'Configuracion',
            'icon'    => 'fas fa-cogs fa-fw',
            'icon_color' => 'info',
            'can'        => 'admin.adminTitulo.index',
            'submenu' => [
                [
                    'text'        => 'DevTools',
                    'route'         => 'admin.DevTools.index',
                    'icon'        => 'fas fa-tools',
                    'label_color' => 'success',
                    'can'        => 'admin.DevTools.index',
                ],
             
                [
                    'text'        => 'Icons',
                    'route'         => 'admin.icons.index',
                    'icon'        => 'fas fa-icons',
                    'icon_color' => 'gray',
                    'label_color' => 'success',
                    'can'        => 'admin.icons.index',
                ],
                [
                    'text'        => 'Database',
                    'route'         => 'admin.database.index',
                    'icon'        => 'fas fa-database',
                    'icon_color' => 'gray',
                    'label_color' => 'success',
                    'can'        => 'admin.database.index',
                ],

                [
                    'text'        => 'ENV CONFIG muy config',
                    /* 'route'         => 'admin.envconfig.index', */
                    'icon'        => 'fas fa-cog',
                    'can'        => 'admin.envconfig.index',
                    'label_color' => 'success',
                ],
                
            ],
        ],

        [
            'text'        => 'Proyectos',
            'icon'        => 'fas fa-chart-line',
            'icon_color' => 'green',
            'label_color' => 'success',
            'can'        => 'admin.adminTituloExtras.index',
            'submenu' => [
                [
                    'text'        => 'list',
                    'url'         => '#',
                    'route'         => 'admin.sales.index',
                    'icon'        => 'fas fa-chart-line',
                    'icon_color' => 'pink',
                    'can'        => 'admin.error404.index',
                ],
                [
                    'text'        => 'details',
                    'url'         => '#',
                    'route'         => 'admin.sales.index',
                    'icon'        => 'fas fa-chart-line',
                    'icon_color' => 'pink',
                    'can'        => 'admin.error405.index',
                ],
                [
                    'text'        => 'Nuevo Proyecto',
                    'url'         => '#',
                    'route'         => 'admin.sales.index',
                    'icon'        => 'fas fa-chart-line',
                    'icon_color' => 'pink',
                    'can'        => 'admin.error405.index',
                ],

            ],
        
        ],

        [
            'text'        => 'Admin Ventas',
            'icon'        => 'fas fa-chart-line',
            'icon_color' => 'pink',
            'label_color' => 'success',
            'can'        => 'admin.adminTitulo.index',
            'submenu' => [

                [
                    'text'        => 'vendedores',
                    'route'         => 'admin.users.index',
                    'icon'        => 'fas fa-shopping-cart',
                    'icon_color' => 'pink',
                    'label_color' => 'success',
                ],
                [
                    'text'        => 'carrito orden',
                    'route'         => 'admin.users.index',
                    'icon'        => 'fas fa-shopping-cart',
                    'icon_color' => 'pink',
                    'label_color' => 'success',
                ],
                [
                    'text'        => 'Compras',
                    'route'         => 'admin.icons.index',
                    'icon'        => 'fas fa-shopping-cart',
                    'label_color' => 'success',
                ],
            ],

        
        ],

        [
            'text'        => 'Extras ADMIN',
            'icon'        => 'fas fa-chart-line',
            'icon_color' => 'green',
            'label_color' => 'success',
            'can'        => 'admin.adminTituloExtras.index',
            'submenu' => [
                [
                    'text'        => 'error 404',
                    'url'         => '#',
                    'route'         => 'admin.sales.index',
                    'icon'        => 'fas fa-chart-line',
                    'icon_color' => 'pink',
                    'can'        => 'admin.error404.index',
                ],

                [
                    'text'        => 'error 405',
                    'url'         => '#',
                    'route'         => 'admin.sales.index',
                    'icon'        => 'fas fa-chart-line',
                    'icon_color' => 'pink',
                    'can'        => 'admin.error405.index',
                ],

            ],
        
        ],

        [
            'text'    => 'Messages',
            'icon'    => 'fas fa-fw fa-envelope',
            'icon_color' => 'info',
            'can'        => 'admin.adminTituloMessages.index',
            'submenu' => [
                [
                    'text' => 'Enviar',
                    'route'         => 'admin.messages.index',
                    'icon'    => 'fas fa-fw fa-share',
                    'icon_color' => 'dark',
                    'can'        => 'admin.messages.index',
                ],

                [
                    'text' => 'crear mensaje',                
                    'route'         => 'admin.messages.create',
                    'icon'    => 'fas fa-fw fa-share',
                    'icon_color' => 'dark', 
                    'can'        => 'admin.messages.create',
                ],
            ],
        ],

        
    

        [
            'text'    => 'Inventario',
            'icon'    => 'fas fa-fw fa-share',
            'icon_color' => 'primary',
            'can'        => 'admin.adminTituloInventario.index',
            'submenu' => [

                [
                    'text' => 'Tags',
                    'route'  => 'admin.tags.index',
                    'icon' => 'fas fa-fw fa-lock',
                    'icon_color' => 'secondary',
                   'can'        => 'admin.tags.index',
                ],

                      
                [
                    'text' => 'Categorias',
                    'route'  => 'admin.categories.index',
                    'icon' => 'fas fa-folder-open',
                    'icon_color' => 'secondary',
                    'can'        => 'admin.categories.index',

                    'submenu' => [
                        [
                            'text' => 'Sub Categorias',
                            'route'  => 'admin.sub_categories.index',
                            'icon' => 'fas fa-sitemap',
                            'icon_color' => 'secondary',
                            'can'        => 'admin.sub_categories.index',
                           
                        ],
                    ],
                ],

                [
                    'text' => 'Marcas',
                    'route'  => 'admin.brands.index',
                    'icon' => 'fas fa-trademark',
                    'icon_color' => 'secondary',
                    'can'        => 'admin.brands.index',
                    
                ],
/*                 [
                    'text'    => 'level_one',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'level_two',
                            'url'  => '#',
                        ],
                        [
                            'text'    => 'level_two',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                            ],
                        ],
                    ],
                ], */
               
            ],
        ],

        ['header' => 'Ventas'],

        [
            'text'       => 'Ordenes',
            'icon_color' => 'red',
            'icon'        => 'fas fa-shopping-cart',
            'route'      => 'admin.orders.index',
           
        ],

        [
            'text'       => 'Ventas',
            'icon_color' => 'red',
            'icon'        => 'fas fa-shopping-cart',
            'route'      => 'admin.sales.index',
           
        ],

        [
            'text'       => 'Order tracking',
            'icon_color' => 'red',
            'icon'        => 'fas fa-shopping-cart',
            'route'      => 'admin.profile.index',
           
        ],


        ['header' => 'User'],
        [
            'text'        => 'YO',
            'route'         => 'admin.profile.index',
            'icon'        => 'fas fa-fw fa-user',
        ],

        ['header' => 'POSTS'],
        [
            'text'       => 'Listado de post',
            'icon_color' => 'red',
            'route'      => 'admin.posts.index',
            'can'        => 'admin.posts.index',
        ],
        [
            'text'       => 'Crear post',
            'icon_color' => 'green',
            'route'      => 'admin.posts.create',
            'can'        => 'admin.posts.create',
        ],
        [
            'text'       => 'information',
            'icon_color' => 'cyan',
            
        ],

        ['header' => 'Blogs'],
        [
            'text'        => 'Blogs',
            'route'         => 'admin.Blogs.index',
            'icon'        => 'fas fa-pencil-alt fa-fw',
            'icon_color' => 'green',
            'label_color' => 'success',
        ],

        [
            'text'        => 'Reseñas',
            'route'         => 'admin.reviews.index',
            'icon'        => 'far fa-comment-alt',
            'icon_color' => 'purple',
            'label_color' => 'success',
        ],

        ['header' => 'Comprar Monedas'],
        [
            'text'        => 'Monedas',
            'route'         => 'admin.buyCoins.index',
            'icon'        => 'fas fa-coins fa-fw',
            'icon_color' => 'yellow',
            'label_color' => 'success',
        ],
        [
            'text'        => 'Prestamos',
            'route'         => 'admin.Loans.index',
            'icon'        => 'fas fa-clipboard-list',
            'icon_color' => 'green',
            'label_color' => 'success',
        ],
        [
            'text'        => 'Coins Gratis',
            'route'         => 'admin.Loans.index',
            'icon'        => 'fas fa-clipboard-list',
            'icon_color' => 'green',
            'label_color' => 'success',
        ],
        

        ['header' => 'User'],

        [
            'text'        => 'YO',
            'icon'        => 'fas fa-fw fa-user',
            'icon_color' => 'green',
            'label'       => 4,
            'label_color' => 'success',
            
            'submenu' => [
                [
                    'text'        => 'Historial',
                    'route'         => 'admin.histories.index',
                    'icon'        => 'fas fa-history fa-fw',
                    'icon_color' => 'gray',
                    'label_color' => 'success',
                ],

                [
                    'text'        => 'Cartera',
                    'route'         => 'admin.wallet.index',
                    'icon'        => 'fas fa-fw fa-user',
                    'icon_color' => 'green',
                    'label'       => 4,
                    'label_color' => 'success',
                ],
                [
                    'text'        => 'Referidos',
                    'route'         => 'admin.referrals.index',
                    'icon'        => 'fas fa-user-friends',
                    'icon_color' => 'secondary',
                    'label'       => 1,
                    'label_color' => 'success',
                ],
        
                [ 
                    'text'        => 'transactions',
                    'route'         => 'admin.transactions.index',
                    'icon'        => 'fas fa-exchange-alt fa-fw',
                    'icon_color' => 'green',
                    'label_color' => 'success',
                ],

                [
                    'text'        => 'Favoritos',
                    'route'         => 'admin.favorites.index',
                    'icon'        => 'fas fa-heart fa-fw',
                    'icon_color' => 'red',
                    'label_color' => 'success',
                ],
        
                [
                    'text'        => 'Follows',
                    'route'         => 'admin.follows.index',
                    'icon'        => 'fas fa-users fa-fw',
                    'icon_color' => 'red',
                    'label_color' => 'success',
                ],
                [
                    'text'        => 'Pagos',
                    'route'         => 'admin.Payments.index',
                    'icon'        => 'far fa-credit-card',
                    'icon_color' => 'green',
                    'label_color' => 'success',
                ],

                [
                    'text'        => 'Notifications',
                    'route'         => 'admin.Notifications.index',
                    'icon'        => 'far fa-bell',
                    'icon_color' => 'purple',
                    'label_color' => 'success',
                ],
            ],
        ],

        ['header' => 'Soporte'],
        [
            'text'        => 'chatgpt',
            'url'         => '#',
            'route'         => 'admin.sales.index',
            'icon'        => 'fas fa-chart-line',
            'icon_color' => 'pink',
            'can'        => 'admin.chatgpt.index',
        ],
        [
            'text'        => 'chat',
            'url'         => '#',
            'route'         => 'admin.sales.index',
            'icon'        => 'fas fa-chart-line',
            'icon_color' => 'pink',
            'can'        => 'admin.chat.index',
        ],

       


        ['header' => 'Ayudas'],
        [
            'text'        => 'Imagenes',
            'route'         => 'admin.Images.index',
            'icon'        => 'far fa-image',
            'icon_color' => 'pink',
            'label_color' => 'success',
        ],
       
        [
            'text'        => 'Maps',
            'route'         => 'admin.Maps.index',
            'icon'        => 'fas fa-map-marker-alt fa-fw',
            'icon_color' => 'green',
            'label_color' => 'success',
        ],
         
        
        [
            'text'        => 'Calculators',
            'route'         => 'admin.Calculators.index',
            'icon'        => 'fas fa-calculator',
            'icon_color' => 'gray',
            'label_color' => 'success',
        ], 
       
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => true,
];
