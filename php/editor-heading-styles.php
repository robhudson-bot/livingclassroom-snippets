<?php
/**
 * Title: Editor Heading Styles
 * Description: Dequeues Twenty Sixteen editor styles and injects correct heading preview matching frontend
 * Scope: global
 * Status: active
 * Priority: 5
 * Hook: after_setup_theme
 */

add_theme_support( 'editor-styles' );

// Remove the old Twenty Sixteen editor stylesheet that conflicts
add_action( 'enqueue_block_editor_assets', function () {
    wp_dequeue_style( 'livingclassroomblogca-editor-style' );
    wp_dequeue_style( 'twentysixteen-editor-style' );

    // Register a real handle so inline styles attach correctly
    wp_register_style( 'lc-editor-headings', false );
    wp_enqueue_style( 'lc-editor-headings' );
    wp_add_inline_style( 'lc-editor-headings', '
        .editor-styles-wrapper {
            font-family: "Source Sans Pro", sans-serif !important;
            font-weight: 400 !important;
            font-size: 14px !important;
            color: #686868 !important;
        }
        .editor-styles-wrapper h1,
        .editor-styles-wrapper h2,
        .editor-styles-wrapper h3,
        .editor-styles-wrapper h4,
        .editor-styles-wrapper h5,
        .editor-styles-wrapper h6 {
            font-family: "Source Sans Pro", sans-serif !important;
            font-weight: 700 !important;
            color: #29637f !important;
            clear: both;
            text-rendering: optimizeLegibility;
            text-transform: none !important;
            letter-spacing: normal !important;
            font-style: normal !important;
        }
        .editor-styles-wrapper h1 {
            font-size: 32px !important;
            margin-bottom: 20px;
        }
        .editor-styles-wrapper h2 {
            font-size: 26px !important;
            margin-bottom: 20px;
        }
        .editor-styles-wrapper h3 {
            font-size: 20px !important;
            margin-bottom: 20px;
        }
        .editor-styles-wrapper h4 {
            font-size: 16px !important;
            margin-bottom: 20px;
        }
        .editor-styles-wrapper h5 {
            font-size: 12px !important;
            margin-bottom: 20px;
        }
        .editor-styles-wrapper h6 {
            font-size: 12px !important;
            margin-bottom: 20px;
        }
        .editor-styles-wrapper p {
            font-size: 14px !important;
            line-height: 1.75;
            color: #686868 !important;
        }
        .editor-styles-wrapper a {
            color: #29637f !important;
        }
    ' );
}, 99 ); // Priority 99 to run after theme enqueues its styles
