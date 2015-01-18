<?php

/**
 * List of all pages
 */
map('GET', '/cms/page', function () {
    //
});

/**
 * Form for creating a new page
 */
map('GET', '/cms/page/new', function () {
    echo phtml(PAGE_DIR . '/views/form', ['action' => '/cms/page'], APP_DIR . '/views/layout');
});

/**
 * Show existing page
 */
map('GET', '/cms/page/{id}', function ($params) {
    //
});

/**
 * Handle data for new page (save to database)
 */
map('POST', '/cms/page', function () {

});

/**
 * Form for editing existing page
 */
map('GET', '/cms/page/{id}/edit', function ($params) {
    //
});

/**
 * Handle data for existing page (save to database)
 */
map('POST', '/cms/page/{id}', function ($params) {
    //
});

/**
 * Delete existing page
 */
map('DELETE', '/cms/page/{id}', function ($params) {
    //
});