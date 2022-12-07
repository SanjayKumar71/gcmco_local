<?php

namespace App\Services\Menu;

use Spatie\Menu\Laravel\Link;
use Spatie\Menu\Laravel\Menu;

class AdminMenu
{
    public function register()
    {
        Menu::macro('admin', function ($user) {

            $menu = Menu::new()
                ->addClass('page-sidebar-menu')
                ->setAttribute('data-keep-expanded', 'false')
                ->setAttribute('data-auto-scroll', 'true')
                ->setAttribute('data-slide-speed', '200')
                ->html('<div class="sidebar-toggler hidden-phone"></div>');

            $menu = $menu->add(Link::toRoute(
                'admin.dashboard.index',
                '<i class="fa fa-home"></i> <span class="title">Dashboard</span>'
            )->addParentClass('start'));

            $menu = $menu->add(Link::toRoute(
                'admin.home_content.index',
                '<i class="fa fa-home"></i> <span class="title">Home Content</span>'
            ));

            $menu = $menu->add(Link::toRoute(
                'admin.history.index',
                '<i class="fa fa-home"></i> <span class="title">History</span>'
            ));

            $menu = $menu->add(Link::toRoute(
                'admin.gcm_team.index',
                '<i class="fa fa-home"></i> <span class="title">GCM Team</span>'
            ));

            $menu = $menu->add(Link::toRoute(
                'admin.what_they_say.index',
                '<i class="fa fa-home"></i> <span class="title">What They Say</span>'
            ));

            $menu = $menu->add(Link::toRoute(
                'admin.who_we_are.index',
                '<i class="fa fa-home"></i> <span class="title">Who We Are</span>'
            ));
            
            $menu = $menu->add(Link::toRoute(
                'admin.statement_of_faith.index',
                '<i class="fa fa-home"></i> <span class="title">Statement Of Faith</span>'
            ));

            $menu = $menu->add(Link::toRoute(
                'admin.sponsors.index',
                '<i class="fa fa-home"></i> <span class="title">Sponsors</span>'
            ));

            // $menu = $menu->add(Link::toRoute(
            //     'admin.category.index',
            //     '<i class="fa fa-file"></i> <span class="title">Category</span>'
            // ));

            $menu = $menu->add(Link::toRoute(
                'admin.contact_queries.index',
                '<i class="fa fa-file"></i> <span class="title">Contact Queries</span>'
            ));

            $menu = $menu->add(Link::toRoute(
                'admin.speaking_events.index',
                '<i class="fa fa-file"></i> <span class="title">Speaking Event</span>'
            ));

            $menu = $menu->add(Link::toRoute(
                'admin.speakers.index',
                '<i class="fa fa-file"></i> <span class="title">Speaker</span>'
            ));

            $menu = $menu->add(Link::toRoute(
                'admin.speaker_requests.index',
                '<i class="fa fa-file"></i> <span class="title">Speaker Request</span>'
            ));

            $menu = $menu->add(Link::toRoute(
                'admin.about_us.index',
                '<i class="fa fa-home"></i> <span class="title">About Us</span>'
            ));

            //$menu = $menu->add(Link::toRoute(
            //    'admin.administrators.index',
            //    '<i class="fa fa-user"></i> <span class="title">Admin Users</span>'
            //));
            
            $menu = $menu->add(Link::toRoute(
                'admin.campaigns.index',
                '<i class="fa fa-th"></i> <span class="title">Campaigns</span>'
            ));

            $menu = $menu->add(Link::toRoute(
                'admin.sub_campaigns.index',
                '<i class="fa fa-th"></i> <span class="title">Sub Campaigns</span>'
            ));

            $menu = $menu->add(Link::toRoute(
                'admin.donation_types.index',
                '<i class="fa fa-th"></i> <span class="title">Donation Types</span>'
            ));

            $menu = $menu->add(Link::toRoute(
                'admin.donation_amount.index',
                '<i class="fa fa-th"></i> <span class="title">Donation Amount</span>'
            ));

            $menu = $menu->add(Link::toRoute(
                'admin.transactions.index',
                '<i class="fa fa-th"></i> <span class="title">Transactions</span>'
            ));

            $menu = $menu->add(Link::toRoute(
                'admin.news_articles.index',
                '<i class="fa fa-th"></i> <span class="title">News & Articles</span>'
            ));

            $menu = $menu->add(Link::toRoute(
                'admin.photo_gallery.index',
                '<i class="fa fa-th"></i> <span class="title">Photo Gallery</span>'
            ));

            $menu = $menu->add(Link::toRoute(
                'admin.videos.index',
                '<i class="fa fa-th"></i> <span class="title">Videos</span>'
            ));

            // $menu = $menu->add(Link::toRoute(
            //     'admin.pages.index',
            //     '<i class="fa fa-th"></i> <span class="title">Pages</span>'
            // ));

            // $menu = $menu->add(Link::toRoute(
            //     'admin.users.index',
            //     '<i class="fa fa-users"></i> <span class="title">Users</span>'
            // ));

            $menu = $menu->add(Link::toRoute(
                'admin.newsletter.index',
                '<i class="fa fa-cog"></i> <span class="title">Newsletter</span>'
            ));

            $menu = $menu->add(Link::toRoute(
                'admin.site-settings.index',
                '<i class="fa fa-cog"></i> <span class="title">Site Settings</span>'
            ));

            $menu = $menu->add(Link::toRoute(
                'admin.users.change-password',
                '<i class="fa fa-lock"></i> <span class="title">Change Password</span>'
            ))
            ->add(Link::toRoute(
                'admin.auth.logout',
                '<i class="fa fa-sign-out"></i> <span class="title">Logout</span>'
            )->setAttribute('id', 'leftnav-logout-link'))
            ->setActiveFromRequest();

            return $menu;
        });
    }
}
