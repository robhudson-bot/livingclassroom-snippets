<?php
/**
 * Title: Test Snippet
 * Description: Verifies SnipForge GitHub sync is working on Living Classroom
 * Scope: admin
 * Status: inactive
 * Priority: 10
 * Hook: admin_notices
 */

function lc_test_snippet_notice() {
    echo '<div class="notice notice-success"><p>SnipForge sync is working on Living Classroom.</p></div>';
}
add_action( 'admin_notices', 'lc_test_snippet_notice' );
