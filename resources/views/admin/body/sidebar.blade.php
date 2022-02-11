        <!-- Sidebar -->
        <!--
      Helper classes

      Adding .smini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
      Adding .smini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
        If you would like to disable the transition, just add the .no-transition along with one of the previous 2 classes

      Adding .smini-hidden to an element will hide it when the sidebar is in mini mode
      Adding .smini-visible to an element will show it only when the sidebar is in mini mode
      Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
    -->
        <nav id="sidebar">
            <!-- Sidebar Content -->
            <div class="sidebar-content">
                <!-- Side Header -->
                <div class="content-header justify-content-lg-center">
                    <!-- Logo -->
                    <div>
                        <span class="smini-visible fw-bold tracking-wide fs-lg">
                            c<span class="text-primary">b</span>
                        </span>
                        <a class="link-fx fw-bold tracking-wide mx-auto" href="/">
                            <span class="smini-hidden">
                                <i class="fa fa-fire text-primary"></i>
                                <span class="fs-4 text-dual">anvil</span><span class="fs-4 text-primary">ACC</span>
                            </span>
                        </a>
                    </div>
                    <!-- END Logo -->

                    <!-- Options -->
                    <div>
                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout"
                            data-action="sidebar_close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Options -->
                </div>
                <!-- END Side Header -->

                <!-- Sidebar Scrolling -->
                <div class="js-sidebar-scroll">
                    <!-- Side User -->
                    <div class="content-side content-side-user px-0 py-0">
                        <!-- Visible only in mini mode -->
                        <div class="smini-visible-block animated fadeIn px-3">
                            <img class="img-avatar img-avatar32" src="{{ Auth::user()->profile_photo_url }}" alt="">
                        </div>
                        <!-- END Visible only in mini mode -->

                        <!-- Visible only in normal mode -->
                        <div class="smini-hidden text-center mx-auto">
                            <a class="img-link" href="javascript:void(0)">
                                <img class="img-avatar" src="{{ Auth::user()->profile_photo_url }}" alt="">
                            </a>
                            <ul class="list-inline mt-3 mb-0">
                                <li class="list-inline-item">
                                    <a class="link-fx text-dual fs-sm fw-semibold text-uppercase"
                                        href="{{ Auth::user()->name }}">{{ Auth::user()->first_name }}
                                        {{ Auth::user()->last_name }}</a>
                                </li>
                                <li class="list-inline-item">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <a class="link-fx text-dual" data-toggle="layout" data-action="dark_mode_toggle"
                                        href="javascript:void(0)">
                                        <i class="fa fa-burn"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="link-fx text-dual" href="{{ route('admin.logout') }}">
                                        <i class="fa fa-sign-out-alt"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Visible only in normal mode -->
                    </div>
                    <!-- END Side User -->

                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}"
                                    href="/dashboard">
                                    <i class="nav-main-link-icon fa fa-house-user"></i>
                                    <span class="nav-main-link-name">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-main-item{{ request()->is('staff/*') ? ' open' : '' }}">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                    aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon fa fa-lightbulb"></i>
                                    <span class="nav-main-link-name">Staff</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link{{ request()->is('staff/user') ? ' active' : '' }}"
                                            href="{{ route('user.view') }}">
                                            <span class="nav-main-link-name">Users</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link{{ request()->is('staff/roles') ? ' active' : '' }}"
                                            href="#">
                                            <span class="nav-main-link-name">Roles</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item{{ request()->is('accounts/*') ? ' open' : '' }}">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                    aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon fa fa-lightbulb"></i>
                                    <span class="nav-main-link-name">Accounts</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link{{ request()->is('accounts/customer') ? ' active' : '' }}"
                                            href="#">
                                            <span class="nav-main-link-name">Customers</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link{{ request()->is('accounts/vendors') ? ' active' : '' }}"
                                            href="#">
                                            <span class="nav-main-link-name">Vendors</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link{{ request()->is('accounts/quotation') ? ' active' : '' }}"
                                            href="#">
                                            <span class="nav-main-link-name">Quotation</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item{{ request()->is('banking/*') ? ' open' : '' }}">
                                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                            aria-haspopup="true" aria-expanded="true" href="#">
                                            <span class="nav-main-link-name">Banking</span>
                                        </a>
                                        <ul class="nav-main-submenu">
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('banking/bankaccounts') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Bank Accounts</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('banking/transfer') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Transfer</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-main-item{{ request()->is('income/*') ? ' open' : '' }}">
                                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                            aria-haspopup="true" aria-expanded="true" href="#">
                                            <span class="nav-main-link-name">Income</span>
                                        </a>
                                        <ul class="nav-main-submenu">
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('income/invoices') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Invoices</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('income/revenue') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Revenue</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('income/creditnotes') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Credit Notes</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-main-item{{ request()->is('expense/*') ? ' open' : '' }}">
                                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                            aria-haspopup="true" aria-expanded="true" href="#">
                                            <span class="nav-main-link-name">Expense</span>
                                        </a>
                                        <ul class="nav-main-submenu">
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('expense/bills') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Bills</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('expense/payments') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Payments</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('expense/debitnotes') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Debit Notes</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-main-item{{ request()->is('doubleentry/*') ? ' open' : '' }}">
                                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                            aria-haspopup="true" aria-expanded="true" href="#">
                                            <span class="nav-main-link-name">Double Entry</span>
                                        </a>
                                        <ul class="nav-main-submenu">
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('doubleentry/chartofaccounts') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Chart Of Accounts</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('doubleentry/journalaccount') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Journal Account</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('doubleentry/ledgersummary') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Ledger Summary</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('doubleentry/balancesheet') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Balance Sheet</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('doubleentry/trialbalance') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Trial Balance</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-main-item{{ request()->is('reports/*') ? ' open' : '' }}">
                                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                            aria-haspopup="true" aria-expanded="true" href="#">
                                            <span class="nav-main-link-name">Reports</span>
                                        </a>
                                        <ul class="nav-main-submenu">
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('reports/transaction') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Transaction</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('reports/accountstatement') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Account Statement</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('reports/incomesummary') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Income Summary</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('reports/expensesumary') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Expense Summary</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('reports/incomevexpense') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Income VS Expense</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('reports/taxsummary') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Tax Summary</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('reports/profitloss') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Profit & Loss</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('reports/invoicesummary') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Invoice Summary</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('reports/billsummary') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Bill Summary</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-main-item{{ request()->is('accounts/settings/*') ? ' open' : '' }}">
                                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                            aria-haspopup="true" aria-expanded="true" href="#">
                                            <span class="nav-main-link-name">Accounts Setup</span>
                                        </a>
                                        <ul class="nav-main-submenu">
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('accounts/settings/taxes') ? ' active' : '' }}"
                                                    href="{{ route('tax.view') }}">
                                                    <span class="nav-main-link-name">Taxes</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('accounts/settings/product_service_category') ? ' active' : '' }}"
                                                    href="{{ route('product_service_category.view') }}">
                                                    <span class="nav-main-link-name">Product &
                                                        Services Categories</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('accounts/settings/unit') ? ' active' : '' }}"
                                                    href="{{ route('product_service_unit.view') }}">
                                                    <span class="nav-main-link-name">Unit</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link{{ request()->is('accounts/settings/customfield') ? ' active' : '' }}"
                                                    href="#">
                                                    <span class="nav-main-link-name">Custom Field</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link{{ request()->is('accounts/printsettings') ? ' active' : '' }}"
                                            href="#">
                                            <span class="nav-main-link-name">Print Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('setting/companysettings/view') ? ' active' : '' }}"
                                    href="{{ route('settings.view') }}">
                                    <span class="nav-main-link-name">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- END Sidebar Scrolling -->
            </div>
            <!-- Sidebar Content -->
        </nav>
        <!-- END Sidebar -->
