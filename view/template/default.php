<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title><?= $constante::NOM_SITE; ?></title>

    <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="<?= $constante->getUrl(array('img/')); ?>favicon.png">
    <link rel="apple-touch-icon" href="<?= $constante->getUrl(array('img/')); ?>icon57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="<?= $constante->getUrl(array('img/')); ?>icon72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="<?= $constante->getUrl(array('img/')); ?>icon76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="<?= $constante->getUrl(array('img/')); ?>icon114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="<?= $constante->getUrl(array('img/')); ?>icon120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="<?= $constante->getUrl(array('img/')); ?>icon144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="<?= $constante->getUrl(array('img/')); ?>icon152.png" sizes="152x152">
    <link rel="apple-touch-icon" href="<?= $constante->getUrl(array('img/')); ?>icon180.png" sizes="180x180">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="<?= $constante->getUrl(array('css/')); ?>bootstrap.min.css">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="<?= $constante->getUrl(array('css/')); ?>plugins.css">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="<?= $constante->getUrl(array('css/')); ?>main.css">

    <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="<?= $constante->getUrl(array('css/')); ?>themes.css">
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
    <script src="<?= $constante->getUrl(array('js/')); ?>vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>
</head>
<body>
<!-- Page Wrapper -->
<!-- In the PHP version you can set the following options from inc/config file -->
<!--
    Available classes:

    'page-loading'      enables page preloader
-->
<div id="page-wrapper">
    <!-- Page Container -->
    <!-- In the PHP version you can set the following options from inc/config file -->
    <!--
        Available #page-container classes:

        '' (None)                                       for a full main and alternative sidebar hidden by default (> 991px)

        'sidebar-visible-lg'                            for a full main sidebar visible by default (> 991px)
        'sidebar-partial'                               for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
        'sidebar-partial sidebar-visible-lg'            for a partial main sidebar which opens on mouse hover, visible by default (> 991px)
        'sidebar-mini sidebar-visible-lg-mini'          for a mini main sidebar with a flyout menu, enabled by default (> 991px + Best with static layout)
        'sidebar-mini sidebar-visible-lg'               for a mini main sidebar with a flyout menu, disabled by default (> 991px + Best with static layout)

        'sidebar-alt-visible-lg'                        for a full alternative sidebar visible by default (> 991px)
        'sidebar-alt-partial'                           for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
        'sidebar-alt-partial sidebar-alt-visible-lg'    for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)

        'sidebar-partial sidebar-alt-partial'           for both sidebars partial which open on mouse hover, hidden by default (> 991px)

        'sidebar-no-animations'                         add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!

        'style-alt'                                     for an alternative main style (without it: the default style)
        'footer-fixed'                                  for a fixed footer (without it: a static footer)

        'disable-menu-autoscroll'                       add this to disable the main menu auto scrolling when opening a submenu

        'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
        'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar
    -->
    <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
        <!-- Main Sidebar -->
        <div id="sidebar">
            <!-- Wrapper for scrolling functionality -->
            <div id="sidebar-scroll">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Brand -->
                    <a href="index.html" class="sidebar-brand">
                        <i class="gi gi-flash"></i>
                        <span class="sidebar-nav-mini-hide"><strong>Pro</strong>UI</span>
                    </a>
                    <!-- END Brand -->

                    <!-- User Info -->
                    <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                        <div class="sidebar-user-avatar">
                            <a href="page_ready_user_profile.html">
                                <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar">
                            </a>
                        </div>
                        <div class="sidebar-user-name">John Doe</div>
                        <div class="sidebar-user-links">
                            <a href="page_ready_user_profile.html" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="gi gi-user"></i></a>
                            <a href="page_ready_inbox.html" data-toggle="tooltip" data-placement="bottom" title="Messages"><i class="gi gi-envelope"></i></a>
                            <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                            <a href="#modal-user-settings" data-toggle="modal" class="enable-tooltip" data-placement="bottom" title="Settings"><i class="gi gi-cogwheel"></i></a>
                            <a href="login.html" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                        </div>
                    </div>
                    <!-- END User Info -->

                    <!-- Theme Colors -->
                    <!-- Change Color Theme functionality can be found in js/app.js - templateOptions() -->
                    <ul class="sidebar-section sidebar-themes clearfix sidebar-nav-mini-hide">
                        <!-- You can also add the default color theme
                        <li class="active">
                            <a href="javascript:void(0)" class="themed-background-dark-default themed-border-default" data-theme="default" data-toggle="tooltip" title="Default Blue"></a>
                        </li>
                        -->
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-night themed-border-night" data-theme="css/themes/night.css" data-toggle="tooltip" title="Night"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-amethyst themed-border-amethyst" data-theme="css/themes/amethyst.css" data-toggle="tooltip" title="Amethyst"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-modern themed-border-modern" data-theme="css/themes/modern.css" data-toggle="tooltip" title="Modern"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-autumn themed-border-autumn" data-theme="css/themes/autumn.css" data-toggle="tooltip" title="Autumn"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-flatie themed-border-flatie" data-theme="css/themes/flatie.css" data-toggle="tooltip" title="Flatie"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-spring themed-border-spring" data-theme="css/themes/spring.css" data-toggle="tooltip" title="Spring"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-fancy themed-border-fancy" data-theme="css/themes/fancy.css" data-toggle="tooltip" title="Fancy"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-fire themed-border-fire" data-theme="css/themes/fire.css" data-toggle="tooltip" title="Fire"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-coral themed-border-coral" data-theme="css/themes/coral.css" data-toggle="tooltip" title="Coral"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-lake themed-border-lake" data-theme="css/themes/lake.css" data-toggle="tooltip" title="Lake"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-forest themed-border-forest" data-theme="css/themes/forest.css" data-toggle="tooltip" title="Forest"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-waterlily themed-border-waterlily" data-theme="css/themes/waterlily.css" data-toggle="tooltip" title="Waterlily"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-emerald themed-border-emerald" data-theme="css/themes/emerald.css" data-toggle="tooltip" title="Emerald"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="themed-background-dark-blackberry themed-border-blackberry" data-theme="css/themes/blackberry.css" data-toggle="tooltip" title="Blackberry"></a>
                        </li>
                    </ul>
                    <!-- END Theme Colors -->

                    <!-- Sidebar Navigation -->
                    <ul class="sidebar-nav">
                        <li>
                            <a href="index.html"><i class="gi gi-stopwatch sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Dashboard</span></a>
                        </li>
                        <li>
                            <a href="index2.html"><i class="gi gi-leaf sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Dashboard 2</span></a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-shopping_cart sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">eCommerce</span></a>
                            <ul>
                                <li>
                                    <a href="page_ecom_dashboard.html">Dashboard</a>
                                </li>
                                <li>
                                    <a href="page_ecom_orders.html">Orders</a>
                                </li>
                                <li>
                                    <a href="page_ecom_order_view.html">Order View</a>
                                </li>
                                <li>
                                    <a href="page_ecom_products.html">Products</a>
                                </li>
                                <li>
                                    <a href="page_ecom_product_edit.html">Product Edit</a>
                                </li>
                                <li>
                                    <a href="page_ecom_customer_view.html">Customer View</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-header">
                            <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a><a href="javascript:void(0)" data-toggle="tooltip" title="Create the most amazing pages with the widget kit!"><i class="gi gi-lightbulb"></i></a></span>
                            <span class="sidebar-header-title">Widget Kit</span>
                        </li>
                        <li>
                            <a href="page_widgets_stats.html"><i class="gi gi-charts sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Statistics</span></a>
                        </li>
                        <li>
                            <a href="page_widgets_social.html"><i class="gi gi-share_alt sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Social</span></a>
                        </li>
                        <li>
                            <a href="page_widgets_media.html"><i class="gi gi-film sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Media</span></a>
                        </li>
                        <li>
                            <a href="page_widgets_links.html"><i class="gi gi-link sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Links</span></a>
                        </li>
                        <li class="sidebar-header">
                            <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a></span>
                            <span class="sidebar-header-title">Design Kit</span>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-certificate sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">User Interface</span></a>
                            <ul>
                                <li>
                                    <a href="page_ui_grid_blocks.html">Grid &amp; Blocks</a>
                                </li>
                                <li>
                                    <a href="page_ui_draggable_blocks.html">Draggable Blocks</a>
                                </li>
                                <li>
                                    <a href="page_ui_typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="page_ui_buttons_dropdowns.html">Buttons &amp; Dropdowns</a>
                                </li>
                                <li>
                                    <a href="page_ui_navigation_more.html">Navigation &amp; More</a>
                                </li>
                                <li>
                                    <a href="page_ui_horizontal_menu.html">Horizontal Menu</a>
                                </li>
                                <li>
                                    <a href="page_ui_progress_loading.html">Progress &amp; Loading</a>
                                </li>
                                <li>
                                    <a href="page_ui_preloader.html">Page Preloader</a>
                                </li>
                                <li>
                                    <a href="page_ui_color_themes.html">Color Themes</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-notes_2 sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Forms</span></a>
                            <ul>
                                <li>
                                    <a href="page_forms_general.html">General</a>
                                </li>
                                <li>
                                    <a href="page_forms_components.html">Components</a>
                                </li>
                                <li>
                                    <a href="page_forms_validation.html">Validation</a>
                                </li>
                                <li>
                                    <a href="page_forms_wizard.html">Wizard</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-table sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Tables</span></a>
                            <ul>
                                <li>
                                    <a href="page_tables_general.html">General</a>
                                </li>
                                <li>
                                    <a href="page_tables_responsive.html">Responsive</a>
                                </li>
                                <li>
                                    <a href="page_tables_datatables.html">Datatables</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-cup sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Icon Sets</span></a>
                            <ul>
                                <li>
                                    <a href="page_icons_fontawesome.html">Font Awesome</a>
                                </li>
                                <li>
                                    <a href="page_icons_glyphicons_pro.html">Glyphicons Pro</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-show_big_thumbnails sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Page Layouts</span></a>
                            <ul>
                                <li>
                                    <a href="page_layout_static.html">Static</a>
                                </li>
                                <li>
                                    <a href="page_layout_static_fixed_footer.html">Static + Fixed Footer</a>
                                </li>
                                <li>
                                    <a href="page_layout_fixed_top.html">Fixed Top Header</a>
                                </li>
                                <li>
                                    <a href="page_layout_fixed_top_footer.html">Fixed Top Header + Footer</a>
                                </li>
                                <li>
                                    <a href="page_layout_fixed_bottom.html">Fixed Bottom Header</a>
                                </li>
                                <li>
                                    <a href="page_layout_fixed_bottom_footer.html">Fixed Bottom Header + Footer</a>
                                </li>
                                <li>
                                    <a href="page_layout_static_main_sidebar_mini.html">Mini Main Sidebar</a>
                                </li>
                                <li>
                                    <a href="page_layout_static_main_sidebar_partial.html">Partial Main Sidebar</a>
                                </li>
                                <li>
                                    <a href="page_layout_static_main_sidebar_visible.html">Visible Main Sidebar</a>
                                </li>
                                <li>
                                    <a href="page_layout_static_alternative_sidebar_partial.html">Partial Alternative Sidebar</a>
                                </li>
                                <li>
                                    <a href="page_layout_static_alternative_sidebar_visible.html">Visible Alternative Sidebar</a>
                                </li>
                                <li>
                                    <a href="page_layout_static_no_sidebars.html">No Sidebars</a>
                                </li>
                                <li>
                                    <a href="page_layout_static_both_partial.html">Both Sidebars Partial</a>
                                </li>
                                <li>
                                    <a href="page_layout_static_animated.html">Animated Sidebar Transitions</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-header">
                            <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a></span>
                            <span class="sidebar-header-title">Develop Kit</span>
                        </li>
                        <li class="active">
                            <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-brush sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Ready Pages</span></a>
                            <ul>
                                <li>
                                    <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Errors</a>
                                    <ul>
                                        <li>
                                            <a href="page_ready_400.html">400</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_401.html">401</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_403.html">403</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_404.html">404</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_500.html">500</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_503.html">503</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="active">
                                    <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Get Started</a>
                                    <ul>
                                        <li>
                                            <a href="page_ready_blank.html" class="active">Blank</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_blank_alt.html">Blank Alternative</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="page_ready_search_results.html">Search Results (4)</a>
                                </li>
                                <li>
                                    <a href="page_ready_article.html">Article</a>
                                </li>
                                <li>
                                    <a href="page_ready_user_profile.html">User Profile</a>
                                </li>
                                <li>
                                    <a href="page_ready_contacts.html">Contacts</a>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>e-Learning</a>
                                    <ul>
                                        <li>
                                            <a href="page_ready_elearning_courses.html">Courses</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_elearning_course_lessons.html">Course - Lessons</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_elearning_course_lesson.html">Course - Lesson Page</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Message Center</a>
                                    <ul>
                                        <li>
                                            <a href="page_ready_inbox.html">Inbox</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_inbox_compose.html">Compose Message</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_inbox_message.html">View Message</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="page_ready_chat.html">Chat</a>
                                </li>
                                <li>
                                    <a href="page_ready_timeline.html">Timeline</a>
                                </li>
                                <li>
                                    <a href="page_ready_files.html">Files</a>
                                </li>
                                <li>
                                    <a href="page_ready_tickets.html">Tickets</a>
                                </li>
                                <li>
                                    <a href="page_ready_tasks.html">Tasks</a>
                                </li>
                                <li>
                                    <a href="page_ready_faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a href="page_ready_pricing_tables.html">Pricing Tables</a>
                                </li>
                                <li>
                                    <a href="page_ready_invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="page_ready_forum.html">Forum (3)</a>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>Login, Register &amp; Lock</a>
                                    <ul>
                                        <li>
                                            <a href="login.html">Login</a>
                                        </li>
                                        <li>
                                            <a href="login_full.html">Login (Full Background)</a>
                                        </li>
                                        <li>
                                            <a href="login_alt.html">Login 2</a>
                                        </li>
                                        <li>
                                            <a href="login.html#reminder">Password Reminder</a>
                                        </li>
                                        <li>
                                            <a href="login_alt.html#reminder">Password Reminder 2</a>
                                        </li>
                                        <li>
                                            <a href="login.html#register">Register</a>
                                        </li>
                                        <li>
                                            <a href="login_alt.html#register">Register 2</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_lock_screen.html">Lock Screen</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_lock_screen_alt.html">Lock Screen 2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-wrench sidebar-nav-icon"></i> <span class="sidebar-nav-mini-hide">Components</span></a>
                            <ul>
                                <li>
                                    <a href="#" class="sidebar-nav-submenu"><i class="fa fa-angle-left sidebar-nav-indicator"></i>3 Level Menu</a>
                                    <ul>
                                        <li>
                                            <a href="#">Link 1</a>
                                        </li>
                                        <li>
                                            <a href="#">Link 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="page_comp_maps.html">Maps</a>
                                </li>
                                <li>
                                    <a href="page_comp_charts.html">Charts</a>
                                </li>
                                <li>
                                    <a href="page_comp_gallery.html">Gallery</a>
                                </li>
                                <li>
                                    <a href="page_comp_carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="page_comp_calendar.html">Calendar</a>
                                </li>
                                <li>
                                    <a href="page_comp_animations.html">CSS3 Animations</a>
                                </li>
                                <li>
                                    <a href="page_comp_syntax_highlighting.html">Syntax Highlighting</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END Sidebar Navigation -->

                    <!-- Sidebar Notifications -->
                    <div class="sidebar-header sidebar-nav-mini-hide">
                                <span class="sidebar-header-options clearfix">
                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Refresh"><i class="gi gi-refresh"></i></a>
                                </span>
                        <span class="sidebar-header-title">Activity</span>
                    </div>
                    <div class="sidebar-section sidebar-nav-mini-hide">
                        <div class="alert alert-success alert-alt">
                            <small>5 min ago</small><br>
                            <i class="fa fa-thumbs-up fa-fw"></i> You had a new sale ($10)
                        </div>
                        <div class="alert alert-info alert-alt">
                            <small>10 min ago</small><br>
                            <i class="fa fa-arrow-up fa-fw"></i> Upgraded to Pro plan
                        </div>
                        <div class="alert alert-warning alert-alt">
                            <small>3 hours ago</small><br>
                            <i class="fa fa-exclamation fa-fw"></i> Running low on space<br><strong>18GB in use</strong> 2GB left
                        </div>
                        <div class="alert alert-danger alert-alt">
                            <small>Yesterday</small><br>
                            <i class="fa fa-bug fa-fw"></i> <a href="javascript:void(0)"><strong>New bug submitted</strong></a>
                        </div>
                    </div>
                    <!-- END Sidebar Notifications -->
                </div>
                <!-- END Sidebar Content -->
            </div>
            <!-- END Wrapper for scrolling functionality -->
        </div>
        <!-- END Main Sidebar -->

        <!-- Main Container -->
        <div id="main-container">
            <!-- Header -->
            <!-- In the PHP version you can set the following options from inc/config file -->
            <!--
                Available header.navbar classes:

                'navbar-default'            for the default light header
                'navbar-inverse'            for an alternative dark header

                'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                    'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                    'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
            -->
            <header class="navbar navbar-default">
                <!-- Left Header Navigation -->
                <ul class="nav navbar-nav-custom">
                    <!-- Main Sidebar Toggle Button -->
                    <li>
                        <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');">
                            <i class="fa fa-bars fa-fw"></i>
                        </a>
                    </li>
                    <!-- END Main Sidebar Toggle Button -->
                </ul>
                <!-- END Left Header Navigation -->

                <!-- Search Form -->
                <!--<form action="page_ready_search_results.html" method="post" class="navbar-form-custom" role="search">
                    <div class="form-group">
                        <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
                    </div>
                </form>-->
                <!-- END Search Form -->

                <!-- Right Header Navigation -->
                <ul class="nav navbar-nav-custom pull-right">

                    <!-- User Dropdown -->
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="assets/img/placeholders/avatars/avatar2.jpg" alt="avatar"> <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                            <li class="dropdown-header text-center">Compte</li>
                            <li>
                                <a href="login.html"><i class="fa fa-ban fa-fw pull-right"></i> Déconnexion</a>
                            </li>
                        </ul>
                    </li>
                    <!-- END User Dropdown -->
                </ul>
                <!-- END Right Header Navigation -->
            </header>
            <!-- END Header -->

            <!-- Page content -->
            <div id="page-content">
                <!-- Blank Header -->
                <div class="content-header">
                    <div class="header-section">
                        <h1>
                            <i class="gi gi-brush"></i><?php if(!empty($app->getPage())){echo $app->getPage();} ?><br><small><?php if(!empty($app->getSector())){echo $app->getSector();} ?></small>
                        </h1>
                    </div>
                </div>
                <ul class="breadcrumb breadcrumb-top">
                    <li><i class="fa fa-home"></i> <?= $constante::NOM_SITE; ?></li>
                    <?php if(!empty($app->getSector())){echo "<li>".$app->getSector()."</li>";} ?>
                    <?php if(!empty($app->getPage())){echo "<li>".$app->getPage()."</li>";} ?>
                </ul>
                <!-- END Blank Header -->
                <?= $content; ?>
            </div>
            <!-- END Page Content -->

            <!-- Footer -->
            <footer class="clearfix">
                <div class="pull-right">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                </div>
                <div class="pull-left">
                    <span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank">ProUI 3.0</a>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->
</div>
<!-- END Page Wrapper -->

<!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
<a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>!window.jQuery && document.write(decodeURI('%3Cscript src="<?= $constante->getUrl(array('js/')); ?>vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

<!-- Bootstrap.js, Jquery plugins and Custom JS code -->
<script src="<?= $constante->getUrl(array('js/')); ?>vendor/bootstrap.min.js"></script>
<script src="<?= $constante->getUrl(array('js/')); ?>plugins.js"></script>
<script src="<?= $constante->getUrl(array('js/')); ?>app.js"></script>

<script src="<?= $constante->getUrl(array('js/')); ?>pages/ecomDashboard.js"></script>
<script>$(function(){ EcomDashboard.init(); });</script>
</body>
</html>