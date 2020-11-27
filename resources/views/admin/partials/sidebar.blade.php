<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        @role('superadmin')
        <li {{ Request::is('admin/home', 'admin/home/*') ? 'class=active' : '' }}><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        @endrole

        @role('superadmin')
        <li {{ Request::is('admin/administradores', 'admin/administradores/*') ? 'class=active' : '' }}><a href="{{ route('administrators.list') }}"><i class="fa fa-users"></i> <span>Administradores</span></a></li>
        @endrole

        @role('superadmin')
        <li {{ Request::is('admin/paginas', 'admin/paginas/*') ? 'class=active' : '' }}><a href="{{ route('pages.list') }}"><i class="fa fa-list"></i> <span>Páginas estáticas (SEO)</span></a></li>
        @endrole

        @role('superadmin')
        <li {{ Request::is('admin/caracteristicas', 'admin/caracteristicas/*') ? 'class=active' : '' }}><a href="{{ route('characteristics.list') }}"><i class="fa fa-list"></i> <span>Características</span></a></li>
        @endrole

        @role('superadmin')
        <li {{ Request::is('admin/formatos', 'admin/formatos/*') ? 'class=active' : '' }}><a href="{{ route('solutions.list') }}"><i class="fa fa-list"></i> <span>Formatos</span></a></li>
        @endrole

        @role('superadmin')
        <li {{ Request::is('admin/casos-de-exito', 'admin/casos-de-exito/*') ? 'class=active' : '' }}><a href="{{ route('success-stories.list') }}"><i class="fa fa-list"></i> <span>Casos de éxito</span></a></li>
        @endrole

        @role('superadmin')
        <li {{ Request::is('admin/insights', 'admin/insights/*') ? 'class=active' : '' }}><a href="{{ route('insights.list') }}"><i class="fa fa-list"></i> <span>Insights</span></a></li>
        @endrole

        @role('superadmin')
        <li {{ Request::is('admin/contactos', 'admin/contactos/*') ? 'class=active' : '' }}><a href="{{ route('contacts.list') }}"><i class="fa fa-list"></i> <span>Contactos</span></a></li>
        @endrole

        @role('superadmin')
        <li {{ Request::is('admin/landing-contactos', 'admin/landing-contactos/*') ? 'class=active' : '' }}><a href="{{ route('landing_contacts.list') }}"><i class="fa fa-list"></i> <span>Contactos de landing</span></a></li>
        @endrole
    </ul>
    <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
