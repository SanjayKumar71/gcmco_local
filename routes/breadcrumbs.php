<?php

/**
 * routes/breadcrumbs.php
 *
 * @author Muhammad Shahab <muhammad.shahab@vservices.com>
 * @Date: 7/18/2019
 */

/*
|--------------------------------------------------------------------------
| Admin Dashboard
|--------------------------------------------------------------------------
*/

// Dashboard
Breadcrumbs::for('admin.dashboard.index', function ($breadcrumbs) {
    $breadcrumbs->push('Dashboard', route('admin.dashboard.index'));
});

/*
|--------------------------------------------------------------------------
| Home Content
|--------------------------------------------------------------------------
*/

// Home Content
Breadcrumbs::for('admin.home_content.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Home Content', route('admin.home_content.index'));
});
// End Home Content //

/*
|--------------------------------------------------------------------------
| Campaign
|--------------------------------------------------------------------------
*/

// campaigns
Breadcrumbs::for('admin.campaigns.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Campaign List', route('admin.campaigns.index'));
});
// campaigns > New
Breadcrumbs::for('admin.campaigns.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.campaigns.index');
    $breadcrumbs->push('Add', route('admin.campaigns.create'));
});
// campaigns > campaigns Inc.
Breadcrumbs::for('admin.campaigns.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.campaigns.index');
    $breadcrumbs->push($data->title, route('admin.campaigns.show', $data->id));
});
// campaigns > Edit
Breadcrumbs::for('admin.campaigns.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.campaigns.show', $data);
    $breadcrumbs->push('Edit', route('admin.campaigns.edit', $data->id));
});
// End campaigns //

/*
|--------------------------------------------------------------------------
| Donation Types
|--------------------------------------------------------------------------
*/

// Donation Types
Breadcrumbs::for('admin.donation_types.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Donation Type List', route('admin.donation_types.index'));
});
// Donation Types > New
Breadcrumbs::for('admin.donation_types.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.donation_types.index');
    $breadcrumbs->push('Add', route('admin.donation_types.create'));
});
// Donation Types > Donation Types Inc.
Breadcrumbs::for('admin.donation_types.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.donation_types.index');
    $breadcrumbs->push($data->title, route('admin.donation_types.show', $data->id));
});
// Donation Types > Edit
Breadcrumbs::for('admin.donation_types.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.donation_types.show', $data);
    $breadcrumbs->push('Edit', route('admin.donation_types.edit', $data->id));
});
// End Donation Types //

/*
|--------------------------------------------------------------------------
| Donation amount
|--------------------------------------------------------------------------
*/

// Donation amount
Breadcrumbs::for('admin.donation_amount.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Donation Amount List', route('admin.donation_amount.index'));
});
// Donation amount > New
Breadcrumbs::for('admin.donation_amount.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.donation_amount.index');
    $breadcrumbs->push('Add', route('admin.donation_amount.create'));
});
// Donation amount > Donation amount Inc.
Breadcrumbs::for('admin.donation_amount.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.donation_amount.index');
    $breadcrumbs->push($data->title, route('admin.donation_amount.show', $data->id));
});
// Donation amount > Edit
Breadcrumbs::for('admin.donation_amount.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.donation_amount.show', $data);
    $breadcrumbs->push('Edit', route('admin.donation_amount.edit', $data->id));
});
// End Donation amount //

/*
|--------------------------------------------------------------------------
| Blogs
|--------------------------------------------------------------------------
*/

// Blogs
Breadcrumbs::for('admin.blogs.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('blog List', route('admin.blogs.index'));
});
// Blogs > New
Breadcrumbs::for('admin.blogs.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.blogs.index');
    $breadcrumbs->push('Add', route('admin.blogs.create'));
});
// Blogs > Blogs Inc.
Breadcrumbs::for('admin.blogs.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.blogs.index');
    $breadcrumbs->push($data->title, route('admin.blogs.show', $data->id));
});
// Blogs > Edit
Breadcrumbs::for('admin.blogs.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.blogs.show', $data);
    $breadcrumbs->push('Edit', route('admin.blogs.edit', $data->id));
});
// End Blogs //


/*
|--------------------------------------------------------------------------
| Category
|--------------------------------------------------------------------------
*/
// Category
Breadcrumbs::for('admin.category.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('category List', route('admin.category.index'));
});
// category > New
Breadcrumbs::for('admin.category.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.category.index');
    $breadcrumbs->push('Add', route('admin.category.create'));
});
// category > category Inc.
Breadcrumbs::for('admin.category.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.category.index');
    $breadcrumbs->push($data->title, route('admin.category.show', $data->id));
});
// category > Edit
Breadcrumbs::for('admin.category.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.category.show', $data);
    $breadcrumbs->push('Edit', route('admin.category.edit', $data->id));
});
// End Category //


/*
|--------------------------------------------------------------------------
| Contact Queries
|--------------------------------------------------------------------------
*/

// Contact Queries
Breadcrumbs::for('admin.contact_queries.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Contact List', route('admin.contact_queries.index'));
});
// End Contact Queries //


/*
|--------------------------------------------------------------------------
| About Us
|--------------------------------------------------------------------------
*/

// About Us > Listing
Breadcrumbs::for('admin.about_us.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('About Us', route('admin.about_us.index'));
});
// End About Us //


/*
|--------------------------------------------------------------------------
| User Management > Administrator
|--------------------------------------------------------------------------
*/

// Administrator
Breadcrumbs::for('admin.administrators.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Admin Users List', route('admin.administrators.index'));
});
// Administrator > New
Breadcrumbs::for('admin.administrators.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.administrators.index');
    $breadcrumbs->push('Add', route('admin.administrators.create'));
});
// Administrator > Show
Breadcrumbs::for('admin.administrators.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.administrators.index');
    $breadcrumbs->push($data->fullName(), route('admin.administrators.show', $data->id));
});
// Administrator > Edit
Breadcrumbs::for('admin.administrators.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.administrators.show', $data);
    $breadcrumbs->push('Edit', route('admin.administrators.edit', $data->id));
});
// End Administrator //

/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/

// Pages > Listing
Breadcrumbs::for('admin.pages.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Page List', route('admin.pages.index'));
});
// Pages > New
Breadcrumbs::for('admin.pages.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.pages.index');
    $breadcrumbs->push('Add', route('admin.pages.create'));
});
// Pages > Show
Breadcrumbs::for('admin.pages.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.pages.index');
    $breadcrumbs->push($data->page_title, route('admin.pages.show', $data->id));
});
// Pages > Edit
Breadcrumbs::for('admin.pages.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.pages.index', $data);
    $breadcrumbs->push('Edit', route('admin.pages.edit', $data->id));
});
// End Pages //


/*
|--------------------------------------------------------------------------
| Users
|--------------------------------------------------------------------------
*/

// Users
Breadcrumbs::for('admin.users.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('users List', route('admin.users.index'));
});
// Users > New
Breadcrumbs::for('admin.users.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.users.index');
    $breadcrumbs->push('Add', route('admin.users.create'));
});
// Users > Amazon Inc.
Breadcrumbs::for('admin.users.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.users.index');
    $breadcrumbs->push($data->first_name, route('admin.users.show', $data->id));
});
// Users > Edit
Breadcrumbs::for('admin.users.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.users.show', $data);
    $breadcrumbs->push('Edit', route('admin.users.edit', $data->id));
});
// End Users //


/*
|--------------------------------------------------------------------------
| Newsletter
|--------------------------------------------------------------------------
*/

// Newsletter
Breadcrumbs::for('admin.newsletter.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Newsletter List', route('admin.newsletter.index'));
});
// End Newsletter //

/*
|--------------------------------------------------------------------------
| Site Setting
|--------------------------------------------------------------------------
*/

// Site Setting
Breadcrumbs::for('admin.site-settings.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Site Settings', route('admin.site-settings.index'));
});
// End Site Setting //


/*
|--------------------------------------------------------------------------
| Change Password
|--------------------------------------------------------------------------
*/

// Change Password
Breadcrumbs::for('admin.users.change-password', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Change Password', route('admin.users.change-password'));
});

