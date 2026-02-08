<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                </li>

                <!-- HRM -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-dashboards">HRM</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="calendar.html" key="t-tui-calendar">Employees</a></li>
                        <li><a href="calendar-full.html" key="t-full-calendar">Departments</a></li>
                        <li><a href="calendar-full.html" key="t-full-calendar">Designations</a></li>
                        <li><a href="calendar-full.html" key="t-full-calendar">Attendance</a></li>
                        <li><a href="calendar-full.html" key="t-full-calendar">Leave</a></li>
                        <li><a href="calendar-full.html" key="t-full-calendar">Payroll</a></li>
                    </ul>
                </li>

                <!-- INVENTORY -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-contacts">Inventory</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="contacts-grid.html" key="t-user-grid">Products</a></li>
                        <li><a href="contacts-grid.html" key="t-user-grid">Categories</a></li>
                        <li><a href="contacts-grid.html" key="t-user-grid">Warehouses</a></li>
                        <li><a href="contacts-grid.html" key="t-user-grid">Stock</a></li>
                        <li><a href="contacts-grid.html" key="t-user-grid">Adjustments</a></li>
                        <li><a href="contacts-list.html" key="t-user-list">Transfers</a></li>
                    </ul>
                </li>

                <!-- SALES -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce">Sales</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ecommerce-products.html" key="t-products">Customers</a></li>
                        <li><a href="ecommerce-product-detail.html" key="t-product-detail">Orders </a></li>
                        <li><a href="ecommerce-orders.html" key="t-orders">Invoice</a></li>
                        <li><a href="ecommerce-customers.html" key="t-customers">Payments</a></li>
                    </ul>
                </li>

                <!-- PURCHASE -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-bitcoin"></i>
                        <span key="t-crypto">Purchase</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="crypto-wallet.html" key="t-wallet">Suppliers</a></li>
                        <li><a href="crypto-buy-sell.html" key="t-buy">Purchases Orders</a></li>
                        <li><a href="crypto-exchange.html" key="t-exchange">Stock In</a></li>
                        <li><a href="crypto-exchange.html" key="t-exchange">Bills</a></li>
                    </ul>
                </li>

                <!-- FINANCE -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-bitcoin"></i>
                        <span key="t-crypto">Finance</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="crypto-wallet.html" key="t-wallet">Accounts</a></li>
                        <li><a href="crypto-buy-sell.html" key="t-buy">Transactions</a></li>
                        <li><a href="crypto-exchange.html" key="t-exchange">Expenses</a></li>
                        <li><a href="crypto-exchange.html" key="t-exchange">Reports</a></li>
                    </ul>
                </li>

                <!-- BRANCHES MANAGEMENT -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-contacts">Branch management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="contacts-grid.html" key="t-user-grid">Branches</a></li>
                        <li><a href="contacts-list.html" key="t-user-list">Users</a></li>
                    </ul>
                </li>

                <!-- SETTINGS -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-contacts">Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="contacts-grid.html" key="t-user-grid">System settings</a></li>
                        <li><a href="contacts-list.html" key="t-user-list">Tax</a></li>
                        <li><a href="contacts-profile.html" key="t-profile">Currency</a></li>
                        <li><a href="contacts-profile.html" key="t-profile">Roles</a></li>
                        <li><a href="contacts-profile.html" key="t-profile">Permissions</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
