<?php
/**
 * Title: Editor Heading Styles
 * Description: Enables block editor style support and enqueues editor CSS so h1-h6 preview matches the frontend
 * Scope: global
 * Status: active
 * Priority: 10
 * Hook: after_setup_theme
 */

add_theme_support( 'editor-styles' );

add_action( 'enqueue_block_editor_assets', function () {
    wp_enqueue_style(
        'lc-editor-headings',
        false // inline style, no file needed
    );
    wp_add_inline_style( 'lc-editor-headings', '
        .editor-styles-wrapper {
            font-family: "Source Sans Pro", sans-serif;
            font-weight: 400;
            font-size: 14px;
            color: #686868;
        }
        .editor-styles-wrapper h1,
        .editor-styles-wrapper h2,
        .editor-styles-wrapper h3,
        .editor-styles-wrapper h4,
        .editor-styles-wrapper h5,
        .editor-styles-wrapper h6 {
            font-family: "Source Sans Pro", sans-serif;
            font-weight: 700;
            clear: both;
            text-rendering: optimizeLegibility;
        }
        .editor-styles-wrapper h1 { font-size: 32px; margin-bottom: 20px; }
        .editor-styles-wrapper h2 { font-size: 26px; margin-bottom: 20px; }
        .editor-styles-wrapper h3 { font-size: 20px; margin-bottom: 20px; }
        .editor-styles-wrapper h4 { font-size: 16px; margin-bottom: 20px; }
        .editor-styles-wrapper h5 { font-size: 12px; margin-bottom: 20px; }
        .editor-styles-wrapper h6 { font-size: 12px; margin-bottom: 20px; }
        .editor-styles-wrapper p  { font-size: 14px; line-height: 1.75; color: #686868; }
        .editor-styles-wrapper a  { color: #29637f; }
    ' );
} );
