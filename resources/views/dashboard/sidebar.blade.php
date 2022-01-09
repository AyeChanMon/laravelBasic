<div class="col-12 col-lg-3 col-xl-2 sidebar vh-100">
                <div class="d-flex justify-content-between align-items-center py-2 mt-2 nav-brand">
                    <div class="d-flex align-items-center">
                        <span class="bg-primary p-2 rounded d-flex justify-content-center align-items-center me-2">
                            <i class="feather-shopping-bag text-white fs-4"></i>
                        </span>
                        <span class="fw-bolder fs-4 text-uppercase text-primary">My Shop</span>
                    </div>
                    <button class="hide-sidebar-btn btn btn-light d-block d-lg-none">
                        <i class="feather-x text-primary" style="font-size: 2em;"></i>
                    </button>
                </div>
                <div class="nav-menu">
                    <ul>
                        <li class="menu-item">
                            <a href="{{ route('dashboard.index') }}" class="menu-item-link active">
                                <span>
                                    <i class="feather-home"></i> Dashboard
                                </span>
                            </a>
                        </li>
                        <li class="menu-spacer"></li>
                        <li class="menu-title">
                            <span>Manage Item</span>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('dashboard.create') }}" class="menu-item-link">
                                <span>
                                    <i class="feather-plus-circle"></i> Create
                                </span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('dashboard.create') }}" class="menu-item-link">
                                <span>
                                    <i class="feather-list"></i> Edit
                                </span>
                                <span class="badge rounded-pill bg-white text-black-50 shadow-sm p-1">15</span>
                            </a>
                        </li>
                        <li class="menu-spacer"></li>
                    </ul>
                </div>
            </div>