@extends('layouts.customers')

@section('body', 'npc-subscription has-aside has-touch nk-nio-theme')

@section('content')

    <div class="nk-content ">
        <div class="container wide-xl">
            <div class="nk-content-inner">
                
                @include ('customers.includes.nav')

                <div class="nk-content-body">
                    <div class="nk-content-wrap">
                        <div class="nk-block-head nk-block-head-lg">
                            <div class="nk-block-head-sub"><span>Manage Subscription</span></div>
                            <div class="nk-block-between-md g-4">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title fw-normal">My Subscriptions</h2>
                                    <div class="nk-block-des">
                                        <p>Here is list of package/product that you have subscribed. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="nk-block-tools gx-3">
                                        <li class="order-md-last"><a href="html/subscription/pricing.html" class="btn btn-white btn-dim btn-outline-primary"><span>View Pricing</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="card card-bordered sp-plan">
                                <div class="row no-gutters">
                                    <div class="col-md-8">
                                        <div class="sp-plan-info card-inner">
                                            <div class="row gx-0 gy-3">
                                                <div class="col-xl-9 col-sm-8">
                                                    <div class="sp-plan-name">
                                                        <h6 class="title"><a href="html/subscription/subscriptions-detail.html">Enterprise Plan <span class="badge badge-success badge-pill">Active</span></a></h6>
                                                        <p>Subscription ID: <span class="text-base">100394949</span></p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-sm-4">
                                                    <div class="sp-plan-opt">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" class="custom-control-input" id="auto-plan-p1" checked="">
                                                            <label class="custom-control-label text-soft" for="auto-plan-p1">Auto Renew</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .sp-plan-info -->
                                        <div class="sp-plan-desc card-inner">
                                            <ul class="row gx-1">
                                                <li class="col-6 col-lg-3">
                                                    <p><span class="text-soft">Started On</span> Oct 12, 2018</p>
                                                </li>
                                                <li class="col-6 col-lg-3">
                                                    <p><span class="text-soft">Recuring</span> Yes</p>
                                                </li>
                                                <li class="col-6 col-lg-3">
                                                    <p><span class="text-soft">Price</span> $599.00</p>
                                                </li>
                                                <li class="col-6 col-lg-3">
                                                    <p><span class="text-soft">Access</span> Unlimited</p>
                                                </li>
                                            </ul>
                                        </div><!-- .sp-plan-desc -->
                                    </div><!-- .col -->
                                    <div class="col-md-4">
                                        <div class="sp-plan-action card-inner">
                                            <div class="sp-plan-btn">
                                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#subscription-change"><span>Change Plan</span></a>
                                            </div>
                                            <div class="sp-plan-note text-md-center">
                                                <p>Next Billing on <span>Oct 11, 2020</span></p>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .sp-plan -->
                            <div class="card card-bordered sp-plan">
                                <div class="row no-gutters">
                                    <div class="col-md-8">
                                        <div class="sp-plan-info card-inner">
                                            <div class="row gx-0 gy-3">
                                                <div class="col-xl-9 col-sm-8">
                                                    <div class="sp-plan-name">
                                                        <h6 class="title"><a href="html/subscription/subscriptions-detail.html">Pro Plan <span class="badge badge-light badge-pill">Expired</span></a></h6>
                                                        <p>Subscription ID: <span class="text-base">100142725</span></p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-sm-4">
                                                    <div class="sp-plan-opt">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" class="custom-control-input" id="auto-plan-p2" disabled="">
                                                            <label class="custom-control-label text-soft" for="auto-plan-p2">Auto Renew</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .sp-plan-info -->
                                        <div class="sp-plan-desc card-inner">
                                            <ul class="row gx-1">
                                                <li class="col-6 col-lg-3">
                                                    <p><span class="text-soft">Started On</span> Oct 12, 2017</p>
                                                </li>
                                                <li class="col-6 col-lg-3">
                                                    <p><span class="text-soft">Recuring</span> Yes</p>
                                                </li>
                                                <li class="col-6 col-lg-3">
                                                    <p><span class="text-soft">Price</span> $249.00</p>
                                                </li>
                                                <li class="col-6 col-lg-3">
                                                    <p><span class="text-soft">Access</span> Up to 10 Members</p>
                                                </li>
                                            </ul>
                                        </div><!-- .sp-plan-desc -->
                                    </div><!-- .col -->
                                    <div class="col-md-4">
                                        <div class="sp-plan-action card-inner">
                                            <div class="sp-plan-btn">
                                                <a href="#" class="btn btn-dim btn-white btn-outline-primary"><span>Renew Plan</span></a>
                                            </div>
                                            <div class="sp-plan-note text-md-center">
                                                <p>You can renew the plan anytime.</p>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .sp-plan -->
                        </div><!-- .nk-block -->
                        <div class="nk-block">
                            <div class="card card-bordered">
                                <div class="card-inner card-inner-lg">
                                    <div class="nk-help">
                                        <div class="nk-help-img">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 118">
                                                <path d="M8.916,94.745C-.318,79.153-2.164,58.569,2.382,40.578,7.155,21.69,19.045,9.451,35.162,4.32,46.609.676,58.716.331,70.456,1.845,84.683,3.68,99.57,8.694,108.892,21.408c10.03,13.679,12.071,34.71,10.747,52.054-1.173,15.359-7.441,27.489-19.231,34.494-10.689,6.351-22.92,8.733-34.715,10.331-16.181,2.192-34.195-.336-47.6-12.281A47.243,47.243,0,0,1,8.916,94.745Z" transform="translate(0 -1)" fill="#f6faff"></path>
                                                <rect x="18" y="32" width="84" height="50" rx="4" ry="4" fill="#fff"></rect>
                                                <rect x="26" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe"></rect>
                                                <rect x="50" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe"></rect>
                                                <rect x="74" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe"></rect>
                                                <rect x="38" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe"></rect>
                                                <rect x="62" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe"></rect>
                                                <path d="M98,32H22a5.006,5.006,0,0,0-5,5V79a5.006,5.006,0,0,0,5,5H52v8H45a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H73a2,2,0,0,0,2-2V94a2,2,0,0,0-2-2H66V84H98a5.006,5.006,0,0,0,5-5V37A5.006,5.006,0,0,0,98,32ZM73,94v4H45V94Zm-9-2H54V84H64Zm37-13a3,3,0,0,1-3,3H22a3,3,0,0,1-3-3V37a3,3,0,0,1,3-3H98a3,3,0,0,1,3,3Z" transform="translate(0 -1)" fill="#798bff"></path>
                                                <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="#6576ff"></path>
                                                <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2"></path>
                                                <line x1="40" y1="22" x2="57" y2="22" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                <line x1="40" y1="27" x2="57" y2="27" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                <line x1="40" y1="32" x2="50" y2="32" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                <line x1="30.5" y1="87.5" x2="30.5" y2="91.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round"></line>
                                                <line x1="28.5" y1="89.5" x2="32.5" y2="89.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round"></line>
                                                <line x1="79.5" y1="22.5" x2="79.5" y2="26.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round"></line>
                                                <line x1="77.5" y1="24.5" x2="81.5" y2="24.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round"></line>
                                                <circle cx="90.5" cy="97.5" r="3" fill="none" stroke="#9cabff" stroke-miterlimit="10"></circle>
                                                <circle cx="24" cy="23" r="2.5" fill="none" stroke="#9cabff" stroke-miterlimit="10"></circle></svg>
                                        </div>
                                        <div class="nk-help-text">
                                            <h5>We’re here to help you!</h5>
                                            <p class="text-soft">Ask a question or file a support ticketn or report an issues. Our team support team will get back to you by email.</p>
                                        </div>
                                        <div class="nk-help-action">
                                            <a href="html/subscription/contact.html" class="btn btn-lg btn-outline-primary">Get Support Now</a>
                                        </div>
                                    </div><!-- .nk-help -->
                                </div>
                            </div><!-- .card -->
                        </div><!-- .nk-block -->
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