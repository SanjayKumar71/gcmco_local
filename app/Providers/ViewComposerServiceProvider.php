<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeAdminPages();
    }

    /**
     * Compose the admin pages
     *
     * e-g: admin page titles etc.
     */
    private function composeAdminPages()
    {
        /*
         * Dashboard
         */
        view()->composer('admin.dashboard.index', function ($view) {
            $view->with(['pageTitle' => 'Dashboard']);
        });

        /*
         * Administrators
         */
        view()->composer('admin.contact_queries.index', function ($view) {
            $view->with(['pageTitle' => 'Contact Queries']);
        });

        view()->composer('admin.bookings.index', function ($view) {
            $view->with(['pageTitle' => 'Bookings Queries']);
        });





        view()->composer('admin.administrators.index', function ($view) {
            $view->with(['pageTitle' => 'Admin Users List']);
        });
        view()->composer('admin.administrators.create', function ($view) {
            $view->with(['pageTitle' => 'Add Admin User']);
        });
        view()->composer('admin.administrators.show', function ($view) {
            $view->with(['pageTitle' => 'Show Admin User']);
        });
        view()->composer('admin.administrators.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Admin User']);
        });

        /*
         * Pages
         */
        view()->composer('admin.pages.index', function ($view) {
            $view->with(['pageTitle' => 'Page List']);
        });
        view()->composer('admin.pages.create', function ($view) {
            $view->with(['pageTitle' => 'Add Page']);
        });
        view()->composer('admin.pages.show', function ($view) {
            $view->with(['pageTitle' => 'Show Page']);
        });
        view()->composer('admin.pages.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Page']);
        });

        /*
         * Media File
         */
        view()->composer('admin.blogs.index', function ($view) {
            $view->with(['pageTitle' => 'Blogs List']);
        });
        view()->composer('admin.blogs.create', function ($view) {
            $view->with(['pageTitle' => 'Add Blogs File']);
        });
        view()->composer('admin.blogs.show', function ($view) {
            $view->with(['pageTitle' => 'Show Blogs File']);
        });
        view()->composer('admin.blogs.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Blogs File']);
        });

        /*
         * events
         */
        view()->composer('admin.events.index', function ($view) {
            $view->with(['pageTitle' => 'Blogs List']);
        });
        view()->composer('admin.events.create', function ($view) {
            $view->with(['pageTitle' => 'Add Blogs File']);
        });
        view()->composer('admin.events.show', function ($view) {
            $view->with(['pageTitle' => 'Show Blogs File']);
        });
        view()->composer('admin.events.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Blogs File']);
        });

        /*
         * Category
         */
        view()->composer('admin.category.index', function ($view) {
            $view->with(['pageTitle' => 'Category List']);
        });
        view()->composer('admin.category.create', function ($view) {
            $view->with(['pageTitle' => 'Add Category File']);
        });
        view()->composer('admin.category.show', function ($view) {
            $view->with(['pageTitle' => 'Show Category File']);
        });
        view()->composer('admin.category.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Category File']);
        });
        
        /*
         * ProgramType
         */
        view()->composer('admin.program_type.index', function ($view) {
            $view->with(['pageTitle' => 'Program_type List']);
        });
        view()->composer('admin.program_type.create', function ($view) {
            $view->with(['pageTitle' => 'Add Program_type File']);
        });
        view()->composer('admin.program_type.show', function ($view) {
            $view->with(['pageTitle' => 'Show Program_type File']);
        });
        view()->composer('admin.program_type.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Program_type File']);
        });
        /*
         * Programs
         */
        view()->composer('admin.programs.index', function ($view) {
            $view->with(['pageTitle' => 'Programs List']);
        });
        view()->composer('admin.programs.create', function ($view) {
            $view->with(['pageTitle' => 'Add Programs File']);
        });
        view()->composer('admin.programs.show', function ($view) {
            $view->with(['pageTitle' => 'Show Programs File']);
        });
        view()->composer('admin.programs.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Programs File']);
        });

        /*
         * Programs Session
         */
        view()->composer('admin.program_session.index', function ($view) {
            $view->with(['pageTitle' => 'Program Session List']);
        });
        view()->composer('admin.program_session.create', function ($view) {
            $view->with(['pageTitle' => 'Add Program Session File']);
        });
        view()->composer('admin.program_session.show', function ($view) {
            $view->with(['pageTitle' => 'Show Program Session File']);
        });
        view()->composer('admin.program_session.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Program Session File']);
        });

        /*
         * User Documents
         */
        view()->composer('admin.user_documents.index', function ($view) {
            $view->with(['pageTitle' => 'User Documents List']);
        });
        view()->composer('admin.user_documents.create', function ($view) {
            $view->with(['pageTitle' => 'Add User Documents File']);
        });
        view()->composer('admin.user_documents.show', function ($view) {
            $view->with(['pageTitle' => 'Show User Documents File']);
        });
        view()->composer('admin.user_documents.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit User Documents File']);
        });

        /*
         * success_stories
         */
        view()->composer('admin.success_stories.index', function ($view) {
            $view->with(['pageTitle' => 'Success Story List']);
        });
        view()->composer('admin.success_stories.create', function ($view) {
            $view->with(['pageTitle' => 'Add Success Story File']);
        });
        view()->composer('admin.success_stories.show', function ($view) {
            $view->with(['pageTitle' => 'Show Success Story File']);
        });
        view()->composer('admin.success_stories.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Success Story File']);
        });


        /*
         * Permissions
         */
        view()->composer('admin.permissions.index', function ($view) {
            $view->with(['pageTitle' => 'Permissions List']);
        });
        view()->composer('admin.permissions.create', function ($view) {
            $view->with(['pageTitle' => 'Add Permission']);
        });
        view()->composer('admin.permissions.show', function ($view) {
            $view->with(['pageTitle' => 'Show Permission']);
        });
        view()->composer('admin.permissions.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Permission']);
        });


        /*
         * testimonials
         */
        view()->composer('admin.testimonials.index', function ($view) {
            $view->with(['pageTitle' => 'testimonials List']);
        });
        view()->composer('admin.testimonials.create', function ($view) {
            $view->with(['pageTitle' => 'Add testimonials']);
        });
        view()->composer('admin.testimonials.show', function ($view) {
            $view->with(['pageTitle' => 'Show testimonials']);
        });
        view()->composer('admin.testimonials.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit testimonials']);
        });

        /*
         * Roles
         */
        view()->composer('admin.roles.index', function ($view) {
            $view->with(['pageTitle' => 'Roles List']);
        });
        view()->composer('admin.roles.create', function ($view) {
            $view->with(['pageTitle' => 'Add Role']);
        });
        view()->composer('admin.roles.show', function ($view) {
            $view->with(['pageTitle' => 'Show Role']);
        });
        view()->composer('admin.roles.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Role']);
        });


        /*
         * Users
         */
        view()->composer('admin.users.index', function ($view) {
            $view->with(['pageTitle' => 'Users List']);
        });
        view()->composer('admin.users.create', function ($view) {
            $view->with(['pageTitle' => 'Add User']);
        });
        view()->composer('admin.users.show', function ($view) {
            $view->with(['pageTitle' => 'Show User']);
        });
        view()->composer('admin.users.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit User']);
        });

        /*
         * Site Setting
         */
        view()->composer('admin.siteSettings', function ($view) {
            $view->with(['pageTitle' => 'Site Settings']);
        });

        //home content
        view()->composer('admin.home_content.index', function ($view) {
            $view->with(['pageTitle' => 'Home Content']);
        });

        /*
         * Home Section Three
         */
        view()->composer('admin.home_section_three.index', function ($view) {
            $view->with(['pageTitle' => 'Home Section Three List']);
        });
        view()->composer('admin.home_section_three.create', function ($view) {
            $view->with(['pageTitle' => 'Add Home Section Three']);
        });
        view()->composer('admin.home_section_three.show', function ($view) {
            $view->with(['pageTitle' => 'Show Home Section Three']);
        });
        view()->composer('admin.home_section_three.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Home Section Three']);
        });

        /*
         * Partnership Affiliation
         */
        view()->composer('admin.partnership_affiliation.index', function ($view) {
            $view->with(['pageTitle' => 'Partnership And Affiliation List']);
        });
        view()->composer('admin.partnership_affiliation.create', function ($view) {
            $view->with(['pageTitle' => 'Add Partnership And Affiliation']);
        });
        view()->composer('admin.partnership_affiliation.show', function ($view) {
            $view->with(['pageTitle' => 'Show Partnership And Affiliation']);
        });
        view()->composer('admin.partnership_affiliation.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Partnership And Affiliation']);
        });

        /*
         * Admin About Us
         */
        view()->composer('admin.about_us', function ($view) {
            $view->with(['pageTitle' => 'About Us']);
        });
        
        /*
         * About Us Program Section
         */
        view()->composer('admin.about_us_program_section.index', function ($view) {
            $view->with(['pageTitle' => 'About Us Program Section List']);
        });
        view()->composer('admin.about_us_program_section.create', function ($view) {
            $view->with(['pageTitle' => 'Add About Us Program Section']);
        });
        view()->composer('admin.about_us_program_section.show', function ($view) {
            $view->with(['pageTitle' => 'Show About Us Program Section']);
        });
        view()->composer('admin.about_us_program_section.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit About Us Program Section']);
        });

        /*
         * Newsletter
         */
        view()->composer('admin.newsletter.index', function ($view) {
            $view->with(['pageTitle' => 'Newsletter List']);
        });

        //WORK WITH ME
        view()->composer('admin.work_with_me.index', function ($view) {
            $view->with(['pageTitle' => 'Work with me']);
        });
        //        Help
        view()->composer('admin.help.index', function ($view) {
            $view->with(['pageTitle' => 'Help']);
        });

        /*
         * Change Password
         */
        view()->composer('admin.users.changePassword', function ($view) {
            $view->with(['pageTitle' => 'Change Password']);
        });


    }
}
