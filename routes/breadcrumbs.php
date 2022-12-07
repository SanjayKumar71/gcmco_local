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
| History
|--------------------------------------------------------------------------
*/

// History
Breadcrumbs::for('admin.history.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('History', route('admin.history.index'));
});
// End History //

/*
|--------------------------------------------------------------------------
| GCM Team
|--------------------------------------------------------------------------
*/

// GCM Team
Breadcrumbs::for('admin.gcm_team.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('GCM Team', route('admin.gcm_team.index'));
});
// GCM Team > New
Breadcrumbs::for('admin.gcm_team.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.gcm_team.index');
    $breadcrumbs->push('Add', route('admin.gcm_team.create'));
});
// GCM Team > Show
Breadcrumbs::for('admin.gcm_team.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.gcm_team.index');
    $breadcrumbs->push('GCM Team', route('admin.gcm_team.show', $data->id));
});
// GCM Team > Edit
Breadcrumbs::for('admin.gcm_team.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.gcm_team.show', $data);
    $breadcrumbs->push('Edit', route('admin.gcm_team.edit', $data->id));
});
// End GCM Team //

/*
|--------------------------------------------------------------------------
| What They Say
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Who We Are
|--------------------------------------------------------------------------
*/

// Who We Are
Breadcrumbs::for('admin.who_we_are.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Who We Are', route('admin.who_we_are.index'));
});
// End Who We Are //

// Statement Of Faith
Breadcrumbs::for('admin.statement_of_faith.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Statement Of Faith', route('admin.statement_of_faith.index'));
});
// End Statement Of Faith //

/*
|--------------------------------------------------------------------------
| Sponsor
|--------------------------------------------------------------------------
*/

// Sponsor
Breadcrumbs::for('admin.sponsors.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Sponsor', route('admin.sponsors.index'));
});
// End Sponsor //

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
| Sub Campaign
|--------------------------------------------------------------------------
*/

// sub_campaigns
Breadcrumbs::for('admin.sub_campaigns.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Campaign List', route('admin.sub_campaigns.index'));
});
// sub_campaigns > New
Breadcrumbs::for('admin.sub_campaigns.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.sub_campaigns.index');
    $breadcrumbs->push('Add', route('admin.sub_campaigns.create'));
});
// sub_campaigns > Show.
Breadcrumbs::for('admin.sub_campaigns.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.sub_campaigns.index');
    $breadcrumbs->push($data->title, route('admin.sub_campaigns.show', $data->id));
});
// sub_campaigns > Edit
Breadcrumbs::for('admin.sub_campaigns.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.sub_campaigns.show', $data);
    $breadcrumbs->push('Edit', route('admin.sub_campaigns.edit', $data->id));
});
// End sub_campaigns //

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
| Donation amount
|--------------------------------------------------------------------------
*/

// Transaction
Breadcrumbs::for('admin.transactions.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Transaction List', route('admin.transactions.index'));
});
// Transaction > Show.
Breadcrumbs::for('admin.transactions.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.transactions.index');
    $breadcrumbs->push('Transaction', route('admin.transactions.show', $data->id));
});
// End Transaction //

/*
|--------------------------------------------------------------------------
| News Articles
|--------------------------------------------------------------------------
*/

// News Articles
Breadcrumbs::for('admin.news_articles.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('News Article List', route('admin.news_articles.index'));
});
// News Articles > New
Breadcrumbs::for('admin.news_articles.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.news_articles.index');
    $breadcrumbs->push('Add', route('admin.news_articles.create'));
});
// News Articles > Show
Breadcrumbs::for('admin.news_articles.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.news_articles.index');
    $breadcrumbs->push('News Article', route('admin.news_articles.show', $data->id));
});
// News Articles > Edit
Breadcrumbs::for('admin.news_articles.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.news_articles.show', $data);
    $breadcrumbs->push('Edit', route('admin.news_articles.edit', $data->id));
});
// End News Articles //

/*
|--------------------------------------------------------------------------
| Photo Gallery
|--------------------------------------------------------------------------
*/

// Photo Gallery
Breadcrumbs::for('admin.photo_gallery.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Photo Gallery List', route('admin.photo_gallery.index'));
});
// Photo Gallery > New
Breadcrumbs::for('admin.photo_gallery.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.photo_gallery.index');
    $breadcrumbs->push('Add', route('admin.photo_gallery.create'));
});
// Photo Gallery > Show
Breadcrumbs::for('admin.photo_gallery.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.photo_gallery.index');
    $breadcrumbs->push('Photo Gallery', route('admin.photo_gallery.show', $data->id));
});
// Photo Gallery > Edit
Breadcrumbs::for('admin.photo_gallery.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.photo_gallery.show', $data);
    $breadcrumbs->push('Edit', route('admin.photo_gallery.edit', $data->id));
});
// End Photo Gallery //

/*
|--------------------------------------------------------------------------
| Video
|--------------------------------------------------------------------------
*/

// Video
Breadcrumbs::for('admin.videos.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Video List', route('admin.videos.index'));
});
// Video > New
Breadcrumbs::for('admin.videos.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.videos.index');
    $breadcrumbs->push('Add', route('admin.videos.create'));
});
// Video > Show
Breadcrumbs::for('admin.videos.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.videos.index');
    $breadcrumbs->push('Video', route('admin.videos.show', $data->id));
});
// Video > Edit
Breadcrumbs::for('admin.videos.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.videos.show', $data);
    $breadcrumbs->push('Edit', route('admin.videos.edit', $data->id));
});
// End Video //

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
// Contact Queries > show
Breadcrumbs::for('admin.contact_queries.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.contact_queries.index');
    $breadcrumbs->push('Contact Query', route('admin.contact_queries.show', $data->id));
});
// End Contact Queries //


/*
|--------------------------------------------------------------------------
| speaking_events
|--------------------------------------------------------------------------
*/
// speaking_events
Breadcrumbs::for('admin.speaking_events.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('speaking_events List', route('admin.speaking_events.index'));
});
// speaking_events > New
Breadcrumbs::for('admin.speaking_events.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.speaking_events.index');
    $breadcrumbs->push('Add', route('admin.speaking_events.create'));
});
// speaking_events > Show
Breadcrumbs::for('admin.speaking_events.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.speaking_events.index');
    $breadcrumbs->push($data->title, route('admin.speaking_events.show', $data->id));
});
// speaking_events > Edit
Breadcrumbs::for('admin.speaking_events.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.speaking_events.show', $data);
    $breadcrumbs->push('Edit', route('admin.speaking_events.edit', $data->id));
});
// End speaking_events //

/*
|--------------------------------------------------------------------------
| Speakers
|--------------------------------------------------------------------------
*/
// Speakers
Breadcrumbs::for('admin.speakers.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('speakers List', route('admin.speakers.index'));
});
// Speakers > New
Breadcrumbs::for('admin.speakers.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.speakers.index');
    $breadcrumbs->push('Add', route('admin.speakers.create'));
});
// Speakers > Show
Breadcrumbs::for('admin.speakers.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.speakers.index');
    $breadcrumbs->push('Speaker', route('admin.speakers.show', $data->id));
});
// Speakers > Edit
Breadcrumbs::for('admin.speakers.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.speakers.show', $data);
    $breadcrumbs->push('Edit', route('admin.speakers.edit', $data->id));
});
// End Speakers //

/*
|--------------------------------------------------------------------------
| Speaker Requests
|--------------------------------------------------------------------------
*/
// Speaker Requests
Breadcrumbs::for('admin.speaker_requests.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Speaker Requests List', route('admin.speaker_requests.index'));
});
// speaker_requests > Show
Breadcrumbs::for('admin.speaker_requests.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.speaker_requests.index');
    $breadcrumbs->push('Speaker Request', route('admin.speaker_requests.show', $data->id));
});
// End Speaker Requests //

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

