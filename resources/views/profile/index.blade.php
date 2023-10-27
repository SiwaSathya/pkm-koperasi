@extends("template.template")
@section("content")
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="../../index3.html" class="brand-link">
<img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">AdminLTE 3</span>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="#" class="d-block">Alexander Pierce</a>
</div>
</div>

<div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div>

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>
Dashboard
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../../index.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Dashboard v1</p>
</a>
</li>
<li class="nav-item">
<a href="../../index2.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Dashboard v2</p>
</a>
</li>
<li class="nav-item">
<a href="../../index3.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Dashboard v3</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="../widgets.html" class="nav-link">
<i class="nav-icon fas fa-th"></i>
<p>
Widgets
<span class="right badge badge-danger">New</span>
</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-copy"></i>
<p>
Layout Options
<i class="fas fa-angle-left right"></i>
<span class="badge badge-info right">6</span>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../layout/top-nav.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Top Navigation</p>
</a>
</li>
<li class="nav-item">
<a href="../layout/top-nav-sidebar.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Top Navigation + Sidebar</p>
</a>
</li>
<li class="nav-item">
<a href="../layout/boxed.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Boxed</p>
</a>
</li>
<li class="nav-item">
<a href="../layout/fixed-sidebar.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Fixed Sidebar</p>
</a>
</li>
<li class="nav-item">
<a href="../layout/fixed-sidebar-custom.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Fixed Sidebar <small>+ Custom Area</small></p>
</a>
</li>
<li class="nav-item">
<a href="../layout/fixed-topnav.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Fixed Navbar</p>
</a>
</li>
<li class="nav-item">
<a href="../layout/fixed-footer.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Fixed Footer</p>
</a>
</li>
<li class="nav-item">
<a href="../layout/collapsed-sidebar.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Collapsed Sidebar</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-chart-pie"></i>
<p>
Charts
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../charts/chartjs.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>ChartJS</p>
</a>
</li>
<li class="nav-item">
<a href="../charts/flot.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Flot</p>
</a>
</li>
<li class="nav-item">
<a href="../charts/inline.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Inline</p>
</a>
</li>
<li class="nav-item">
<a href="../charts/uplot.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>uPlot</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-tree"></i>
<p>
UI Elements
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../UI/general.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>General</p>
</a>
</li>
<li class="nav-item">
<a href="../UI/icons.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Icons</p>
</a>
</li>
<li class="nav-item">
<a href="../UI/buttons.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Buttons</p>
</a>
</li>
<li class="nav-item">
<a href="../UI/sliders.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Sliders</p>
</a>
</li>
<li class="nav-item">
<a href="../UI/modals.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Modals & Alerts</p>
</a>
</li>
<li class="nav-item">
<a href="../UI/navbar.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Navbar & Tabs</p>
</a>
</li>
<li class="nav-item">
<a href="../UI/timeline.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Timeline</p>
</a>
</li>
<li class="nav-item">
<a href="../UI/ribbons.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Ribbons</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-edit"></i>
<p>
Forms
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../forms/general.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>General Elements</p>
</a>
</li>
<li class="nav-item">
<a href="../forms/advanced.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Advanced Elements</p>
</a>
</li>
<li class="nav-item">
<a href="../forms/editors.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Editors</p>
</a>
</li>
<li class="nav-item">
<a href="../forms/validation.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Validation</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-table"></i>
<p>
Tables
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../tables/simple.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Simple Tables</p>
</a>
</li>
<li class="nav-item">
<a href="../tables/data.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>DataTables</p>
</a>
</li>
<li class="nav-item">
<a href="../tables/jsgrid.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>jsGrid</p>
</a>
</li>
</ul>
</li>
<li class="nav-header">EXAMPLES</li>
<li class="nav-item">
<a href="../calendar.html" class="nav-link">
<i class="nav-icon far fa-calendar-alt"></i>
<p>
Calendar
<span class="badge badge-info right">2</span>
</p>
</a>
</li>
<li class="nav-item">
<a href="../gallery.html" class="nav-link">
<i class="nav-icon far fa-image"></i>
<p>
Gallery
</p>
</a>
</li>
<li class="nav-item">
<a href="../kanban.html" class="nav-link">
<i class="nav-icon fas fa-columns"></i>
<p>
Kanban Board
</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon far fa-envelope"></i>
<p>
Mailbox
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../mailbox/mailbox.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Inbox</p>
</a>
</li>
<li class="nav-item">
<a href="../mailbox/compose.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Compose</p>
</a>
</li>
<li class="nav-item">
<a href="../mailbox/read-mail.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Read</p>
</a>
</li>
</ul>
</li>
<li class="nav-item menu-open">
<a href="#" class="nav-link active">
<i class="nav-icon fas fa-book"></i>
<p>
Pages
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../examples/invoice.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Invoice</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/profile.html" class="nav-link active">
<i class="far fa-circle nav-icon"></i>
<p>Profile</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/e-commerce.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>E-commerce</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/projects.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Projects</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/project-add.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Project Add</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/project-edit.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Project Edit</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/project-detail.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Project Detail</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/contacts.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Contacts</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/faq.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>FAQ</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/contact-us.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Contact us</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon far fa-plus-square"></i>
<p>
Extras
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>
Login & Register v1
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../examples/login.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Login v1</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/register.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Register v1</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/forgot-password.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Forgot Password v1</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/recover-password.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Recover Password v1</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>
Login & Register v2
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../examples/login-v2.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Login v2</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/register-v2.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Register v2</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/forgot-password-v2.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Forgot Password v2</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/recover-password-v2.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Recover Password v2</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="../examples/lockscreen.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Lockscreen</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/legacy-user-menu.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Legacy User Menu</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/language-menu.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Language Menu</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/404.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Error 404</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/500.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Error 500</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/pace.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Pace</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/blank.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Blank Page</p>
</a>
</li>
<li class="nav-item">
<a href="../../starter.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Starter Page</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-search"></i>
<p>
Search
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../search/simple.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Simple Search</p>
</a>
</li>
<li class="nav-item">
<a href="../search/enhanced.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Enhanced</p>
</a>
</li>
</ul>
</li>
<li class="nav-header">MISCELLANEOUS</li>
<li class="nav-item">
<a href="../../iframe.html" class="nav-link">
<i class="nav-icon fas fa-ellipsis-h"></i>
<p>Tabbed IFrame Plugin</p>
</a>
</li>
<li class="nav-item">
<a href="https://adminlte.io/docs/3.1/" class="nav-link">
<i class="nav-icon fas fa-file"></i>
<p>Documentation</p>
</a>
</li>
<li class="nav-header">MULTI LEVEL EXAMPLE</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="fas fa-circle nav-icon"></i>
<p>Level 1</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-circle"></i>
<p>
Level 1
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Level 2</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>
Level 2
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-dot-circle nav-icon"></i>
<p>Level 3</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-dot-circle nav-icon"></i>
<p>Level 3</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-dot-circle nav-icon"></i>
<p>Level 3</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Level 2</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="fas fa-circle nav-icon"></i>
<p>Level 1</p>
</a>
</li>
<li class="nav-header">LABELS</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon far fa-circle text-danger"></i>
<p class="text">Important</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon far fa-circle text-warning"></i>
<p>Warning</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon far fa-circle text-info"></i>
<p>Informational</p>
</a>
</li>
</ul>
</nav>

</div>

</aside>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Profile</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">User Profile</li>
</ol>
</div>
</div>
</div>
</section>

<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-3">

<div class="card card-primary card-outline">
<div class="card-body box-profile">
<div class="text-center">
<img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
</div>
<h3 class="profile-username text-center">Nina Mcintire</h3>
<p class="text-muted text-center">Software Engineer</p>
<ul class="list-group list-group-unbordered mb-3">
<li class="list-group-item">
<b>Followers</b> <a class="float-right">1,322</a>
</li>
<li class="list-group-item">
<b>Following</b> <a class="float-right">543</a>
</li>
<li class="list-group-item">
<b>Friends</b> <a class="float-right">13,287</a>
</li>
</ul>
<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
</div>

</div>


<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">About Me</h3>
</div>

<div class="card-body">
<strong><i class="fas fa-book mr-1"></i> Education</strong>
<p class="text-muted">
B.S. in Computer Science from the University of Tennessee at Knoxville
</p>
<hr>
<strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
<p class="text-muted">Malibu, California</p>
<hr>
<strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
<p class="text-muted">
<span class="tag tag-danger">UI Design</span>
<span class="tag tag-success">Coding</span>
<span class="tag tag-info">Javascript</span>
<span class="tag tag-warning">PHP</span>
<span class="tag tag-primary">Node.js</span>
</p>
<hr>
<strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
</div>

</div>

</div>

<div class="col-md-9">
<div class="card">
<div class="card-header p-2">
<ul class="nav nav-pills">
<li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
<li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
</ul>
</div>
<div class="card-body">
<div class="tab-content">
<div class="active tab-pane" id="activity">

<div class="post">
<div class="user-block">
<img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
<span class="username">
<a href="#">Jonathan Burke Jr.</a>
<a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
</span>
<span class="description">Shared publicly - 7:30 PM today</span>
</div>

<p>
Lorem ipsum represents a long-held tradition for designers,
typographers and the like. Some people hate it and argue for
its demise, but others ignore the hate as they create awesome
tools to help create filler text for everyone from bacon lovers
to Charlie Sheen fans.
</p>
<p>
<a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
<a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
<span class="float-right">
<a href="#" class="link-black text-sm">
<i class="far fa-comments mr-1"></i> Comments (5)
</a>
</span>
</p>
<input class="form-control form-control-sm" type="text" placeholder="Type a comment">
</div>


<div class="post clearfix">
<div class="user-block">
<img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
<span class="username">
<a href="#">Sarah Ross</a>
<a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
</span>
<span class="description">Sent you a message - 3 days ago</span>
</div>

<p>
Lorem ipsum represents a long-held tradition for designers,
typographers and the like. Some people hate it and argue for
its demise, but others ignore the hate as they create awesome
tools to help create filler text for everyone from bacon lovers
to Charlie Sheen fans.
</p>
<form class="form-horizontal">
<div class="input-group input-group-sm mb-0">
<input class="form-control form-control-sm" placeholder="Response">
<div class="input-group-append">
<button type="submit" class="btn btn-danger">Send</button>
</div>
</div>
</form>
</div>


<div class="post">
<div class="user-block">
<img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
<span class="username">
<a href="#">Adam Jones</a>
<a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
</span>
<span class="description">Posted 5 photos - 5 days ago</span>
</div>

<div class="row mb-3">
<div class="col-sm-6">
<img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
</div>

<div class="col-sm-6">
<div class="row">
<div class="col-sm-6">
<img class="img-fluid mb-3" src="../../dist/img/photo2.png" alt="Photo">
<img class="img-fluid" src="../../dist/img/photo3.jpg" alt="Photo">
</div>

<div class="col-sm-6">
<img class="img-fluid mb-3" src="../../dist/img/photo4.jpg" alt="Photo">
<img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
</div>

</div>

</div>

</div>

<p>
<a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
<a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
<span class="float-right">
<a href="#" class="link-black text-sm">
<i class="far fa-comments mr-1"></i> Comments (5)
</a>
</span>
</p>
<input class="form-control form-control-sm" type="text" placeholder="Type a comment">
</div>

</div>

<div class="tab-pane" id="timeline">

<div class="timeline timeline-inverse">

<div class="time-label">
<span class="bg-danger">
10 Feb. 2014
</span>
</div>


<div>
<i class="fas fa-envelope bg-primary"></i>
<div class="timeline-item">
<span class="time"><i class="far fa-clock"></i> 12:05</span>
<h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
<div class="timeline-body">
Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
weebly ning heekya handango imeem plugg dopplr jibjab, movity
jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
quora plaxo ideeli hulu weebly balihoo...
</div>
<div class="timeline-footer">
<a href="#" class="btn btn-primary btn-sm">Read more</a>
<a href="#" class="btn btn-danger btn-sm">Delete</a>
</div>
</div>
</div>


<div>
<i class="fas fa-user bg-info"></i>
<div class="timeline-item">
<span class="time"><i class="far fa-clock"></i> 5 mins ago</span>
<h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
</h3>
</div>
</div>


<div>
<i class="fas fa-comments bg-warning"></i>
<div class="timeline-item">
<span class="time"><i class="far fa-clock"></i> 27 mins ago</span>
<h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
<div class="timeline-body">
Take me to your leader!
Switzerland is small and neutral!
We are more like Germany, ambitious and misunderstood!
</div>
<div class="timeline-footer">
<a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
</div>
</div>
</div>


<div class="time-label">
<span class="bg-success">
3 Jan. 2014
</span>
</div>


<div>
<i class="fas fa-camera bg-purple"></i>
<div class="timeline-item">
<span class="time"><i class="far fa-clock"></i> 2 days ago</span>
<h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
<div class="timeline-body">
<img src="https://placehold.it/150x100" alt="...">
<img src="https://placehold.it/150x100" alt="...">
<img src="https://placehold.it/150x100" alt="...">
<img src="https://placehold.it/150x100" alt="...">
</div>
</div>
</div>

<div>
<i class="far fa-clock bg-gray"></i>
</div>
</div>
</div>

<div class="tab-pane" id="settings">
<form class="form-horizontal">
<div class="form-group row">
<label for="inputName" class="col-sm-2 col-form-label">Name</label>
<div class="col-sm-10">
<input type="email" class="form-control" id="inputName" placeholder="Name">
</div>
</div>
<div class="form-group row">
<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
<div class="col-sm-10">
<input type="email" class="form-control" id="inputEmail" placeholder="Email">
</div>
</div>
<div class="form-group row">
<label for="inputName2" class="col-sm-2 col-form-label">Name</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="inputName2" placeholder="Name">
</div>
</div>
<div class="form-group row">
<label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
<div class="col-sm-10">
<textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
</div>
</div>
<div class="form-group row">
<label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="inputSkills" placeholder="Skills">
</div>
</div>
<div class="form-group row">
<div class="offset-sm-2 col-sm-10">
<div class="checkbox">
<label>
<input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
</label>
</div>
</div>
</div>
<div class="form-group row">
<div class="offset-sm-2 col-sm-10">
<button type="submit" class="btn btn-danger">Submit</button>
</div>
</div>
</form>
</div>

</div>

</div>
</div>

</div>

</div>

</div>
</section>

</div>



<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>


@endsection
</body>
