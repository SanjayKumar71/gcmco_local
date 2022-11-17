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
                'admin.home_section_three.index',
                '<i class="fa fa-home"></i> <span class="title">Home Section Three</span>'
            )->addParentClass('start'));

            $menu = $menu->add(Link::toRoute(
                'admin.partnership_affiliation.index',
                '<i class="fa fa-home"></i> <span class="title">Partnership Affiliation</span>'
            )->addParentClass('start'));

            $menu = $menu->add(Link::toRoute(
                'admin.about_us.index',
                '<i class="fa fa-home"></i> <span class="title">About Us</span>'
            ));

            $menu = $menu->add(Link::toRoute(
                'admin.about_us_program_section.index',
                '<i class="fa fa-home"></i> <span class="title">About Us Program Section</span>'
            )->addParentClass('start'));
            
            // $menu = $menu->add(Link::toRoute(
            //     'admin.work_with_me.index',
            //     '<i class="fa fa-file"></i> <span class="title">Work With Me</span>'
            // )->addParentClass('start'));

            // $menu = $menu->add(Link::toRoute(
            //     'admin.blogs.index',
            //     '<i class="fa fa-file"></i> <span class="title">Blogs</span>'
            // ));
            // $menu = $menu->add(Link::toRoute(
            //     'admin.events.index',
            //     '<i class="fa fa-file"></i> <span class="title">Live Events</span>'
            // ));
            
            $menu = $menu->add(Link::toRoute(
                'admin.category.index',
                '<i class="fa fa-file"></i> <span class="title">Category</span>'
            ));
            
            $menu = $menu->add(Link::toRoute(
                'admin.program_type.index',
                '<i class="fa fa-file"></i> <span class="title">Program Type</span>'
            ));
            
            $menu = $menu->add(Link::toRoute(
                'admin.programs.index',
                '<i class="fa fa-file"></i> <span class="title">Programs</span>'
            ));
            
            $menu = $menu->add(Link::toRoute(
                'admin.program_session.index',
                '<i class="fa fa-file"></i> <span class="title">Program Session</span>'
            ));
            
            // $menu = $menu->add(Link::toRoute(
            //     'admin.success_stories.index',
            //     '<i class="fa fa-file"></i> <span class="title">Success Stories</span>'
            // ));
            
            $menu = $menu->add(Link::toRoute(
                'admin.contact_queries.index',
                '<i class="fa fa-file"></i> <span class="title">Contact Queries</span>'
            ));
            
            $menu = $menu->add(Link::toRoute(
                'admin.bookings.index',
                '<i class="fa fa-file"></i> <span class="title">Bookings</span>'
            ));
            
            $menu = $menu->add(Link::toRoute(
                'admin.user_documents.index',
                '<i class="fa fa-file"></i> <span class="title">User Documents</span>'
            ));
            
            // $menu = $menu->add(Link::toRoute(
            //     'admin.testimonials.index',
            //     '<i class="fa fa-file"></i> <span class="title">Testimonials</span>'
            // ));
            
            // $menu = $menu->add(Link::toRoute(
            //     'admin.help.index',
            //     '<i class="fa fa-file"></i> <span class="title">Helps</span>'
            // ));

            // $menu = $menu->add(Link::toRoute(
            //     'admin.users.index',
            //     '<i class="fa fa-users"></i> <span class="title">Users</span>'
            // ));


            $menu = $menu->add(Link::toRoute(
                'admin.pages.index',
                '<i class="fa fa-th"></i> <span class="title">Pages</span>'
            ));

            //$menu = $menu->add(Link::toRoute(
            //    'admin.administrators.index',
            //    '<i class="fa fa-user"></i> <span class="title">Admin Users</span>'
            //));

            $menu = $menu->add(Link::toRoute(
                'admin.site-settings.index',
                '<i class="fa fa-cog"></i> <span class="title">Site Settings</span>'
            ));

            $menu = $menu->add(Link::toRoute(
                'admin.newsletter.index',
                '<i class="fa fa-cog"></i> <span class="title">Newsletter</span>'
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
