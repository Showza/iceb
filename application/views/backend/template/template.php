<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('admin') ?>"><?php echo $titulo ?></a>
        </div>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="<?php echo base_url('admin/cursos') ?>"><i class="fa fa-book fa-fw"></i> Cursos</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/noticias') ?>"><i class="fa fa-newspaper-o"></i> Notícias</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/contatos') ?>"><i class="fa fa-phone fa-fw"></i> Contatos</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/posgraduacao') ?>"><i class="fa fa-flask fa-fw"></i> Pós-Graduação</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/colegiados') ?>"><i class="fa fa-building fa-fw"></i> Colegiados</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/upload') ?>"><i class="fa fa-upload fa-fw"></i> Upload Colegiados</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/funcionarios') ?>"><i class="fa fa-users fa-fw"></i> Funcionários</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/departamentos') ?>"><i class="fa fa-briefcase"></i> Departamentos</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/diretoria') ?>"><i class="fa fa-university"></i> Diretoria</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/mapa') ?>"><i class="fa fa-map-marker"></i> Mapa </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/salas') ?>"><i class="fa fa-clock-o"></i> Salas </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/usuarios/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Sair do Sistema</a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
