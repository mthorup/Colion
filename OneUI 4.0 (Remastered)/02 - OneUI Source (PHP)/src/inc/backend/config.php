<?php
/**
 * backend/config.php
 *
 * Author: pixelcave
 *
 * Backend pages configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$one->inc_side_overlay           = 'inc/backend/views/inc_side_overlay.php';
$one->inc_sidebar                = 'inc/backend/views/inc_sidebar.php';
$one->inc_header                 = 'inc/backend/views/inc_header.php';
$one->inc_footer                 = 'inc/backend/views/inc_footer.php';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$one->main_nav                   = array(
    array(
        'name'  => 'Dashboard',
        'icon'  => 'si si-speedometer',
        'url'   => 'be_pages_dashboard.php'
    ),
    array(
        'name'  => 'User Interface',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Blocks',
        'icon'  => 'si si-energy',
        'sub'   => array(
            array(
                'name'  => 'Styles',
                'url'   => 'be_blocks_styles.php'
            ),
            array(
                'name'  => 'Options',
                'url'   => 'be_blocks_options.php'
            ),
            array(
                'name'  => 'Forms',
                'url'   => 'be_blocks_forms.php'
            ),
            array(
                'name'  => 'Themed',
                'url'   => 'be_blocks_themed.php'
            ),
            array(
                'name'  => 'API',
                'url'   => 'be_blocks_api.php'
            )
        )
    ),
    array(
        'name'  => 'Elements',
        'icon'  => 'si si-badge',
        'sub'   => array(
            array(
                'name'  => 'Grid',
                'url'   => 'be_ui_grid.php'
            ),
            array(
                'name'  => 'Typography',
                'url'   => 'be_ui_typography.php'
            ),
            array(
                'name'  => 'Icons',
                'url'   => 'be_ui_icons.php'
            ),
            array(
                'name'  => 'Buttons',
                'url'   => 'be_ui_buttons.php'
            ),
            array(
                'name'  => 'Button Groups',
                'url'   => 'be_ui_buttons_groups.php'
            ),
            array(
                'name'  => 'Dropdowns',
                'url'   => 'be_ui_dropdowns.php'
            ),
            array(
                'name'  => 'Tabs',
                'url'   => 'be_ui_tabs.php'
            ),
            array(
                'name'  => 'Navigation',
                'url'   => 'be_ui_navigation.php'
            ),
            array(
                'name'  => 'Progress',
                'url'   => 'be_ui_progress.php'
            ),
            array(
                'name'  => 'Alerts',
                'url'   => 'be_ui_alerts.php'
            ),
            array(
                'name'  => 'Tooltips',
                'url'   => 'be_ui_tooltips.php'
            ),
            array(
                'name'  => 'Popovers',
                'url'   => 'be_ui_popovers.php'
            ),
            array(
                'name'  => 'Modals',
                'url'   => 'be_ui_modals.php'
            ),
            array(
                'name'  => 'Images Overlay',
                'url'   => 'be_ui_images.php'
            ),
            array(
                'name'  => 'Timeline',
                'url'   => 'be_ui_timeline.php'
            ),
            array(
                'name'  => 'Animations',
                'url'   => 'be_ui_animations.php'
            ),
            array(
                'name'  => 'Color Themes',
                'url'   => 'be_ui_color_themes.php'
            )
        )
    ),
    array(
        'name'  => 'Tables',
        'icon'  => 'si si-grid',
        'sub'   => array(
            array(
                'name'  => 'Styles',
                'url'   => 'be_tables_styles.php'
            ),
            array(
                'name'  => 'Responsive',
                'url'   => 'be_tables_responsive.php'
            ),
            array(
                'name'  => 'Helpers',
                'url'   => 'be_tables_helpers.php'
            ),
            array(
                'name'  => 'Pricing',
                'url'   => 'be_tables_pricing.php'
            ),
            array(
                'name'  => 'DataTables',
                'url'   => 'be_tables_datatables.php'
            )
        )
    ),
    array(
        'name'  => 'Forms',
        'icon'  => 'si si-note',
        'sub'   => array(
            array(
                'name'  => 'Elements',
                'url'   => 'be_forms_elements.php'
            ),
            array(
                'name'  => 'Custom Controls',
                'url'   => 'be_forms_custom_controls.php'
            ),
            array(
                'name'  => 'Layouts',
                'url'   => 'be_forms_layouts.php'
            ),
            array(
                'name'  => 'Input Groups',
                'url'   => 'be_forms_input_groups.php'
            ),
            array(
                'name'  => 'Plugins',
                'url'   => 'be_forms_plugins.php'
            ),
            array(
                'name'  => 'Editors',
                'url'   => 'be_forms_editors.php'
            ),
            array(
                'name'  => 'Validation',
                'url'   => 'be_forms_validation.php'
            ),
            array(
                'name'  => 'Wizard',
                'url'   => 'be_forms_wizard.php'
            )
        )
    ),
    array(
        'name'  => 'Develop',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Components',
        'icon'  => 'si si-wrench',
        'sub'   => array(
            array(
                'name'  => 'Loaders',
                'url'   => 'be_comp_loaders.php'
            ),
            array(
                'name'  => 'Image Cropper',
                'url'   => 'be_comp_image_cropper.php'
            ),
            array(
                'name'  => 'Appear',
                'url'   => 'be_comp_appear.php'
            ),
            array(
                'name'  => 'Charts',
                'url'   => 'be_comp_charts.php'
            ),
            array(
                'name'  => 'Calendar',
                'url'   => 'be_comp_calendar.php'
            ),
            array(
                'name'  => 'Sliders',
                'url'   => 'be_comp_sliders.php'
            ),
            array(
                'name'  => 'Syntax Highlighting',
                'url'   => 'be_comp_syntax_highlighting.php'
            ),
            array(
                'name'  => 'Rating',
                'url'   => 'be_comp_rating.php'
            ),
            array(
                'name'  => 'Google Maps',
                'url'   => 'be_comp_maps_google.php'
            ),
            array(
                'name'  => 'Vector Maps',
                'url'   => 'be_comp_maps_vector.php'
            ),
            array(
                'name'  => 'Dialogs',
                'url'   => 'be_comp_dialogs.php'
            ),
            array(
                'name'  => 'Notifications',
                'url'   => 'be_comp_notifications.php'
            ),
            array(
                'name'  => 'Gallery',
                'url'   => 'be_comp_gallery.php'
            )
        )
    ),
    array(
        'name'  => 'Layout',
        'icon'  => 'si si-magic-wand',
        'sub'   => array(
            array(
                'name'  => 'Page',
                'sub'   => array(
                    array(
                        'name'  => 'Default',
                        'url'   => 'be_layout_page_default.php'
                    ),
                    array(
                        'name'  => 'Flipped',
                        'url'   => 'be_layout_page_flipped.php'
                    ),
                    array(
                        'name'  => 'Native Scrolling',
                        'url'   => 'be_layout_page_native_scrolling.php'
                    )
                )
            ),
            array(
                'name'  => 'Main Content',
                'sub'   => array(
                    array(
                        'name'  => 'Full Width',
                        'url'   => 'be_layout_content_main_full_width.php'
                    ),
                    array(
                        'name'  => 'Narrow',
                        'url'   => 'be_layout_content_main_narrow.php'
                    ),
                    array(
                        'name'  => 'Boxed',
                        'url'   => 'be_layout_content_main_boxed.php'
                    )
                )
            ),
            array(
                'name'  => 'Header',
                'sub'   => array(
                    array(
                        'name'  => 'Fixed',
                        'type'  => 'heading'
                    ),
                    array(
                        'name'  => 'Light',
                        'url'   => 'be_layout_header_fixed_light.php'
                    ),
                    array(
                        'name'  => 'Dark',
                        'url'   => 'be_layout_header_fixed_dark.php'
                    ),
                    array(
                        'name'  => 'Static',
                        'type'  => 'heading'
                    ),
                    array(
                        'name'  => 'Light',
                        'url'   => 'be_layout_header_static_light.php'
                    ),
                    array(
                        'name'  => 'Dark',
                        'url'   => 'be_layout_header_static_dark.php'
                    )
                )
            ),
            array(
                'name'  => 'Sidebar',
                'sub'   => array(
                    array(
                        'name'  => 'Mini',
                        'url'   => 'be_layout_sidebar_mini.php'
                    ),
                    array(
                        'name'  => 'Light',
                        'url'   => 'be_layout_sidebar_light.php'
                    ),
                    array(
                        'name'  => 'Dark',
                        'url'   => 'be_layout_sidebar_dark.php'
                    ),
                    array(
                        'name'  => 'Hidden',
                        'url'   => 'be_layout_sidebar_hidden.php'
                    )
                )
            ),
            array(
                'name'  => 'Side Overlay',
                'sub'   => array(
                    array(
                        'name'  => 'Visible',
                        'url'   => 'be_layout_side_overlay_visible.php'
                    ),
                    array(
                        'name'  => 'Hover Mode',
                        'url'   => 'be_layout_side_overlay_mode_hover.php'
                    ),
                    array(
                        'name'  => 'No Page Overlay',
                        'url'   => 'be_layout_side_overlay_no_page_overlay.php'
                    )
                )
            ),
            array(
                'name'  => 'API',
                'url'   => 'be_layout_api.php'
            )
        )
    ),
    array(
        'name'  => 'Multi Level Menu',
        'icon'  => 'si si-puzzle',
        'sub'   => array(
            array(
                'name'  => 'Link 1-1',
                'url'   => '#'
            ),
            array(
                'name'  => 'Link 1-2',
                'url'   => '#'
            ),
            array(
                'name'  => 'Sub Level 2',
                'sub'   => array(
                    array(
                        'name'  => 'Link 2-1',
                        'url'   => '#'
                    ),
                    array(
                        'name'  => 'Link 2-2',
                        'url'   => '#'
                    ),
                    array(
                        'name'  => 'Sub Level 3',
                        'sub'   => array(
                            array(
                                'name'  => 'Link 3-1',
                                'url'   => '#'
                            ),
                            array(
                                'name'  => 'Link 3-2',
                                'url'   => '#'
                            ),
                            array(
                                'name'  => 'Sub Level 4',
                                'sub'   => array(
                                    array(
                                        'name'  => 'Link 4-1',
                                        'url'   => '#'
                                    ),
                                    array(
                                        'name'  => 'Link 4-2',
                                        'url'   => '#'
                                    ),
                                    array(
                                        'name'  => 'Sub Level 5',
                                        'sub'   => array(
                                            array(
                                                'name'  => 'Link 5-1',
                                                'url'   => '#'
                                            ),
                                            array(
                                                'name'  => 'Link 5-2',
                                                'url'   => '#'
                                            ),
                                            array(
                                                'name'  => 'Sub Level 6',
                                                'sub'   => array(
                                                    array(
                                                        'name'  => 'Link 6-1',
                                                        'url'   => '#'
                                                    ),
                                                    array(
                                                        'name'  => 'Link 6-2',
                                                        'url'   => '#'
                                                    )
                                                )
                                            )
                                        )
                                    )
                                )
                            )
                        )
                    )
                )
            )
        )
    ),
    array(
        'name'  => 'Pages',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Generic',
        'icon'  => 'si si-layers',
        'sub'   => array(
            array(
                'name'  => 'Blank',
                'url'   => 'be_pages_generic_blank.php'
            ),
            array(
                'name'  => 'Blank (Block)',
                'url'   => 'be_pages_generic_blank_block.php'
            ),
            array(
                'name'  => 'Search',
                'url'   => 'be_pages_generic_search.php'
            ),
            array(
                'name'  => 'Profile',
                'url'   => 'be_pages_generic_profile.php'
            ),
            array(
                'name'  => 'Inbox',
                'url'   => 'be_pages_generic_inbox.php'
            ),
            array(
                'name'  => 'Invoice',
                'url'   => 'be_pages_generic_invoice.php'
            ),
            array(
                'name'  => 'FAQ',
                'url'   => 'be_pages_generic_faq.php'
            ),
            array(
                'name'  => 'Coming Soon',
                'url'   => 'op_coming_soon.php'
            )
        )
    ),
    array(
        'name'  => 'Authentication',
        'icon'  => 'si si-lock',
        'sub'   => array(
            array(
                'name'  => 'All',
                'url'   => 'be_pages_auth_all.php'
            ),
            array(
                'name'  => 'Sign In',
                'url'   => 'op_auth_signin.php'
            ),
            array(
                'name'  => 'Sign Up',
                'url'   => 'op_auth_signup.php'
            ),
            array(
                'name'  => 'Lock Screen',
                'url'   => 'op_auth_lock.php'
            ),
            array(
                'name'  => 'Pass Reminder',
                'url'   => 'op_auth_reminder.php'
            )
        )
    ),
    array(
        'name'  => 'Error Pages',
        'icon'  => 'si si-fire',
        'sub'    => array(
            array(
                'name'  => 'All',
                'url'   => 'be_pages_error_all.php'
            ),
            array(
                'name'  => '400',
                'url'   => 'op_error_400.php'
            ),
            array(
                'name'  => '401',
                'url'   => 'op_error_401.php'
            ),
            array(
                'name'  => '403',
                'url'   => 'op_error_403.php'
            ),
            array(
                'name'  => '404',
                'url'   => 'op_error_404.php'
            ),
            array(
                'name'  => '500',
                'url'   => 'op_error_500.php'
            ),
            array(
                'name'  => '503',
                'url'   => 'op_error_503.php'
            )
        )
    )
);
