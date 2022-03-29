
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="{{ url('assets/theme1/images/upload/admin/'.Session::get('photo_admin')) }}" alt="user-img" class="img-circle"><span class="hide-menu">{{ Session::get("name_admin") }}</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('admin/admin/edit/'.Session::get('id_admin')) }}"><i class="ti-user"></i> My Profile</a></li>
                                <li><a href="{{ url('admin/admin/edit_password/'.Session::get('id_admin')) }}"><i class="ti-key"></i> Edit Password</a></li>
                                <li><a href="{{ url('admin/logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-small-cap">--- MENU</li>
                        <li> 
							<a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
								<i class="fa fa-shopping-bag"></i>
								<span class="hide-menu">Product</span>
							</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('admin/product/add') }}">Add New</a></li>
                                <li><a href="{{ url('admin/product/') }}">List Existing</a></li>
                            </ul>
                        </li>
                        <li> 
							<a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
								<i class="fa fa-image"></i>
								<span class="hide-menu">Gallery</span>
							</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('admin/gallery/add') }}">Add New</a></li>
                                <li><a href="{{ url('admin/gallery') }}">List Existing</a></li>
                            </ul>
                        </li>
                        <li> 
							<a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
								<i class="fa fa-users"></i>
								<span class="hide-menu">Our Team</span>
							</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('admin/team/add') }}">Add New</a></li>
                                <li><a href="{{ url('admin/team') }}">List Existing</a></li>
                            </ul>
                        </li>
                        <li> 
							<a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
								<i class="fa fa-book"></i>
								<span class="hide-menu">Blog</span>
							</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('admin/blog/add') }}">Add New</a></li>
                                <li><a href="{{ url('admin/blog') }}">List Existing</a></li>
                            </ul>
                        </li>
                        <li> 
							<a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
								<i class="fa fa-book"></i>
								<span class="hide-menu">Blog Category</span>
							</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('admin/blog_cat/add') }}">Add New</a></li>
                                <li><a href="{{ url('admin/blog_cat') }}">List Existing</a></li>
                            </ul>
                        </li>
                        <li> 
							<a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
								<i class="fa fa-file"></i>
								<span class="hide-menu">About Page</span>
							</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('admin/pages/edit/1') }}">About Page</a></li>
                            </ul>
                        </li>
                        <li> 
							<a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
								<i class="fa fa-user-tie"></i>
								<span class="hide-menu">Clients Logo</span>
							</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('admin/client_logo/add') }}">Add New</a></li>
                                <li><a href="{{ url('admin/client_logo') }}">List Client Logo</a></li>
                            </ul>
                        </li>
                        <li> 
							<a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
								<i class="fa fa-user-tie"></i>
								<span class="hide-menu">Clients Testimonial</span>
							</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('admin/client_testimonial/add') }}">Add New</a></li>
                                <li><a href="{{ url('admin/client_testimonial') }}">List Client Testimonial</a></li>
                            </ul>
                        </li>
                        <li> 
							<a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
								<i class="fa fa-envelope"></i>
								<span class="hide-menu">Inbox</span>
							</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('admin/inbox') }}">List Message</a></li>
                            </ul>
                        </li>
                        <li> 
							<a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
								<i class="fa fa-user-circle"></i>
								<span class="hide-menu">Admin</span>
							</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('admin/admin/add') }}">Add New</a></li>
                                <li><a href="{{ url('admin/admin') }}">List Admin</a></li>
                            </ul>
                        </li>
                        <li> 
							<a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
								<i class="fa fa-server"></i>
								<span class="hide-menu">Roles</span>
							</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('admin/role/add') }}">Add Role</a></li>
                                <li><a href="{{ url('admin/role') }}">List Role</a></li>
                                <li><a href="{{ url('admin/role/menu/add') }}">Add Menu</a></li>
                                <li><a href="{{ url('admin/role/menu') }}">List Menu</a></li>
                            </ul>
                        </li>
                        <li> 
							<a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
								<i class="fa fa-edit"></i>
								<span class="hide-menu">Settings</span>
							</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('admin/settings/edit_general_settings') }}">General Settings</a></li>
                            </ul>
                        </li>
                        <li> 
							<a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
								<i class="fa fa-edit"></i>
								<span class="hide-menu">Specific Settings</span>
							</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('admin/settings/edit_specific_settings') }}">Specific Settings</a></li>
                            </ul>
                        </li>
					</ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->