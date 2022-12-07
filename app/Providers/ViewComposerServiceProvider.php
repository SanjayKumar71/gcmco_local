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
         * History
         */
        view()->composer('admin.history.index', function ($view) {
            $view->with(['pageTitle' => 'History']);
        });

        /*
         * GCM Team
         */
        view()->composer('admin.gcm_team.index', function ($view) {
            $view->with(['pageTitle' => 'GCM Team List']);
        });
        view()->composer('admin.gcm_team.create', function ($view) {
            $view->with(['pageTitle' => 'Add GCM Team']);
        });
        view()->composer('admin.gcm_team.show', function ($view) {
            $view->with(['pageTitle' => 'Show GCM Team']);
        });
        view()->composer('admin.gcm_team.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit GCM Team']);
        });

        /*
         * What They Say
         */
        view()->composer('admin.what_they_say.index', function ($view) {
            $view->with(['pageTitle' => 'What They Say List']);
        });
        view()->composer('admin.what_they_say.create', function ($view) {
            $view->with(['pageTitle' => 'Add What They Say']);
        });
        view()->composer('admin.what_they_say.show', function ($view) {
            $view->with(['pageTitle' => 'Show What They Say']);
        });
        view()->composer('admin.what_they_say.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit What They Say']);
        });

        /*
         * Who We Are
         */
        view()->composer('admin.who_we_are.index', function ($view) {
            $view->with(['pageTitle' => 'Who We Are']);
        });

        /*
         * Statement Of Faith
         */
        view()->composer('admin.statement_of_faith.index', function ($view) {
            $view->with(['pageTitle' => 'Statement Of Faith']);
        });

        /*
         * Sponsor
         */
        view()->composer('admin.sponsors.index', function ($view) {
            $view->with(['pageTitle' => 'Sponsor']);
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
         * News Articles
         */
        view()->composer('admin.news_articles.index', function ($view) {
            $view->with(['pageTitle' => 'News Article List']);
        });
        view()->composer('admin.news_articles.create', function ($view) {
            $view->with(['pageTitle' => 'Add News Article']);
        });
        view()->composer('admin.news_articles.show', function ($view) {
            $view->with(['pageTitle' => 'Show News Article']);
        });
        view()->composer('admin.news_articles.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit News Article']);
        });

        /*
         * Photo Gallery
         */
        view()->composer('admin.photo_gallery.index', function ($view) {
            $view->with(['pageTitle' => 'Photo Gallery List']);
        });
        view()->composer('admin.photo_gallery.create', function ($view) {
            $view->with(['pageTitle' => 'Add Photo Gallery']);
        });
        view()->composer('admin.photo_gallery.show', function ($view) {
            $view->with(['pageTitle' => 'Show Photo Gallery']);
        });
        view()->composer('admin.photo_gallery.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Photo Gallery']);
        });

        /*
         * Video
         */
        view()->composer('admin.videos.index', function ($view) {
            $view->with(['pageTitle' => 'Video List']);
        });
        view()->composer('admin.videos.create', function ($view) {
            $view->with(['pageTitle' => 'Add Video']);
        });
        view()->composer('admin.videos.show', function ($view) {
            $view->with(['pageTitle' => 'Show Video']);
        });
        view()->composer('admin.videos.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Video']);
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
        view()->composer('admin.contact_queries.show', function ($view) {
            $view->with(['pageTitle' => 'Show Contact Query']);
        });

        /*
         * Speaking Events
         */
        view()->composer('admin.speaking_events.index', function ($view) {
            $view->with(['pageTitle' => 'Speaking Events List']);
        });
        view()->composer('admin.speaking_events.create', function ($view) {
            $view->with(['pageTitle' => 'Add Speaking Event']);
        });
        view()->composer('admin.speaking_events.show', function ($view) {
            $view->with(['pageTitle' => 'Show Speaking Event']);
        });
        view()->composer('admin.speaking_events.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Speaking Event']);
        });

        /*
         * Speaker
         */
        view()->composer('admin.speakers.index', function ($view) {
            $view->with(['pageTitle' => 'Speakers List']);
        });
        view()->composer('admin.speakers.create', function ($view) {
            $view->with(['pageTitle' => 'Add Speaker']);
        });
        view()->composer('admin.speakers.show', function ($view) {
            $view->with(['pageTitle' => 'Show Speaker']);
        });
        view()->composer('admin.speakers.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Speaker']);
        });

        /*
         * Speaker Request
         */
        view()->composer('admin.speaker_requests.index', function ($view) {
            $view->with(['pageTitle' => 'Speaker Request List']);
        });
        view()->composer('admin.speaker_requests.show', function ($view) {
            $view->with(['pageTitle' => 'Show Speaker Request']);
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
