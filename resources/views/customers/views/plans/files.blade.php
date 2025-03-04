@extends('layouts.customers')

@section('body', 'npc-default apps-only has-touch nk-nio-theme has-aside')

@section('content')

    <div class="nk-content ">
        <div class="container wide-xl">
            <div class="nk-content-inner">
                <div class="nk-aside toggle-screen-lg" data-content="sideNav" data-toggle-overlay="true" data-toggle-screen="lg" data-toggle-body="true">
                    <div class="nk-sidebar-menu" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px 0px -40px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px 0px 40px;">
                        <ul class="nk-menu nk-menu-main">
                            <li class="nk-menu-item">
                                <a href="html/index.html" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-text">Overview</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub active current-page">
                                <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                    <span class="nk-menu-text">Apps</span>
                                </a>
                                <ul class="nk-menu-sub" style="display: block;">
                                    <li class="nk-menu-item">
                                        <a href="html/apps-messages.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Messages</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/apps-inbox.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Inbox / Mail</span></a>
                                    </li>
                                    <li class="nk-menu-item active current-page">
                                        <a href="html/apps-file-manager.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">File Manager</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/apps-chats.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Chats / Messenger</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/apps-calendar.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Calendar</span><span class="nk-menu-badge badge-warning">New</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/apps-kanban.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Kanban Board</span><span class="nk-menu-badge badge-warning">New</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/components.html" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-text">Components</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/support-kb.html" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-text">Support</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/pages/contact.html" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-text">Contact</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                        </ul><!-- .nk-menu -->
                        <ul class="nk-menu">
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Use-Case Concept</h6>
                            </li><!-- .nk-menu-heading -->
                            <li class="nk-menu-item">
                                <a href="html/subscription/index.html" class="nk-menu-link" target="_blank" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-calendar-booking"></em></span>
                                    <span class="nk-menu-text">Subscription - SaaS</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Dashboards</h6>
                            </li><!-- .nk-menu-heading -->
                            <li class="nk-menu-item">
                                <a href="html/index.html" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                    <span class="nk-menu-text">SaaS Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="html/index-analytics.html" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-growth"></em></span>
                                    <span class="nk-menu-text">Analytics Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Pre-Built Pages</h6>
                            </li><!-- .nk-menu-heading -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                                    <span class="nk-menu-text">Projects</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/project-card.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Project Cards</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/project-list.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Project List</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                    <span class="nk-menu-text">User Manage</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/user-list-regular.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">User List - Regular</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/user-list-compact.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">User List - Compact</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/user-details-regular.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">User Details - Regular</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/user-profile-regular.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">User Profile - Regular</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/user-card.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">User Contact - Card</span> <span class="nk-menu-badge badge-warning">New</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                                    <span class="nk-menu-text">Order &amp; Invoice</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/history-payment.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Payment History</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/history-invoice-list.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Invoice List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/history-invoice.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Invoice Detail</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-help-alt"></em></span>
                                    <span class="nk-menu-text">Support &amp; Ticket</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/support-kb.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Support - KB</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/support-kb-topics.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Support - KB Topic</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/support-kb-details.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Support - KB Details</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/ticket-list.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Ticket List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/ticket-details.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Ticket Details</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/history-invoice.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Invoice Detail</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-signin"></em></span>
                                    <span class="nk-menu-text">Auth Pages</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/pages/auths/auth-login.html" class="nk-menu-link" target="_blank" data-original-title="" title=""><span class="nk-menu-text">Login / Signin</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/auths/auth-register.html" class="nk-menu-link" target="_blank" data-original-title="" title=""><span class="nk-menu-text">Register / Signup</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/auths/auth-reset.html" class="nk-menu-link" target="_blank" data-original-title="" title=""><span class="nk-menu-text">Forgot Password</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/auths/auth-success.html" class="nk-menu-link" target="_blank" data-original-title="" title=""><span class="nk-menu-text">Success / Confirm</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title=""><span class="nk-menu-text">Classic Version - v2</span></a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="html/pages/auths/auth-login-v2.html" class="nk-menu-link" target="_blank" data-original-title="" title=""><span class="nk-menu-text">Login / Signin</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/pages/auths/auth-register-v2.html" class="nk-menu-link" target="_blank" data-original-title="" title=""><span class="nk-menu-text">Register / Signup</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/pages/auths/auth-reset-v2.html" class="nk-menu-link" target="_blank" data-original-title="" title=""><span class="nk-menu-text">Forgot Password</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/pages/auths/auth-success-v2.html" class="nk-menu-link" target="_blank" data-original-title="" title=""><span class="nk-menu-text">Success / Confirm</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title=""><span class="nk-menu-text">No Slider Version - v3</span></a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="html/pages/auths/auth-login-v3.html" class="nk-menu-link" target="_blank" data-original-title="" title=""><span class="nk-menu-text">Login / Signin</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/pages/auths/auth-register-v3.html" class="nk-menu-link" target="_blank" data-original-title="" title=""><span class="nk-menu-text">Register / Signup</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/pages/auths/auth-reset-v3.html" class="nk-menu-link" target="_blank" data-original-title="" title=""><span class="nk-menu-text">Forgot Password</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/pages/auths/auth-success-v3.html" class="nk-menu-link" target="_blank" data-original-title="" title=""><span class="nk-menu-text">Success / Confirm</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                                    <span class="nk-menu-text">Error Pages</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/pages/errors/404-classic.html" target="_blank" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">404 Classic</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/errors/504-classic.html" target="_blank" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">504 Classic</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/errors/404-s1.html" target="_blank" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">404 Modern</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/errors/504-s1.html" target="_blank" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">504 Modern</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-files"></em></span>
                                    <span class="nk-menu-text">Other Pages</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="html/_blank.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Blank / Startup</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/pricing.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Pricing Plan</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/faqs.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Faqs / Help</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/contact.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Contact</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/terms-policy.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Terms / Policy</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/regular-v1.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Regular Page - v1</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/pages/regular-v2.html" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Regular Page - v2</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Others</h6>
                            </li><!-- .nk-menu-heading -->
                            <li class="nk-menu-item">
                                <a href="html/email-templates.html" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-text-rich"></em></span>
                                    <span class="nk-menu-text">Email Template</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="html/components.html" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-layers"></em></span>
                                    <span class="nk-menu-text">All Components</span>
                                </a>
                            </li>
                        </ul><!-- .nk-menu -->
                    </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div><!-- .nk-sidebar-menu -->
                    <div class="nk-aside-close">
                        <a href="#" class="toggle" data-target="sideNav"><em class="icon ni ni-cross"></em></a>
                    </div><!-- .nk-aside-close -->
                </div><!-- .nk-aside -->
                <div class="nk-content-body">
                    <div class="nk-content-wrap">
                        <div class="nk-block-head nk-block-head-md">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">File Manager</h3>
                                </div><!-- .nk-block-head-content -->
                                <div class="nk-block-head-content">
                                    <a href="html/index.html" class="back-to"><em class="icon ni ni-arrow-left"></em><span><span class="d-none d-sm-inline-block">Back to</span> Dashboard</span></a>
                                </div><!-- .nk-block-head-content -->
                            </div><!-- .nk-block-between -->
                        </div><!-- .nk-block-head -->
                        <div class="nk-fmg nk-fmg-boxed">
                            <div class="nk-fmg-aside toggle-screen-lg" data-content="files-aside" data-toggle-overlay="true" data-toggle-body="true" data-toggle-screen="lg" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                                <div class="nk-fmg-aside-wrap">
                                    <div class="nk-fmg-aside-top" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                                        <ul class="nk-fmg-menu">
                                            <li class="active">
                                                <a class="nk-fmg-menu-item" href="#">
                                                    <em class="icon ni ni-home-alt"></em>
                                                    <span class="nk-fmg-menu-text">Home</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nk-fmg-menu-item" href="#">
                                                    <em class="icon ni ni-file-docs"></em>
                                                    <span class="nk-fmg-menu-text">Files</span>
                                                </a>
                                                <ul>
                                                    <li><a href="#" class="nk-fmg-menu-item"><span class="nk-fmg-menu-text">New Files</span></a></li>
                                                    <li><a href="#" class="nk-fmg-menu-item"><span class="nk-fmg-menu-text">This Months</span></a></li>
                                                    <li><a href="#" class="nk-fmg-menu-item"><span class="nk-fmg-menu-text">Older Files</span></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="nk-fmg-menu-item" href="#">
                                                    <em class="icon ni ni-star"></em>
                                                    <span class="nk-fmg-menu-text">Starred</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nk-fmg-menu-item" href="#">
                                                    <em class="icon ni ni-share-alt"></em>
                                                    <span class="nk-fmg-menu-text">Shared</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nk-fmg-menu-item" href="#">
                                                    <em class="icon ni ni-trash-alt"></em>
                                                    <span class="nk-fmg-menu-text">Recovery</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nk-fmg-menu-item" href="#">
                                                    <em class="icon ni ni-setting-alt"></em>
                                                    <span class="nk-fmg-menu-text">Settings</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 374px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>
                                    <div class="nk-fmg-aside-bottom">
                                        <div class="nk-fmg-status">
                                            <h6 class="nk-fmg-status-title"><em class="icon ni ni-hard-drive"></em><span>Storage</span></h6>
                                            <div class="progress progress-md bg-light">
                                                <div class="progress-bar" data-progress="5" style="width: 5%;"></div>
                                            </div>
                                            <div class="nk-fmg-status-info">12.47 GB of 50 GB used</div>
                                            <div class="nk-fmg-status-action">
                                                <a href="#" class="link link-primary link-sm">Upgrade Storage</a>
                                            </div>
                                        </div>
                                        <div class="nk-fmg-switch">
                                            <div class="dropup">
                                                <a href="#" data-toggle="dropdown" data-offset="-10, 12" class="dropdown-toggle dropdown-indicator-unfold">
                                                    <div class="lead-text">Personal</div>
                                                    <div class="sub-text">Only you</div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Team Plan</span></a></li>
                                                        <li><a class="active" href="#"><span>Personal</span></a></li>
                                                        <li class="divider"></li>
                                                        <li><a class="link" href="#"><span>Upgrade Plan</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 1199px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div><!-- .nk-fmg-aside -->
                            <div class="nk-fmg-body">
                                <div class="nk-fmg-body-head d-none d-lg-flex">
                                    <div class="nk-fmg-search">
                                        <em class="icon ni ni-search"></em>
                                        <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search files, folders">
                                    </div>
                                    <div class="nk-fmg-actions">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <div class="dropdown">
                                                    <a href="#" class="btn btn-light" data-toggle="dropdown"><em class="icon ni ni-plus"></em> <span>Create</span></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#file-upload" data-toggle="modal"><em class="icon ni ni-upload-cloud"></em><span>Upload File</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-file-plus"></em><span>Create File</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-folder-plus"></em><span>Create Folder</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="#file-upload" class="btn btn-primary" data-toggle="modal"><em class="icon ni ni-upload-cloud"></em> <span>Upload</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="nk-fmg-body-content">
                                    <div class="nk-block-head nk-block-head-sm">
                                        <div class="nk-block-between position-relative">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title page-title">Files</h3>
                                            </div>
                                            <div class="nk-block-head-content">
                                                <ul class="nk-block-tools g-1">
                                                    <li class="d-lg-none">
                                                        <a href="#" class="btn btn-trigger btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                                    </li>
                                                    <li class="d-lg-none">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn btn-trigger btn-icon" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#file-upload" data-toggle="modal"><em class="icon ni ni-upload-cloud"></em><span>Upload File</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-file-plus"></em><span>Create File</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-folder-plus"></em><span>Create Folder</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="d-lg-none mr-n1"><a href="#" class="btn btn-trigger btn-icon toggle" data-target="files-aside"><em class="icon ni ni-menu-alt-r"></em></a></li>
                                                </ul>
                                            </div>
                                            <div class="search-wrap px-2 d-lg-none" data-search="search">
                                                <div class="search-content">
                                                    <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                    <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or message">
                                                    <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                </div>
                                            </div><!-- .search-wrap -->
                                        </div>
                                    </div>
                                    <div class="nk-fmg-quick-list nk-block">
                                        <div class="nk-block-head-xs">
                                            <div class="nk-block-between g-2">
                                                <div class="nk-block-head-content">
                                                    <h6 class="nk-block-title title">Quick Access</h6>
                                                </div>
                                                <div class="nk-block-head-content">
                                                    <a href="#" class="link link-primary toggle-opt active" data-target="quick-access">
                                                        <div class="inactive-text">Show</div>
                                                        <div class="active-text">Hide</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head -->
                                        <div class="toggle-expand-content expanded" data-content="quick-access">
                                            <div class="nk-files nk-files-view-grid">
                                                <div class="nk-files-list">
                                                    <div class="nk-file-item nk-file">
                                                        <div class="nk-file-info">
                                                            <a href="#" class="nk-file-link">
                                                                <div class="nk-file-title">
                                                                    <div class="nk-file-icon">
                                                                        <span class="nk-file-icon-type">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                <g>
                                                                                    <rect x="32" y="16" width="28" height="15" rx="2.5" ry="2.5" style="fill:#f29611"></rect>
                                                                                    <path d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z" style="fill:#ffb32c"></path>
                                                                                    <path d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z" style="fill:#f2a222"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <span href="#" class="title">UI Design</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-file-actions hideable">
                                                            <a href="#" class="btn btn-sm btn-icon btn-trigger"><em class="icon ni ni-cross"></em></a>
                                                        </div>
                                                    </div>
                                                    <div class="nk-file-item nk-file">
                                                        <div class="nk-file-info">
                                                            <a href="#" class="nk-file-link">
                                                                <div class="nk-file-title">
                                                                    <div class="nk-file-icon">
                                                                        <span class="nk-file-icon-type">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                <g>
                                                                                    <rect x="32" y="16" width="28" height="15" rx="2.5" ry="2.5" style="fill:#f29611"></rect>
                                                                                    <path d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z" style="fill:#ffb32c"></path>
                                                                                    <path d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z" style="fill:#f2a222"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <span href="#" class="title">DashLite Resource</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-file-actions hideable">
                                                            <a href="#" class="btn btn-sm btn-icon btn-trigger"><em class="icon ni ni-cross"></em></a>
                                                        </div>
                                                    </div>
                                                    <div class="nk-file-item nk-file">
                                                        <div class="nk-file-info">
                                                            <a href="#" class="nk-file-link">
                                                                <div class="nk-file-title">
                                                                    <div class="nk-file-icon">
                                                                        <span class="nk-file-icon-type">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                <g>
                                                                                    <rect x="32" y="16" width="28" height="15" rx="2.5" ry="2.5" style="fill:#f29611"></rect>
                                                                                    <path d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z" style="fill:#ffb32c"></path>
                                                                                    <path d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z" style="fill:#f2a222"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <span href="#" class="title">Projects</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-file-actions hideable">
                                                            <a href="#" class="btn btn-sm btn-icon btn-trigger"><em class="icon ni ni-cross"></em></a>
                                                        </div>
                                                    </div>
                                                    <div class="nk-file-item nk-file">
                                                        <div class="nk-file-info">
                                                            <a href="#" class="nk-file-link">
                                                                <div class="nk-file-title">
                                                                    <div class="nk-file-icon">
                                                                        <span class="nk-file-icon-type">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                <g>
                                                                                    <rect x="18" y="16" width="36" height="40" rx="5" ry="5" style="fill:#e3edfc"></rect>
                                                                                    <path d="M19.03,54A4.9835,4.9835,0,0,0,23,56H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                    <rect x="32" y="20" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                    <rect x="32" y="25" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                    <rect x="32" y="30" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                    <rect x="32" y="35" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                    <path d="M35,16.0594h2a0,0,0,0,1,0,0V41a1,1,0,0,1-1,1h0a1,1,0,0,1-1-1V16.0594A0,0,0,0,1,35,16.0594Z" style="fill:#7e95c4"></path>
                                                                                    <path d="M38.0024,40H33.9976A1.9976,1.9976,0,0,0,32,41.9976v2.0047A1.9976,1.9976,0,0,0,33.9976,46h4.0047A1.9976,1.9976,0,0,0,40,44.0024V41.9976A1.9976,1.9976,0,0,0,38.0024,40Zm-.0053,4H34V42h4Z" style="fill:#7e95c4"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <span href="#" class="title">All work.zip</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-file-actions hideable">
                                                            <a href="#" class="btn btn-sm btn-icon btn-trigger"><em class="icon ni ni-cross"></em></a>
                                                        </div>
                                                    </div>
                                                    <div class="nk-file-item nk-file">
                                                        <div class="nk-file-info">
                                                            <a href="#" class="nk-file-link">
                                                                <div class="nk-file-title">
                                                                    <div class="nk-file-icon">
                                                                        <span class="nk-file-icon-type">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                <path d="M42,31H30a3.0033,3.0033,0,0,0-3,3V45a3.0033,3.0033,0,0,0,3,3H42a3.0033,3.0033,0,0,0,3-3V34A3.0033,3.0033,0,0,0,42,31ZM29,38h6v3H29Zm8,0h6v3H37Zm6-4v2H37V33h5A1.001,1.001,0,0,1,43,34ZM30,33h5v3H29V34A1.001,1.001,0,0,1,30,33ZM29,45V43h6v3H30A1.001,1.001,0,0,1,29,45Zm13,1H37V43h6v2A1.001,1.001,0,0,1,42,46Z" style="fill:#36c684"></path></svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <span href="#" class="title">Sales Reports.xlsx</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-file-actions hideable">
                                                            <a href="#" class="btn btn-sm btn-icon btn-trigger"><em class="icon ni ni-cross"></em></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-files -->
                                        </div>
                                    </div>
                                    <div class="nk-fmg-listing nk-block-lg">
                                        <div class="nk-block-head-xs">
                                            <div class="nk-block-between g-2">
                                                <div class="nk-block-head-content">
                                                    <h6 class="nk-block-title title">Browse Files</h6>
                                                </div>
                                                <div class="nk-block-head-content">
                                                    <ul class="nk-block-tools g-3 nav">
                                                        <li><a data-toggle="tab" href="#file-grid-view" class="nk-switch-icon active"><em class="icon ni ni-view-grid3-wd"></em></a></li>
                                                        <li><a data-toggle="tab" href="#file-group-view" class="nk-switch-icon"><em class="icon ni ni-view-group-wd"></em></a></li>
                                                        <li><a data-toggle="tab" href="#file-list-view" class="nk-switch-icon"><em class="icon ni ni-view-row-wd"></em></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head -->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="file-grid-view">
                                                <div class="nk-files nk-files-view-grid">
                                                    <div class="nk-files-head">
                                                        <div class="nk-file-item">
                                                            <div class="nk-file-info">
                                                                <div class="dropdown">
                                                                    <div class="tb-head dropdown-toggle dropdown-indicator-caret" data-toggle="dropdown">Last Opened</div>
                                                                    <div class="dropdown-menu dropdown-menu-xs">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a class="active" href="#"><span>Last Opened</span></a></li>
                                                                            <li><a href="#"><span>Name</span></a></li>
                                                                            <li><a href="#"><span>Size</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-files-list">
                                                        <div class="nk-file-item nk-file">
                                                            <div class="nk-file-info">
                                                                <div class="nk-file-title">
                                                                    <div class="nk-file-icon">
                                                                        <a class="nk-file-icon-link" href="#">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <g>
                                                                                        <rect x="32" y="16" width="28" height="15" rx="2.5" ry="2.5" style="fill:#f29611"></rect>
                                                                                        <path d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z" style="fill:#ffb32c"></path>
                                                                                        <path d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z" style="fill:#f2a222"></path>
                                                                                        <path d="M42.2227,40H41.5V37.4443a5.5,5.5,0,0,0-11,0V40h-.7227A2.8013,2.8013,0,0,0,27,42.8184v6.3633A2.8013,2.8013,0,0,0,29.7773,52H42.2227A2.8013,2.8013,0,0,0,45,49.1816V42.8184A2.8013,2.8013,0,0,0,42.2227,40ZM36,48a2,2,0,1,1,2-2A2.0023,2.0023,0,0,1,36,48Zm3.5-8h-7V37.4443a3.5,3.5,0,0,1,7,0Z" style="fill:#c67424"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <a href="#" class="title">UI Design</a>
                                                                            <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ul class="nk-file-desc">
                                                                    <li class="date">Today</li>
                                                                    <li class="size">4.5 MB</li>
                                                                    <li class="members">3 Members</li>
                                                                </ul>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-plain no-bdr">
                                                                            <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-file -->
                                                        <div class="nk-file-item nk-file">
                                                            <div class="nk-file-info">
                                                                <div class="nk-file-title">
                                                                    <div class="nk-file-icon">
                                                                        <a class="nk-file-icon-link" href="#">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <g>
                                                                                        <rect x="32" y="16" width="28" height="15" rx="2.5" ry="2.5" style="fill:#f29611"></rect>
                                                                                        <path d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z" style="fill:#ffb32c"></path>
                                                                                        <path d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z" style="fill:#f2a222"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <a href="#" class="title">Proposal</a>
                                                                            <div class="asterisk"><a href="#" class="active"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ul class="nk-file-desc">
                                                                    <li class="date">Today</li>
                                                                    <li class="size">4.5 MB</li>
                                                                    <li class="members">3 Members</li>
                                                                </ul>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-plain no-bdr">
                                                                            <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-file -->
                                                        <div class="nk-file-item nk-file">
                                                            <div class="nk-file-info">
                                                                <div class="nk-file-title">
                                                                    <div class="nk-file-icon">
                                                                        <a class="nk-file-icon-link" href="#">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <g>
                                                                                        <rect x="32" y="16" width="28" height="15" rx="2.5" ry="2.5" style="fill:#f29611"></rect>
                                                                                        <path d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z" style="fill:#ffb32c"></path>
                                                                                        <path d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z" style="fill:#f2a222"></path>
                                                                                        <path d="M29.6309,37.36a3.0236,3.0236,0,0,1-.86-2.39A4.3748,4.3748,0,0,1,32.9961,31h.0078a4.36,4.36,0,0,1,4.22,3.9121,3.0532,3.0532,0,0,1-.8545,2.4482A4.4158,4.4158,0,0,1,33.23,38.53c-.0771,0-.1533-.002-.23-.0049A4.519,4.519,0,0,1,29.6309,37.36ZM43.4668,40.1a1,1,0,1,0-.9336,1.77c.7207.38,1.4658,2.126,1.4668,4.39v1.7256a1,1,0,0,0,2,0V46.26C45.999,43.33,45.0049,40.9119,43.4668,40.1ZM40.165,37.3816c-.1445.084-.29.168-.4316.2549a1,1,0,0,0,.5215,1.8535.9887.9887,0,0,0,.52-.1465c.1289-.0781.2607-.1543.3916-.23a4.2311,4.2311,0,0,0,2.1465-2.124.9839.9839,0,0,0,.0313-.1045A3.8411,3.8411,0,0,0,40.5,32.52a1,1,0,1,0-.4922,1.9395,1.8773,1.8773,0,0,1,1.4,1.9092A2.835,2.835,0,0,1,40.165,37.3816ZM36.5,41h-7c-2.5234,0-4.5,2.7822-4.5,6.333V48.5a.8355.8355,0,0,0,.0588.2914.9731.9731,0,0,0,.3508.4946C26.4646,50.2812,29.4614,51,33,51s6.5353-.7187,7.59-1.7139a.9726.9726,0,0,0,.3509-.4949A.8361.8361,0,0,0,41,48.5V47.333C41,43.7822,39.0234,41,36.5,41Z" style="fill:#c67424"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <a href="#" class="title">Projects</a>
                                                                            <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ul class="nk-file-desc">
                                                                    <li class="date">Yesterday</li>
                                                                    <li class="size">35 MB</li>
                                                                    <li class="members">3 Members</li>
                                                                </ul>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-plain no-bdr">
                                                                            <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-file -->
                                                        <div class="nk-file-item nk-file">
                                                            <div class="nk-file-info">
                                                                <div class="nk-file-title">
                                                                    <div class="nk-file-icon">
                                                                        <a class="nk-file-icon-link" href="#">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <g>
                                                                                        <rect x="32" y="16" width="28" height="15" rx="2.5" ry="2.5" style="fill:#f29611"></rect>
                                                                                        <path d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z" style="fill:#ffb32c"></path>
                                                                                        <path d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z" style="fill:#f2a222"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <a href="#" class="title">2019 Projects</a>
                                                                            <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ul class="nk-file-desc">
                                                                    <li class="date">03 May</li>
                                                                    <li class="size">1.2 GB</li>
                                                                    <li class="members">3 Members</li>
                                                                </ul>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-plain no-bdr">
                                                                            <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-file -->
                                                        <div class="nk-file-item nk-file">
                                                            <div class="nk-file-info">
                                                                <div class="nk-file-title">
                                                                    <div class="nk-file-icon">
                                                                        <a class="nk-file-icon-link" href="#">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                    <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                    <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                    <path d="M42,31H30a3.0033,3.0033,0,0,0-3,3V45a3.0033,3.0033,0,0,0,3,3H42a3.0033,3.0033,0,0,0,3-3V34A3.0033,3.0033,0,0,0,42,31ZM29,38h6v3H29Zm8,0h6v3H37Zm6-4v2H37V33h5A1.001,1.001,0,0,1,43,34ZM30,33h5v3H29V34A1.001,1.001,0,0,1,30,33ZM29,45V43h6v3H30A1.001,1.001,0,0,1,29,45Zm13,1H37V43h6v2A1.001,1.001,0,0,1,42,46Z" style="fill:#36c684"></path></svg>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <a href="#" class="title">Update Data.xlsx</a>
                                                                            <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ul class="nk-file-desc">
                                                                    <li class="date">Yesterday</li>
                                                                    <li class="size">235 KB</li>
                                                                    <li class="members">3 Members</li>
                                                                </ul>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-plain no-bdr">
                                                                            <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-file -->
                                                        <div class="nk-file-item nk-file">
                                                            <div class="nk-file-info">
                                                                <div class="nk-file-title">
                                                                    <div class="nk-file-icon">
                                                                        <a class="nk-file-icon-link" href="#">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <g>
                                                                                        <rect x="18" y="16" width="36" height="40" rx="5" ry="5" style="fill:#e3edfc"></rect>
                                                                                        <path d="M19.03,54A4.9835,4.9835,0,0,0,23,56H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                        <rect x="32" y="20" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                        <rect x="32" y="25" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                        <rect x="32" y="30" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                        <rect x="32" y="35" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                        <path d="M35,16.0594h2a0,0,0,0,1,0,0V41a1,1,0,0,1-1,1h0a1,1,0,0,1-1-1V16.0594A0,0,0,0,1,35,16.0594Z" style="fill:#7e95c4"></path>
                                                                                        <path d="M38.0024,40H33.9976A1.9976,1.9976,0,0,0,32,41.9976v2.0047A1.9976,1.9976,0,0,0,33.9976,46h4.0047A1.9976,1.9976,0,0,0,40,44.0024V41.9976A1.9976,1.9976,0,0,0,38.0024,40Zm-.0053,4H34V42h4Z" style="fill:#7e95c4"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <a href="#" class="title">dashlite...1.2.zip</a>
                                                                            <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ul class="nk-file-desc">
                                                                    <li class="date">03 May</li>
                                                                    <li class="size">235 KB</li>
                                                                    <li class="members">3 Members</li>
                                                                </ul>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-plain no-bdr">
                                                                            <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-file -->
                                                        <div class="nk-file-item nk-file">
                                                            <div class="nk-file-info">
                                                                <div class="nk-file-title">
                                                                    <div class="nk-file-icon">
                                                                        <a class="nk-file-icon-link" href="#">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <g>
                                                                                        <rect x="18" y="16" width="36" height="40" rx="5" ry="5" style="fill:#e3edfc"></rect>
                                                                                        <path d="M19.03,54A4.9835,4.9835,0,0,0,23,56H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                        <rect x="32" y="20" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                        <rect x="32" y="25" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                        <rect x="32" y="30" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                        <rect x="32" y="35" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                        <path d="M35,16.0594h2a0,0,0,0,1,0,0V41a1,1,0,0,1-1,1h0a1,1,0,0,1-1-1V16.0594A0,0,0,0,1,35,16.0594Z" style="fill:#7e95c4"></path>
                                                                                        <path d="M38.0024,40H33.9976A1.9976,1.9976,0,0,0,32,41.9976v2.0047A1.9976,1.9976,0,0,0,33.9976,46h4.0047A1.9976,1.9976,0,0,0,40,44.0024V41.9976A1.9976,1.9976,0,0,0,38.0024,40Zm-.0053,4H34V42h4Z" style="fill:#7e95c4"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <a href="#" class="title">covstats...1.0.zip</a>
                                                                            <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ul class="nk-file-desc">
                                                                    <li class="date">01 May</li>
                                                                    <li class="size">235 KB</li>
                                                                    <li class="members">3 Members</li>
                                                                </ul>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-plain no-bdr">
                                                                            <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-file -->
                                                        <div class="nk-file-item nk-file">
                                                            <div class="nk-file-info">
                                                                <div class="nk-file-title">
                                                                    <div class="nk-file-icon">
                                                                        <a class="nk-file-icon-link" href="#">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <g>
                                                                                        <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                        <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                        <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                        <rect x="27" y="31" width="18" height="2" rx="1" ry="1" style="fill:#599def"></rect>
                                                                                        <rect x="27" y="36" width="18" height="2" rx="1" ry="1" style="fill:#599def"></rect>
                                                                                        <rect x="27" y="41" width="18" height="2" rx="1" ry="1" style="fill:#599def"></rect>
                                                                                        <rect x="27" y="46" width="12" height="2" rx="1" ry="1" style="fill:#599def"></rect>
                                                                                    </g>
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <a href="#" class="title">Quotation.doc</a>
                                                                            <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ul class="nk-file-desc">
                                                                    <li class="date">06 Apr</li>
                                                                    <li class="size">23 MB</li>
                                                                    <li class="members">3 Members</li>
                                                                </ul>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-plain no-bdr">
                                                                            <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-file -->
                                                        <div class="nk-file-item nk-file">
                                                            <div class="nk-file-info">
                                                                <div class="nk-file-title">
                                                                    <div class="nk-file-icon">
                                                                        <a class="nk-file-icon-link" href="#">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                    <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                    <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                    <rect x="27" y="31" width="18" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                    <rect x="27" y="35" width="18" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                    <rect x="27" y="39" width="18" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                    <rect x="27" y="43" width="14" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                    <rect x="27" y="47" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect></svg>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <a href="#" class="title">Work-to-do.txt</a>
                                                                            <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ul class="nk-file-desc">
                                                                    <li class="date">02 Apr</li>
                                                                    <li class="size">23 MB</li>
                                                                    <li class="members">3 Members</li>
                                                                </ul>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-plain no-bdr">
                                                                            <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-file -->
                                                        <div class="nk-file-item nk-file">
                                                            <div class="nk-file-info">
                                                                <div class="nk-file-title">
                                                                    <div class="nk-file-icon">
                                                                        <a class="nk-file-icon-link" href="#">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                    <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                    <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                    <path d="M27.2223,43H44.7086s2.325-.2815.7357-1.897l-5.6034-5.4985s-1.5115-1.7913-3.3357.7933L33.56,40.4707a.6887.6887,0,0,1-1.0186.0486l-1.9-1.6393s-1.3291-1.5866-2.4758,0c-.6561.9079-2.0261,2.8489-2.0261,2.8489S25.4268,43,27.2223,43Z" style="fill:#755de0"></path></svg>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <a href="#" class="title">DashLite_Crypto_v1.psd</a>
                                                                            <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ul class="nk-file-desc">
                                                                    <li class="date">02 Apr</li>
                                                                    <li class="size">23 MB</li>
                                                                    <li class="members">3 Members</li>
                                                                </ul>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-plain no-bdr">
                                                                            <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-file -->
                                                    </div>
                                                </div><!-- .nk-files -->
                                            </div><!-- .tab-pane -->
                                            <div class="tab-pane" id="file-group-view">
                                                <div class="nk-files nk-files-view-group">
                                                    <div class="nk-files-head">
                                                        <div class="nk-file-item">
                                                            <div class="nk-file-info">
                                                                <div class="dropdown">
                                                                    <div class="tb-head dropdown-toggle dropdown-indicator-caret" data-toggle="dropdown">Last Opened</div>
                                                                    <div class="dropdown-menu dropdown-menu-xs">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a class="active" href="#"><span>Last Opened</span></a></li>
                                                                            <li><a href="#"><span>Name</span></a></li>
                                                                            <li><a href="#"><span>Size</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-files-head -->
                                                    <div class="nk-files-group">
                                                        <h6 class="title">Folder</h6>
                                                        <div class="nk-files-list">
                                                            <div class="nk-file-item nk-file">
                                                                <div class="nk-file-info">
                                                                    <div class="nk-file-title">
                                                                        <div class="nk-file-icon">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <g>
                                                                                        <rect x="32" y="16" width="28" height="15" rx="2.5" ry="2.5" style="fill:#f29611"></rect>
                                                                                        <path d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z" style="fill:#ffb32c"></path>
                                                                                        <path d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z" style="fill:#f2a222"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="nk-file-name">
                                                                            <div class="nk-file-name-text">
                                                                                <a href="#" class="title">UI Design</a>
                                                                                <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="nk-file-desc">
                                                                        <li class="date">Today</li>
                                                                        <li class="size">4.5 MB</li>
                                                                        <li class="members">3 Members</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="nk-file-actions">
                                                                    <div class="dropdown">
                                                                        <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-plain no-bdr">
                                                                                <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                                <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                                <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                                <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                                <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-file -->
                                                            <div class="nk-file-item nk-file">
                                                                <div class="nk-file-info">
                                                                    <div class="nk-file-title">
                                                                        <div class="nk-file-icon">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <g>
                                                                                        <rect x="32" y="16" width="28" height="15" rx="2.5" ry="2.5" style="fill:#f29611"></rect>
                                                                                        <path d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z" style="fill:#ffb32c"></path>
                                                                                        <path d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z" style="fill:#f2a222"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="nk-file-name">
                                                                            <div class="nk-file-name-text">
                                                                                <a href="#" class="title">Proposal</a>
                                                                                <div class="asterisk"><a href="#" class="active"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="nk-file-desc">
                                                                        <li class="date">Today</li>
                                                                        <li class="size">4.5 MB</li>
                                                                        <li class="members">3 Members</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="nk-file-actions">
                                                                    <div class="dropdown">
                                                                        <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-plain no-bdr">
                                                                                <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                                <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                                <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                                <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                                <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-file -->
                                                            <div class="nk-file-item nk-file">
                                                                <div class="nk-file-info">
                                                                    <div class="nk-file-title">
                                                                        <div class="nk-file-icon">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <g>
                                                                                        <rect x="32" y="16" width="28" height="15" rx="2.5" ry="2.5" style="fill:#f29611"></rect>
                                                                                        <path d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z" style="fill:#ffb32c"></path>
                                                                                        <path d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z" style="fill:#f2a222"></path>
                                                                                        <path d="M29.6309,37.36a3.0236,3.0236,0,0,1-.86-2.39A4.3748,4.3748,0,0,1,32.9961,31h.0078a4.36,4.36,0,0,1,4.22,3.9121,3.0532,3.0532,0,0,1-.8545,2.4482A4.4158,4.4158,0,0,1,33.23,38.53c-.0771,0-.1533-.002-.23-.0049A4.519,4.519,0,0,1,29.6309,37.36ZM43.4668,40.1a1,1,0,1,0-.9336,1.77c.7207.38,1.4658,2.126,1.4668,4.39v1.7256a1,1,0,0,0,2,0V46.26C45.999,43.33,45.0049,40.9119,43.4668,40.1ZM40.165,37.3816c-.1445.084-.29.168-.4316.2549a1,1,0,0,0,.5215,1.8535.9887.9887,0,0,0,.52-.1465c.1289-.0781.2607-.1543.3916-.23a4.2311,4.2311,0,0,0,2.1465-2.124.9839.9839,0,0,0,.0313-.1045A3.8411,3.8411,0,0,0,40.5,32.52a1,1,0,1,0-.4922,1.9395,1.8773,1.8773,0,0,1,1.4,1.9092A2.835,2.835,0,0,1,40.165,37.3816ZM36.5,41h-7c-2.5234,0-4.5,2.7822-4.5,6.333V48.5a.8355.8355,0,0,0,.0588.2914.9731.9731,0,0,0,.3508.4946C26.4646,50.2812,29.4614,51,33,51s6.5353-.7187,7.59-1.7139a.9726.9726,0,0,0,.3509-.4949A.8361.8361,0,0,0,41,48.5V47.333C41,43.7822,39.0234,41,36.5,41Z" style="fill:#c67424"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="nk-file-name">
                                                                            <div class="nk-file-name-text">
                                                                                <a href="#" class="title">Projects</a>
                                                                                <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="nk-file-desc">
                                                                        <li class="date">Today</li>
                                                                        <li class="size">235 KB</li>
                                                                        <li class="members">3 Members</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="nk-file-actions">
                                                                    <div class="dropdown">
                                                                        <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-plain no-bdr">
                                                                                <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                                <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                                <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                                <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                                <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-file -->
                                                            <div class="nk-file-item nk-file">
                                                                <div class="nk-file-info">
                                                                    <div class="nk-file-title">
                                                                        <div class="nk-file-icon">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <g>
                                                                                        <rect x="32" y="16" width="28" height="15" rx="2.5" ry="2.5" style="fill:#f29611"></rect>
                                                                                        <path d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z" style="fill:#ffb32c"></path>
                                                                                        <path d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z" style="fill:#f2a222"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="nk-file-name">
                                                                            <div class="nk-file-name-text">
                                                                                <a href="#" class="title">2019 Projects</a>
                                                                                <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="nk-file-desc">
                                                                        <li class="date">03 May</li>
                                                                        <li class="size">235 KB</li>
                                                                        <li class="members">3 Members</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="nk-file-actions">
                                                                    <div class="dropdown">
                                                                        <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-plain no-bdr">
                                                                                <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                                <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                                <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                                <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                                <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-file -->
                                                        </div>
                                                    </div>
                                                    <div class="nk-files-group">
                                                        <h6 class="title">Files</h6>
                                                        <div class="nk-files-list">
                                                            <div class="nk-file-item nk-file">
                                                                <div class="nk-file-info">
                                                                    <div class="nk-file-title">
                                                                        <div class="nk-file-icon">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                    <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                    <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                    <path d="M42,31H30a3.0033,3.0033,0,0,0-3,3V45a3.0033,3.0033,0,0,0,3,3H42a3.0033,3.0033,0,0,0,3-3V34A3.0033,3.0033,0,0,0,42,31ZM29,38h6v3H29Zm8,0h6v3H37Zm6-4v2H37V33h5A1.001,1.001,0,0,1,43,34ZM30,33h5v3H29V34A1.001,1.001,0,0,1,30,33ZM29,45V43h6v3H30A1.001,1.001,0,0,1,29,45Zm13,1H37V43h6v2A1.001,1.001,0,0,1,42,46Z" style="fill:#36c684"></path></svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="nk-file-name">
                                                                            <div class="nk-file-name-text">
                                                                                <a href="#" class="title">Database.xlsx</a>
                                                                                <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="nk-file-desc">
                                                                        <li class="date">Today</li>
                                                                        <li class="size">235 KB</li>
                                                                        <li class="members">3 Members</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="nk-file-actions">
                                                                    <div class="dropdown">
                                                                        <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-plain no-bdr">
                                                                                <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                                <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                                <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                                <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                                <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-file -->
                                                            <div class="nk-file-item nk-file">
                                                                <div class="nk-file-info">
                                                                    <div class="nk-file-title">
                                                                        <div class="nk-file-icon">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <g>
                                                                                        <rect x="18" y="16" width="36" height="40" rx="5" ry="5" style="fill:#e3edfc"></rect>
                                                                                        <path d="M19.03,54A4.9835,4.9835,0,0,0,23,56H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                        <rect x="32" y="20" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                        <rect x="32" y="25" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                        <rect x="32" y="30" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                        <rect x="32" y="35" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                        <path d="M35,16.0594h2a0,0,0,0,1,0,0V41a1,1,0,0,1-1,1h0a1,1,0,0,1-1-1V16.0594A0,0,0,0,1,35,16.0594Z" style="fill:#7e95c4"></path>
                                                                                        <path d="M38.0024,40H33.9976A1.9976,1.9976,0,0,0,32,41.9976v2.0047A1.9976,1.9976,0,0,0,33.9976,46h4.0047A1.9976,1.9976,0,0,0,40,44.0024V41.9976A1.9976,1.9976,0,0,0,38.0024,40Zm-.0053,4H34V42h4Z" style="fill:#7e95c4"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="nk-file-name">
                                                                            <div class="nk-file-name-text">
                                                                                <a href="#" class="title">dashlite...1.2.zip</a>
                                                                                <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="nk-file-desc">
                                                                        <li class="date">03 May</li>
                                                                        <li class="size">235 KB</li>
                                                                        <li class="members">3 Members</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="nk-file-actions">
                                                                    <div class="dropdown">
                                                                        <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-plain no-bdr">
                                                                                <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                                <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                                <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                                <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                                <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-file -->
                                                            <div class="nk-file-item nk-file">
                                                                <div class="nk-file-info">
                                                                    <div class="nk-file-title">
                                                                        <div class="nk-file-icon">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <g>
                                                                                        <rect x="18" y="16" width="36" height="40" rx="5" ry="5" style="fill:#e3edfc"></rect>
                                                                                        <path d="M19.03,54A4.9835,4.9835,0,0,0,23,56H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                        <rect x="32" y="20" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                        <rect x="32" y="25" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                        <rect x="32" y="30" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                        <rect x="32" y="35" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                        <path d="M35,16.0594h2a0,0,0,0,1,0,0V41a1,1,0,0,1-1,1h0a1,1,0,0,1-1-1V16.0594A0,0,0,0,1,35,16.0594Z" style="fill:#7e95c4"></path>
                                                                                        <path d="M38.0024,40H33.9976A1.9976,1.9976,0,0,0,32,41.9976v2.0047A1.9976,1.9976,0,0,0,33.9976,46h4.0047A1.9976,1.9976,0,0,0,40,44.0024V41.9976A1.9976,1.9976,0,0,0,38.0024,40Zm-.0053,4H34V42h4Z" style="fill:#7e95c4"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="nk-file-name">
                                                                            <div class="nk-file-name-text">
                                                                                <a href="#" class="title">covstats.zip</a>
                                                                                <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="nk-file-desc">
                                                                        <li class="date">01 May</li>
                                                                        <li class="size">235 KB</li>
                                                                        <li class="members">3 Members</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="nk-file-actions">
                                                                    <div class="dropdown">
                                                                        <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-plain no-bdr">
                                                                                <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                                <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                                <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                                <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                                <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-file -->
                                                            <div class="nk-file-item nk-file">
                                                                <div class="nk-file-info">
                                                                    <div class="nk-file-title">
                                                                        <div class="nk-file-icon">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <g>
                                                                                        <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                        <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                        <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                        <rect x="27" y="31" width="18" height="2" rx="1" ry="1" style="fill:#599def"></rect>
                                                                                        <rect x="27" y="36" width="18" height="2" rx="1" ry="1" style="fill:#599def"></rect>
                                                                                        <rect x="27" y="41" width="18" height="2" rx="1" ry="1" style="fill:#599def"></rect>
                                                                                        <rect x="27" y="46" width="12" height="2" rx="1" ry="1" style="fill:#599def"></rect>
                                                                                    </g>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="nk-file-name">
                                                                            <div class="nk-file-name-text">
                                                                                <a href="#" class="title">Price List.doc</a>
                                                                                <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="nk-file-desc">
                                                                        <li class="date">25 Apr</li>
                                                                        <li class="size">23 MB</li>
                                                                        <li class="members">3 Members</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="nk-file-actions">
                                                                    <div class="dropdown">
                                                                        <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-plain no-bdr">
                                                                                <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                                <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                                <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                                <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                                <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-file -->
                                                            <div class="nk-file-item nk-file">
                                                                <div class="nk-file-info">
                                                                    <div class="nk-file-title">
                                                                        <div class="nk-file-icon">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <g>
                                                                                        <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                        <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                        <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                        <rect x="27" y="31" width="18" height="2" rx="1" ry="1" style="fill:#599def"></rect>
                                                                                        <rect x="27" y="36" width="18" height="2" rx="1" ry="1" style="fill:#599def"></rect>
                                                                                        <rect x="27" y="41" width="18" height="2" rx="1" ry="1" style="fill:#599def"></rect>
                                                                                        <rect x="27" y="46" width="12" height="2" rx="1" ry="1" style="fill:#599def"></rect>
                                                                                    </g>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="nk-file-name">
                                                                            <div class="nk-file-name-text">
                                                                                <a href="#" class="title">Quotation.doc</a>
                                                                                <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="nk-file-desc">
                                                                        <li class="date">06 Apr</li>
                                                                        <li class="size">23 MB</li>
                                                                        <li class="members">3 Members</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="nk-file-actions">
                                                                    <div class="dropdown">
                                                                        <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-plain no-bdr">
                                                                                <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                                <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                                <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                                <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                                <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-file -->
                                                            <div class="nk-file-item nk-file">
                                                                <div class="nk-file-info">
                                                                    <div class="nk-file-title">
                                                                        <div class="nk-file-icon">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                    <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                    <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                    <rect x="27" y="31" width="18" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                    <rect x="27" y="35" width="18" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                    <rect x="27" y="39" width="18" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                    <rect x="27" y="43" width="14" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                    <rect x="27" y="47" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect></svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="nk-file-name">
                                                                            <div class="nk-file-name-text">
                                                                                <a href="#" class="title">Work-to-do.txt</a>
                                                                                <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="nk-file-desc">
                                                                        <li class="date">02 Apr</li>
                                                                        <li class="size">23 MB</li>
                                                                        <li class="members">3 Members</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="nk-file-actions">
                                                                    <div class="dropdown">
                                                                        <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-plain no-bdr">
                                                                                <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                                <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                                <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                                <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                                <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-file -->
                                                            <div class="nk-file-item nk-file">
                                                                <div class="nk-file-info">
                                                                    <div class="nk-file-title">
                                                                        <div class="nk-file-icon">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                    <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                    <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                    <path d="M27.2223,43H44.7086s2.325-.2815.7357-1.897l-5.6034-5.4985s-1.5115-1.7913-3.3357.7933L33.56,40.4707a.6887.6887,0,0,1-1.0186.0486l-1.9-1.6393s-1.3291-1.5866-2.4758,0c-.6561.9079-2.0261,2.8489-2.0261,2.8489S25.4268,43,27.2223,43Z" style="fill:#755de0"></path></svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="nk-file-name">
                                                                            <div class="nk-file-name-text">
                                                                                <a href="#" class="title">DashLite_v1.psd</a>
                                                                                <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="nk-file-desc">
                                                                        <li class="date">02 Apr</li>
                                                                        <li class="size">23 MB</li>
                                                                        <li class="members">3 Members</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="nk-file-actions">
                                                                    <div class="dropdown">
                                                                        <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-plain no-bdr">
                                                                                <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                                <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                                <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                                <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                                <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-file -->
                                                            <div class="nk-file-item nk-file">
                                                                <div class="nk-file-info">
                                                                    <div class="nk-file-title">
                                                                        <div class="nk-file-icon">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                    <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                    <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                    <path d="M46,46.5v-13A3.5042,3.5042,0,0,0,42.5,30h-13A3.5042,3.5042,0,0,0,26,33.5v13A3.5042,3.5042,0,0,0,29.5,50h13A3.5042,3.5042,0,0,0,46,46.5ZM40,45v3H37V45Zm-3-2V37h7v6Zm0-8V32h3v3Zm-2-3v3H32V32Zm0,5v6H28V37Zm0,8v3H32V45Zm7.5,3H42V45h2v1.5A1.5016,1.5016,0,0,1,42.5,48ZM44,33.5V35H42V32h.5A1.5016,1.5016,0,0,1,44,33.5ZM29.5,32H30v3H28V33.5A1.5016,1.5016,0,0,1,29.5,32ZM28,46.5V45h2v3h-.5A1.5016,1.5016,0,0,1,28,46.5Z" style="fill:#f74141"></path></svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="nk-file-name">
                                                                            <div class="nk-file-name-text">
                                                                                <a href="#" class="title">New Movie.mp4</a>
                                                                                <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="nk-file-desc">
                                                                        <li class="date">02 Apr</li>
                                                                        <li class="size">23 MB</li>
                                                                        <li class="members">3 Members</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="nk-file-actions">
                                                                    <div class="dropdown">
                                                                        <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-plain no-bdr">
                                                                                <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                                <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                                <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                                <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                                <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-file -->
                                                            <div class="nk-file-item nk-file">
                                                                <div class="nk-file-info">
                                                                    <div class="nk-file-title">
                                                                        <div class="nk-file-icon">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                    <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                    <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                    <path d="M42,31H30a3.0033,3.0033,0,0,0-3,3V45a3.0033,3.0033,0,0,0,3,3H42a3.0033,3.0033,0,0,0,3-3V34A3.0033,3.0033,0,0,0,42,31ZM29,38h6v3H29Zm8,0h6v3H37Zm6-4v2H37V33h5A1.001,1.001,0,0,1,43,34ZM30,33h5v3H29V34A1.001,1.001,0,0,1,30,33ZM29,45V43h6v3H30A1.001,1.001,0,0,1,29,45Zm13,1H37V43h6v2A1.001,1.001,0,0,1,42,46Z" style="fill:#36c684"></path></svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="nk-file-name">
                                                                            <div class="nk-file-name-text">
                                                                                <a href="#" class="title">Project List.xls</a>
                                                                                <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="nk-file-desc">
                                                                        <li class="date">02 Apr</li>
                                                                        <li class="size">23 MB</li>
                                                                        <li class="members">3 Members</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="nk-file-actions">
                                                                    <div class="dropdown">
                                                                        <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-plain no-bdr">
                                                                                <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                                <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                                <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                                <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                                <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-file -->
                                                            <div class="nk-file-item nk-file">
                                                                <div class="nk-file-info">
                                                                    <div class="nk-file-title">
                                                                        <div class="nk-file-icon">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                    <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                    <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                    <path d="M44.1405,46H27.8595A1.86,1.86,0,0,1,26,44.1405V34.8595A1.86,1.86,0,0,1,27.8595,33H44.14A1.86,1.86,0,0,1,46,34.86v9.2808A1.86,1.86,0,0,1,44.1405,46ZM29.1454,44H42.8546A1.1454,1.1454,0,0,0,44,42.8546V36.1454A1.1454,1.1454,0,0,0,42.8546,35H29.1454A1.1454,1.1454,0,0,0,28,36.1454v6.7093A1.1454,1.1454,0,0,0,29.1454,44Z" style="fill:#f25168"></path>
                                                                                    <path d="M36.4218,34.268a.7112.7112,0,0,1-.5048-.2093l-2.1431-2.1428a.7143.7143,0,0,1,1.01-1.01l2.1428,2.1431a.7142.7142,0,0,1-.5051,1.2192Z" style="fill:#f25168"></path>
                                                                                    <path d="M36.4218,34.268a.7142.7142,0,0,1-.5048-1.2192L38.06,30.9057a.7141.7141,0,0,1,1.01,1.01l-2.1426,2.1428A.7113.7113,0,0,1,36.4218,34.268Z" style="fill:#f25168"></path>
                                                                                    <path d="M32.1356,49.268a.7054.7054,0,0,1-.3665-.102.7145.7145,0,0,1-.2451-.98l2.1431-3.5713a.7142.7142,0,0,1,1.2247.735l-2.1426,3.5711A.7144.7144,0,0,1,32.1356,49.268Z" style="fill:#f25168"></path>
                                                                                    <path d="M40.7083,49.268a.7138.7138,0,0,1-.6129-.3463L37.9526,45.35a.7143.7143,0,0,1,1.225-.735L41.32,48.1866a.7137.7137,0,0,1-.6121,1.0814Z" style="fill:#f25168"></path>
                                                                                    <path d="M35.12,37H30.9a.5007.5007,0,1,1,0-1h4.22a.5007.5007,0,1,1,0,1Z" style="fill:#f25168"></path>
                                                                                    <path d="M41.9758,43H37.5471a.5056.5056,0,1,1,0-1.0065h4.4286a.5056.5056,0,1,1,0,1.0065Z" style="fill:#f25168"></path>
                                                                                    <path d="M38.14,40H33.9775a.5.5,0,1,1,0-1H38.14a.5.5,0,1,1,0,1Z" style="fill:#f25168"></path></svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="nk-file-name">
                                                                            <div class="nk-file-name-text">
                                                                                <a href="#" class="title">Presentation.ppt</a>
                                                                                <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="nk-file-desc">
                                                                        <li class="date">02 Apr</li>
                                                                        <li class="size">23 MB</li>
                                                                        <li class="members">3 Members</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="nk-file-actions">
                                                                    <div class="dropdown">
                                                                        <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-plain no-bdr">
                                                                                <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                                <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                                <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                                <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                                <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-file -->
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-files -->
                                            </div><!-- .tab-pane -->
                                            <div class="tab-pane" id="file-list-view">
                                                <div class="nk-files nk-files-view-list">
                                                    <div class="nk-files-head">
                                                        <div class="nk-file-item">
                                                            <div class="nk-file-info">
                                                                <div class="tb-head dropdown-toggle dropdown-indicator-caret" data-toggle="dropdown">Name</div>
                                                                <div class="dropdown-menu dropdown-menu-xs">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li class="opt-head"><span>ORDER BY</span></li>
                                                                        <li><a href="#"><span>Descending</span></a></li>
                                                                        <li><a href="#"><span>Ascending</span></a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tb-head"></div>
                                                            </div>
                                                            <div class="nk-file-meta">
                                                                <div class="dropdown">
                                                                    <div class="tb-head dropdown-toggle dropdown-indicator-down" data-toggle="dropdown">Last Opened</div>
                                                                    <div class="dropdown-menu dropdown-menu-xs">
                                                                        <ul class="link-list-opt ui-colored no-bdr">
                                                                            <li class="opt-head"><span>ORDER BY</span></li>
                                                                            <li><a class="active" href="#"><span>Descending</span></a></li>
                                                                            <li><a href="#"><span>Ascending</span></a></li>
                                                                            <li class="divider"></li>
                                                                            <li class="opt-head"><span>SHOW</span></li>
                                                                            <li><a class="active" href="#"><span>Last Opened</span></a></li>
                                                                            <li><a href="#"><span>Name</span></a></li>
                                                                            <li><a href="#"><span>Size</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-file-members">
                                                                <div class="tb-head">Members</div>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-files-head -->
                                                    <div class="nk-files-list">
                                                        <div class="nk-file-item nk-file">
                                                            <div class="nk-file-info">
                                                                <div class="nk-file-title">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="file-check-n1">
                                                                        <label class="custom-control-label" for="file-check-n1"></label>
                                                                    </div>
                                                                    <div class="nk-file-icon">
                                                                        <span class="nk-file-icon-type">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                <g>
                                                                                    <rect x="32" y="16" width="28" height="15" rx="2.5" ry="2.5" style="fill:#f29611"></rect>
                                                                                    <path d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z" style="fill:#ffb32c"></path>
                                                                                    <path d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z" style="fill:#f2a222"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <a href="#" class="title">UI/UX Design</a>
                                                                            <div class="nk-file-star asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-file-meta">
                                                                <div class="tb-lead">Today, 08:29 AM</div>
                                                            </div>
                                                            <div class="nk-file-members">
                                                                <div class="tb-lead">Only Me</div>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-plain no-bdr">
                                                                            <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-file -->
                                                        <div class="nk-file-item nk-file">
                                                            <div class="nk-file-info">
                                                                <div class="nk-file-title">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="file-check-n2">
                                                                        <label class="custom-control-label" for="file-check-n2"></label>
                                                                    </div>
                                                                    <div class="nk-file-icon">
                                                                        <span class="nk-file-icon-type">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                <g>
                                                                                    <rect x="32" y="16" width="28" height="15" rx="2.5" ry="2.5" style="fill:#f29611"></rect>
                                                                                    <path d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z" style="fill:#ffb32c"></path>
                                                                                    <path d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z" style="fill:#f2a222"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <a href="#" class="title">UI Design</a>
                                                                            <div class="nk-file-star asterisk"><a href="#" class="active"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-file-meta">
                                                                <div class="tb-lead">Today, 11:19 AM</div>
                                                            </div>
                                                            <div class="nk-file-members">
                                                                <div class="tb-lead">Only Me</div>
                                                                <div class="tb-shared"><em class="ni ni-link" data-toggle="tooltip" data-placement="left" title="" data-original-title="People with the link can view"></em></div>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-plain no-bdr">
                                                                            <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-file -->
                                                        <div class="nk-file-item nk-file">
                                                            <div class="nk-file-info">
                                                                <div class="nk-file-title">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="file-check-n3">
                                                                        <label class="custom-control-label" for="file-check-n3"></label>
                                                                    </div>
                                                                    <div class="nk-file-icon">
                                                                        <span class="nk-file-icon-type">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                <path d="M42,31H30a3.0033,3.0033,0,0,0-3,3V45a3.0033,3.0033,0,0,0,3,3H42a3.0033,3.0033,0,0,0,3-3V34A3.0033,3.0033,0,0,0,42,31ZM29,38h6v3H29Zm8,0h6v3H37Zm6-4v2H37V33h5A1.001,1.001,0,0,1,43,34ZM30,33h5v3H29V34A1.001,1.001,0,0,1,30,33ZM29,45V43h6v3H30A1.001,1.001,0,0,1,29,45Zm13,1H37V43h6v2A1.001,1.001,0,0,1,42,46Z" style="fill:#36c684"></path></svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <a href="#" class="title">Update Data.xlsx</a>
                                                                            <div class="nk-file-star asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-file-meta">
                                                                <div class="tb-lead">Today, 10:38 PM</div>
                                                                <div class="tb-sub">by Abu Bin Ishityak</div>
                                                            </div>
                                                            <div class="nk-file-members">
                                                                <div class="user-avatar-group">
                                                                    <div class="user-avatar xs">
                                                                        <img src="./images/avatar/b-sm.jpg" alt="">
                                                                    </div>
                                                                    <div class="user-avatar xs bg-purple">
                                                                        <span>IH</span>
                                                                    </div>
                                                                    <div class="user-avatar xs bg-pink">
                                                                        <span>AB</span>
                                                                    </div>
                                                                    <div class="user-avatar xs bg-light">
                                                                        <span>+2</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-plain no-bdr">
                                                                            <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-file -->
                                                        <div class="nk-file-item nk-file">
                                                            <div class="nk-file-info">
                                                                <div class="nk-file-title">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="file-check-n4">
                                                                        <label class="custom-control-label" for="file-check-n4"></label>
                                                                    </div>
                                                                    <div class="nk-file-icon">
                                                                        <span class="nk-file-icon-type">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                <g>
                                                                                    <rect x="18" y="16" width="36" height="40" rx="5" ry="5" style="fill:#e3edfc"></rect>
                                                                                    <path d="M19.03,54A4.9835,4.9835,0,0,0,23,56H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                    <rect x="32" y="20" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                    <rect x="32" y="25" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                    <rect x="32" y="30" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                    <rect x="32" y="35" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4"></rect>
                                                                                    <path d="M35,16.0594h2a0,0,0,0,1,0,0V41a1,1,0,0,1-1,1h0a1,1,0,0,1-1-1V16.0594A0,0,0,0,1,35,16.0594Z" style="fill:#7e95c4"></path>
                                                                                    <path d="M38.0024,40H33.9976A1.9976,1.9976,0,0,0,32,41.9976v2.0047A1.9976,1.9976,0,0,0,33.9976,46h4.0047A1.9976,1.9976,0,0,0,40,44.0024V41.9976A1.9976,1.9976,0,0,0,38.0024,40Zm-.0053,4H34V42h4Z" style="fill:#7e95c4"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <a href="#" class="title">dashlite-package-v1.2.zip</a>
                                                                            <div class="nk-file-star asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-file-meta">
                                                                <div class="tb-lead">03 May, 08:29 AM</div>
                                                            </div>
                                                            <div class="nk-file-members">
                                                                <div class="tb-lead">Only Me</div>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-plain no-bdr">
                                                                            <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-file -->
                                                        <div class="nk-file-item nk-file">
                                                            <div class="nk-file-info">
                                                                <div class="nk-file-title">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="file-check-n6">
                                                                        <label class="custom-control-label" for="file-check-n6"></label>
                                                                    </div>
                                                                    <div class="nk-file-icon">
                                                                        <span class="nk-file-icon-type">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                <g>
                                                                                    <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                    <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                    <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                    <rect x="27" y="31" width="18" height="2" rx="1" ry="1" style="fill:#599def"></rect>
                                                                                    <rect x="27" y="36" width="18" height="2" rx="1" ry="1" style="fill:#599def"></rect>
                                                                                    <rect x="27" y="41" width="18" height="2" rx="1" ry="1" style="fill:#599def"></rect>
                                                                                    <rect x="27" y="46" width="12" height="2" rx="1" ry="1" style="fill:#599def"></rect>
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <a href="#" class="title">Price-Update.doc</a>
                                                                            <div class="nk-file-star asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-file-meta">
                                                                <div class="tb-lead">25 Apr, 01:21 AM</div>
                                                            </div>
                                                            <div class="nk-file-members">
                                                                <div class="tb-lead">Only Me</div>
                                                                <div class="tb-shared"><em class="ni ni-link" data-toggle="tooltip" data-placement="left" title="" data-original-title="People with the link can view"></em></div>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-plain no-bdr">
                                                                            <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-file -->
                                                        <div class="nk-file-item nk-file">
                                                            <div class="nk-file-info">
                                                                <div class="nk-file-title">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="file-check-n7">
                                                                        <label class="custom-control-label" for="file-check-n7"></label>
                                                                    </div>
                                                                    <div class="nk-file-icon">
                                                                        <span class="nk-file-icon-type">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                <g>
                                                                                    <rect x="32" y="16" width="28" height="15" rx="2.5" ry="2.5" style="fill:#f29611"></rect>
                                                                                    <path d="M59.7778,61H12.2222A6.4215,6.4215,0,0,1,6,54.3962V17.6038A6.4215,6.4215,0,0,1,12.2222,11H30.6977a4.6714,4.6714,0,0,1,4.1128,2.5644L38,24H59.7778A5.91,5.91,0,0,1,66,30V54.3962A6.4215,6.4215,0,0,1,59.7778,61Z" style="fill:#ffb32c"></path>
                                                                                    <path d="M8.015,59c2.169,2.3827,4.6976,2.0161,6.195,2H58.7806a6.2768,6.2768,0,0,0,5.2061-2Z" style="fill:#f2a222"></path>
                                                                                    <path d="M29.6309,37.36a3.0236,3.0236,0,0,1-.86-2.39A4.3748,4.3748,0,0,1,32.9961,31h.0078a4.36,4.36,0,0,1,4.22,3.9121,3.0532,3.0532,0,0,1-.8545,2.4482A4.4158,4.4158,0,0,1,33.23,38.53c-.0771,0-.1533-.002-.23-.0049A4.519,4.519,0,0,1,29.6309,37.36ZM43.4668,40.1a1,1,0,1,0-.9336,1.77c.7207.38,1.4658,2.126,1.4668,4.39v1.7256a1,1,0,0,0,2,0V46.26C45.999,43.33,45.0049,40.9119,43.4668,40.1ZM40.165,37.3816c-.1445.084-.29.168-.4316.2549a1,1,0,0,0,.5215,1.8535.9887.9887,0,0,0,.52-.1465c.1289-.0781.2607-.1543.3916-.23a4.2311,4.2311,0,0,0,2.1465-2.124.9839.9839,0,0,0,.0313-.1045A3.8411,3.8411,0,0,0,40.5,32.52a1,1,0,1,0-.4922,1.9395,1.8773,1.8773,0,0,1,1.4,1.9092A2.835,2.835,0,0,1,40.165,37.3816ZM36.5,41h-7c-2.5234,0-4.5,2.7822-4.5,6.333V48.5a.8355.8355,0,0,0,.0588.2914.9731.9731,0,0,0,.3508.4946C26.4646,50.2812,29.4614,51,33,51s6.5353-.7187,7.59-1.7139a.9726.9726,0,0,0,.3509-.4949A.8361.8361,0,0,0,41,48.5V47.333C41,43.7822,39.0234,41,36.5,41Z" style="fill:#c67424"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <a href="#" class="title">Projects</a>
                                                                            <div class="nk-file-star asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-file-meta">
                                                                <div class="tb-lead">20 Apr, 03:32 AM</div>
                                                                <div class="tb-sub">by Iliash Hossain</div>
                                                            </div>
                                                            <div class="nk-file-members">
                                                                <div class="user-avatar-group">
                                                                    <div class="user-avatar xs bg-pink">
                                                                        <span>AB</span>
                                                                    </div>
                                                                    <div class="user-avatar xs bg-purple">
                                                                        <span>IH</span>
                                                                    </div>
                                                                    <div class="user-avatar xs">
                                                                        <img src="./images/avatar/b-sm.jpg" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-plain no-bdr">
                                                                            <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-file -->
                                                        <div class="nk-file-item nk-file">
                                                            <div class="nk-file-info">
                                                                <div class="nk-file-title">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="file-check-n8">
                                                                        <label class="custom-control-label" for="file-check-n8"></label>
                                                                    </div>
                                                                    <div class="nk-file-icon">
                                                                        <span class="nk-file-icon-type">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                <g>
                                                                                    <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                    <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                    <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                    <rect x="27" y="31" width="18" height="2" rx="1" ry="1" style="fill:#599def"></rect>
                                                                                    <rect x="27" y="36" width="18" height="2" rx="1" ry="1" style="fill:#599def"></rect>
                                                                                    <rect x="27" y="41" width="18" height="2" rx="1" ry="1" style="fill:#599def"></rect>
                                                                                    <rect x="27" y="46" width="12" height="2" rx="1" ry="1" style="fill:#599def"></rect>
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <a href="#" class="title">Quotation.doc</a>
                                                                            <div class="nk-file-star asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-file-meta">
                                                                <div class="tb-lead">06 Apr, 11:56 PM</div>
                                                            </div>
                                                            <div class="nk-file-members">
                                                                <div class="tb-lead">Only Me</div>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-plain no-bdr">
                                                                            <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-file -->
                                                        <div class="nk-file-item nk-file">
                                                            <div class="nk-file-info">
                                                                <div class="nk-file-title">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="file-check-n11">
                                                                        <label class="custom-control-label" for="file-check-n11"></label>
                                                                    </div>
                                                                    <div class="nk-file-icon">
                                                                        <span class="nk-file-icon-type">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                <path d="M27.2223,43H44.7086s2.325-.2815.7357-1.897l-5.6034-5.4985s-1.5115-1.7913-3.3357.7933L33.56,40.4707a.6887.6887,0,0,1-1.0186.0486l-1.9-1.6393s-1.3291-1.5866-2.4758,0c-.6561.9079-2.0261,2.8489-2.0261,2.8489S25.4268,43,27.2223,43Z" style="fill:#755de0"></path></svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <a href="#" class="title">DashLite_Crypto_v1.psd</a>
                                                                            <div class="nk-file-star asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-file-meta">
                                                                <div class="tb-lead">25 Mar, 04:47 PM</div>
                                                            </div>
                                                            <div class="nk-file-members">
                                                                <div class="tb-lead">Only Me</div>
                                                                <div class="tb-shared"><em class="ni ni-link" data-toggle="tooltip" data-placement="left" title="" data-original-title="People with the link can view"></em></div>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-plain no-bdr">
                                                                            <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-file -->
                                                        <div class="nk-file-item nk-file">
                                                            <div class="nk-file-info">
                                                                <div class="nk-file-title">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="file-check-n12">
                                                                        <label class="custom-control-label" for="file-check-n12"></label>
                                                                    </div>
                                                                    <div class="nk-file-icon">
                                                                        <span class="nk-file-icon-type">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                <path d="M46,46.5v-13A3.5042,3.5042,0,0,0,42.5,30h-13A3.5042,3.5042,0,0,0,26,33.5v13A3.5042,3.5042,0,0,0,29.5,50h13A3.5042,3.5042,0,0,0,46,46.5ZM40,45v3H37V45Zm-3-2V37h7v6Zm0-8V32h3v3Zm-2-3v3H32V32Zm0,5v6H28V37Zm0,8v3H32V45Zm7.5,3H42V45h2v1.5A1.5016,1.5016,0,0,1,42.5,48ZM44,33.5V35H42V32h.5A1.5016,1.5016,0,0,1,44,33.5ZM29.5,32H30v3H28V33.5A1.5016,1.5016,0,0,1,29.5,32ZM28,46.5V45h2v3h-.5A1.5016,1.5016,0,0,1,28,46.5Z" style="fill:#f74141"></path></svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <a href="#" class="title">New Movie 2020.mp4</a>
                                                                            <div class="nk-file-star asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-file-meta">
                                                                <div class="tb-lead">19 Mar, 06:29 PM</div>
                                                            </div>
                                                            <div class="nk-file-members">
                                                                <div class="tb-lead">Only Me</div>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-plain no-bdr">
                                                                            <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-file -->
                                                        <div class="nk-file-item nk-file">
                                                            <div class="nk-file-info">
                                                                <div class="nk-file-title">
                                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                        <input type="checkbox" class="custom-control-input" id="file-check-n14">
                                                                        <label class="custom-control-label" for="file-check-n14"></label>
                                                                    </div>
                                                                    <div class="nk-file-icon">
                                                                        <span class="nk-file-icon-type">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                <path d="M44.1405,46H27.8595A1.86,1.86,0,0,1,26,44.1405V34.8595A1.86,1.86,0,0,1,27.8595,33H44.14A1.86,1.86,0,0,1,46,34.86v9.2808A1.86,1.86,0,0,1,44.1405,46ZM29.1454,44H42.8546A1.1454,1.1454,0,0,0,44,42.8546V36.1454A1.1454,1.1454,0,0,0,42.8546,35H29.1454A1.1454,1.1454,0,0,0,28,36.1454v6.7093A1.1454,1.1454,0,0,0,29.1454,44Z" style="fill:#f25168"></path>
                                                                                <path d="M36.4218,34.268a.7112.7112,0,0,1-.5048-.2093l-2.1431-2.1428a.7143.7143,0,0,1,1.01-1.01l2.1428,2.1431a.7142.7142,0,0,1-.5051,1.2192Z" style="fill:#f25168"></path>
                                                                                <path d="M36.4218,34.268a.7142.7142,0,0,1-.5048-1.2192L38.06,30.9057a.7141.7141,0,0,1,1.01,1.01l-2.1426,2.1428A.7113.7113,0,0,1,36.4218,34.268Z" style="fill:#f25168"></path>
                                                                                <path d="M32.1356,49.268a.7054.7054,0,0,1-.3665-.102.7145.7145,0,0,1-.2451-.98l2.1431-3.5713a.7142.7142,0,0,1,1.2247.735l-2.1426,3.5711A.7144.7144,0,0,1,32.1356,49.268Z" style="fill:#f25168"></path>
                                                                                <path d="M40.7083,49.268a.7138.7138,0,0,1-.6129-.3463L37.9526,45.35a.7143.7143,0,0,1,1.225-.735L41.32,48.1866a.7137.7137,0,0,1-.6121,1.0814Z" style="fill:#f25168"></path>
                                                                                <path d="M35.12,37H30.9a.5007.5007,0,1,1,0-1h4.22a.5007.5007,0,1,1,0,1Z" style="fill:#f25168"></path>
                                                                                <path d="M41.9758,43H37.5471a.5056.5056,0,1,1,0-1.0065h4.4286a.5056.5056,0,1,1,0,1.0065Z" style="fill:#f25168"></path>
                                                                                <path d="M38.14,40H33.9775a.5.5,0,1,1,0-1H38.14a.5.5,0,1,1,0,1Z" style="fill:#f25168"></path></svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="nk-file-name">
                                                                        <div class="nk-file-name-text">
                                                                            <a href="#" class="title">2019 Presentation.ppt</a>
                                                                            <div class="nk-file-star asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-file-meta">
                                                                <div class="tb-lead">12 Jan, 04:47 PM</div>
                                                            </div>
                                                            <div class="nk-file-members">
                                                                <div class="tb-lead">Only Me</div>
                                                            </div>
                                                            <div class="nk-file-actions">
                                                                <div class="dropdown">
                                                                    <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-plain no-bdr">
                                                                            <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                            <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                            <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                            <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                            <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-file -->
                                                    </div>
                                                </div><!-- .nk-files -->
                                            </div><!-- .tab-pane -->
                                        </div><!-- .tab-content -->
                                    </div><!-- .nk-block -->
                                </div><!-- .nk-fmg-body-content -->
                            </div><!-- .nk-fmg-body -->
                        </div><!-- .nk-fmg -->
                    </div>
                    <!-- footer @s -->
                    <div class="nk-footer">
                        <div class="container wide-xl">
                            <div class="nk-footer-wrap g-2">
                                <div class="nk-footer-copyright"> © 2021 Share Work. 
                                </div>
                                <div class="nk-footer-links">
                                    <ul class="nav nav-sm">
                                        <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer @e -->
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')

@endpush