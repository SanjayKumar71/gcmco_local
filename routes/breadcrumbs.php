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

/*
|--------------------------------------------------------------------------
| Home Section Three
|--------------------------------------------------------------------------
*/

// Home Section Three > Listing
Breadcrumbs::for('admin.home_section_three.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Home Section Three List', route('admin.home_section_three.index'));
});

// home_section_three > New
Breadcrumbs::for('admin.home_section_three.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.home_section_three.index');
    $breadcrumbs->push('Add', route('admin.home_section_three.create'));
});

// home_section_three > Show
Breadcrumbs::for('admin.home_section_three.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.home_section_three.index');
    $breadcrumbs->push($data->title, route('admin.home_section_three.show', $data->id));
});

// home_section_three > Edit
Breadcrumbs::for('admin.home_section_three.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.home_section_three.index', $data);
    $breadcrumbs->push('Edit', route('admin.home_section_three.edit', $data->id));
});

/*
|--------------------------------------------------------------------------
| Partnership And Affiliation
|--------------------------------------------------------------------------
*/

// Partnership And Affiliation > Listing
Breadcrumbs::for('admin.partnership_affiliation.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Partnership And Affiliation List', route('admin.partnership_affiliation.index'));
});

// partnership_affiliation > New
Breadcrumbs::for('admin.partnership_affiliation.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.partnership_affiliation.index');
    $breadcrumbs->push('Add', route('admin.partnership_affiliation.create'));
});

// partnership_affiliation > Show
Breadcrumbs::for('admin.partnership_affiliation.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.partnership_affiliation.index');
    $breadcrumbs->push('Partnership And Affiliation', route('admin.partnership_affiliation.show', $data->id));
});

// partnership_affiliation > Edit
Breadcrumbs::for('admin.partnership_affiliation.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.partnership_affiliation.index', $data);
    $breadcrumbs->push('Edit', route('admin.partnership_affiliation.edit', $data->id));
});

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


/*
|--------------------------------------------------------------------------
| Site Settings
|--------------------------------------------------------------------------
*/

// Site Setting
Breadcrumbs::for('admin.site-settings.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Site Settings', route('admin.site-settings.index'));
});
// Home Content
Breadcrumbs::for('admin.home_content.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Home Content', route('admin.home_content.index'));
});
Breadcrumbs::for('admin.work_with_me.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Work With Me', route('admin.work_with_me.index'));
});
Breadcrumbs::for('admin.help.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('help', route('admin.help.index'));
});
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



/*
|--------------------------------------------------------------------------
| Users
|--------------------------------------------------------------------------
*/

// users
Breadcrumbs::for('admin.users.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('users List', route('admin.users.index'));
});

// users > New
Breadcrumbs::for('admin.users.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.users.index');
    $breadcrumbs->push('Add', route('admin.users.create'));
});

// users > Amazon Inc.
Breadcrumbs::for('admin.users.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.users.index');
    $breadcrumbs->push($data->first_name, route('admin.users.show', $data->id));
});

// users > Edit
Breadcrumbs::for('admin.users.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.users.show', $data);
    $breadcrumbs->push('Edit', route('admin.users.edit', $data->id));
});

/*
|--------------------------------------------------------------------------
| About Us Program Section
|--------------------------------------------------------------------------
*/

// about us
Breadcrumbs::for('admin.about_us_program_section.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Newsletter List', route('admin.about_us_program_section.index'));
});

// about_us_program_section > New
Breadcrumbs::for('admin.about_us_program_section.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.about_us_program_section.index');
    $breadcrumbs->push('Add', route('admin.about_us_program_section.create'));
});

// about_us_program_section > Amazon Inc.
Breadcrumbs::for('admin.about_us_program_section.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.about_us_program_section.index');
    $breadcrumbs->push('newsletter', route('admin.about_us_program_section.show', $data->id));
});

// about_us_program_section > Edit
Breadcrumbs::for('admin.about_us_program_section.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.about_us_program_section.show', $data);
    $breadcrumbs->push('Edit', route('admin.about_us_program_section.edit', $data->id));
});

/*
|--------------------------------------------------------------------------
| newsletter
|--------------------------------------------------------------------------
*/

// newsletter
Breadcrumbs::for('admin.newsletter.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Newsletter List', route('admin.newsletter.index'));
});

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


// Blogs
Breadcrumbs::for('admin.events.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('blog List', route('admin.events.index'));
});

// Blogs > New
Breadcrumbs::for('admin.events.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.events.index');
    $breadcrumbs->push('Add', route('admin.events.create'));
});

// Blogs > Blogs Inc.
Breadcrumbs::for('admin.events.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.events.index');
    $breadcrumbs->push($data->title, route('admin.events.show', $data->id));
});

// Blogs > Edit
Breadcrumbs::for('admin.events.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.events.show', $data);
    $breadcrumbs->push('Edit', route('admin.events.edit', $data->id));
});

// Programs
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

// ProgramType
Breadcrumbs::for('admin.program_type.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Program Type List', route('admin.program_type.index'));
});

// ProgramType > New
Breadcrumbs::for('admin.program_type.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.program_type.index');
    $breadcrumbs->push('Add', route('admin.program_type.create'));
});

// ProgramType > Programs Inc.
Breadcrumbs::for('admin.program_type.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.program_type.index');
    $breadcrumbs->push($data->name, route('admin.program_type.show', $data->id));
});

// ProgramType > Edit
Breadcrumbs::for('admin.program_type.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.program_type.index', $data);
    $breadcrumbs->push('Edit', route('admin.program_type.edit', $data->id));
});

// User Document
Breadcrumbs::for('admin.user_documents.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('User Document Type List', route('admin.user_documents.index'));
});

// User Document > New
Breadcrumbs::for('admin.user_documents.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.user_documents.index');
    $breadcrumbs->push('Add', route('admin.user_documents.create'));
});

// User Document > Programs Inc.
Breadcrumbs::for('admin.user_documents.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.user_documents.index');
    $breadcrumbs->push($data->name, route('admin.user_documents.show', $data->id));
});

// User Document > Edit
Breadcrumbs::for('admin.user_documents.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.user_documents.index', $data);
    $breadcrumbs->push('Edit', route('admin.user_documents.edit', $data->id));
});

// Programs
Breadcrumbs::for('admin.programs.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Programs  List', route('admin.programs.index'));
});

// Programs > New
Breadcrumbs::for('admin.programs.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.programs.index');
    $breadcrumbs->push('Add', route('admin.programs.create'));
});

// Programs > Programs Inc.
Breadcrumbs::for('admin.programs.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.programs.index');
    $breadcrumbs->push($data->title, route('admin.programs.show', $data->id));
});

// Programs > Edit
Breadcrumbs::for('admin.programs.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.programs.index', $data);
    $breadcrumbs->push('Edit', route('admin.programs.edit', $data->id));
});

// Program Session
Breadcrumbs::for('admin.program_session.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Program Session  List', route('admin.program_session.index'));
});

// Program Session > New
Breadcrumbs::for('admin.program_session.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.program_session.index');
    $breadcrumbs->push('Add', route('admin.program_session.create'));
});

// Program Session > Program_session Inc.
Breadcrumbs::for('admin.program_session.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.program_session.index');
    $breadcrumbs->push($data->programs->title, route('admin.program_session.show', $data->programs->title));
});

// Program Session > Edit
Breadcrumbs::for('admin.program_session.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.program_session.index', $data);
    $breadcrumbs->push('Edit', route('admin.program_session.edit', $data->id));
});


// Blogs
Breadcrumbs::for('admin.contact_queries.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Contact List', route('admin.contact_queries.index'));
});
Breadcrumbs::for('admin.bookings.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Bookings List', route('admin.bookings.index'));
});





Breadcrumbs::for('admin.success_stories.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('Stories List', route('admin.success_stories.index'));
});

// Blogs > New
Breadcrumbs::for('admin.success_stories.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.success_stories.index');
    $breadcrumbs->push('Add', route('admin.success_stories.create'));
});

// Blogs > Blogs Inc.
Breadcrumbs::for('admin.success_stories.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.success_stories.index');
    $breadcrumbs->push($data->title, route('admin.success_stories.show', $data->id));
});

// Blogs > Edit
Breadcrumbs::for('admin.success_stories.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.success_stories.show', $data);
    $breadcrumbs->push('Edit', route('admin.success_stories.edit', $data->id));
});



Breadcrumbs::for('admin.testimonials.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard.index');
    $breadcrumbs->push('testimonials List', route('admin.testimonials.index'));
});

// Blogs > New
Breadcrumbs::for('admin.testimonials.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.testimonials.index');
    $breadcrumbs->push('Add', route('admin.testimonials.create'));
});

// Blogs > Blogs Inc.
Breadcrumbs::for('admin.testimonials.show', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.testimonials.index');
    $breadcrumbs->push($data->review, route('admin.testimonials.show', $data->id));
});

// Blogs > Edit
Breadcrumbs::for('admin.testimonials.edit', function ($breadcrumbs, $data) {
    $breadcrumbs->parent('admin.testimonials.show', $data);
    $breadcrumbs->push('Edit', route('admin.testimonials.edit', $data->id));
});

