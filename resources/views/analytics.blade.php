@include('layouts.dashboard.main')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-content">
                <h4 class="main-title">Overview</h4>
                <div class="row merged20 mb-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="w-chart-section">
                            <div class="w-detail">
                                <p class="w-title">Questions</p>
                                <p class="w-stats">{{ $user_questions->count() }}</p>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                            </div>
                            <div class="w-chart-render-one">
                                <div id="total-users"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="w-chart-section">
                            <div class="w-detail">
                                <p class="w-title">Likes</p>
                                <p class="w-stats">7,929</p>
                                <span>
                                    <svg id="user-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></span>
                                </div>
                            <div class="w-chart-render-one">
                                <div id="paid-visits"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="w-chart-section">
                            <div class="w-detail">
                                <p class="w-title">Answers</p>
                                <p class="w-stats">7,929</p>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                            </div>
                            <div class="w-chart-render-one">
                                <div id="total-downloads"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row merged20 mb-4">
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <div class="d-widget">
                            <div class="d-widget-title">
                                <h5 class="">Your content</h5>
                                <select class="browser-default custom-select">
                                    <option value="3">last day</option>
                                    <option value="2">week</option>
                                    <option selected>Monthly</option>
                                    <option value="1">Yearly</option>
                                </select>
                            </div>
                            
                            <div class="d-widget-content">
                                <div class="tabs tab-content">
                                    <div id="content_1" class="tabcontent"> 
                                        <h4 class="main-title">Nothing found for the selected filters.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="d-widget blue-bg pd-0">
                            <div class="d-widget-content">
                                <div class="w-numeric-value">
                                    <div class="w-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                    </div>
                                    <div class="d-content">
                                        <span class="w-numeric-title">This Month Earning</span>
                                        <span class="w-value">FCFA 3,192</span>
                                    </div>
                                </div>
                                <div class="w-chart">
                                    <div id="total-orders"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- main content -->