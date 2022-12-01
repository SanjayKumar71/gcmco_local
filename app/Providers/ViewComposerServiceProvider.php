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
         * Home Content
         */
        view()->composer('admin.home_content.index', function ($view) {
            $view->with(['pageTitle' => 'Home Content']);
        });

        /*
         * Campaign
         */
        view()->composer('admin.campaigns.index', function ($view) {
            $view->with(['pageTitle' => 'Campaign List']);
        });
        view()->composer('admin.campaigns.create', function ($view) {
            $view->with(['pageTitle' => 'Add Campaign File']);
        });
        view()->composer('admin.campaigns.show', function ($view) {
            $view->with(['pageTitle' => 'Show Campaign File']);
        });
        view()->composer('admin.campaigns.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Campaign File']);
        });

        /*
         * Sub Campaign
         */
        view()->composer('admin.sub_campaigns.index', function ($view) {
            $view->with(['pageTitle' => 'Sub Campaign List']);
        });
        view()->composer('admin.sub_campaigns.create', function ($view) {
            $view->with(['pageTitle' => 'Add Sub Campaign File']);
        });
        view()->composer('admin.sub_campaigns.show', function ($view) {
            $view->with(['pageTitle' => 'Show Sub Campaign File']);
        });
        view()->composer('admin.sub_campaigns.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Sub Campaign File']);
        });

        /*
         * Donation Types
         */
        view()->composer('admin.donation_types.index', function ($view) {
            $view->with(['pageTitle' => 'Donation Type List']);
        });
        view()->composer('admin.donation_types.create', function ($view) {
            $view->with(['pageTitle' => 'Add Donation Type File']);
        });
        view()->composer('admin.donation_types.show', function ($view) {
            $view->with(['pageTitle' => 'Show Donation Type File']);
        });
        view()->composer('admin.donation_types.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Donation Type File']);
        });

        /*
         * Donation Amount
         */
        view()->composer('admin.donation_amount.index', function ($view) {
            $view->with(['pageTitle' => 'Donation Amount List']);
        });
        view()->composer('admin.donation_amount.create', function ($view) {
            $view->with(['pageTitle' => 'Add Donation Amount File']);
        });
        view()->composer('admin.donation_amount.show', function ($view) {
            $view->with(['pageTitle' => 'Show Donation Amount File']);
        });
        view()->composer('admin.donation_amount.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Donation Amount File']);
        });

        /*
         * Transactions
         */
        view()->composer('admin.transactions.index', function ($view) {
            $view->with(['pageTitle' => 'Transaction List']);
        });
        view()->composer('admin.transactions.show', function ($view) {
            $view->with(['pageTitle' => 'Show Transaction']);
        });

        /*
         * Blogs
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
         * Contact Queries
         */
        view()->composer('admin.contact_queries.index', function ($view) {
            $view->with(['pageTitle' => 'Contact Queries']);
        });

        /*
         * Admin About Us
         */
        view()->composer('admin.about_us', function ($view) {
            $view->with(['pageTitle' => 'About Us']);
        });

        /*
         * Administrators
         */
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
         * Newsletter
         */
        view()->composer('admin.newsletter.index', function ($view) {
            $view->with(['pageTitle' => 'Newsletter List']);
        });

        /*
         * Site Setting
         */
        view()->composer('admin.siteSettings', function ($view) {
            $view->with(['pageTitle' => 'Site Settings']);
        });

        /*
         * Change Password
         */
        view()->composer('admin.users.changePassword', function ($view) {
            $view->with(['pageTitle' => 'Change Password']);
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


    }
}
