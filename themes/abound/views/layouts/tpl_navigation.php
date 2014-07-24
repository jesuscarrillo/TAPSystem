<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <!-- Be sure to leave the brand out there if you want it shown -->
            <a class="brand" href="#"><img src=" <?php echo Yii::app()->baseUrl; ?>/themes/abound/img/logo-unet-blanco.png "  width="20px" height="20px"> T.A.P <small>Comisión Ing. en Informática</small></a>

            <div class="nav-collapse">
                <?php
                include_once ('themes/abound/reports/Display_Report.php');
                if (Yii::app()->request->getParam("cid") == 1) {
                    Generar_Reporte('themes/abound/reports/ConstanciaTutorTesis', '1', 'I');
                }
                ?>              
              
                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'htmlOptions' => array('class' => 'pull-right nav'),
                    'submenuHtmlOptions' => array('class' => 'dropdown-menu'),
                    'itemCssClass' => 'item-test',
                    'encodeLabel' => false,
                    'items' => array(
                        array('label' => 'Bandeja Principal', 'url' => array('/site/index'), 'visible' => !Yii::app()->user->isGuest),
                        //array('label'=>'Graphs & Charts', 'url'=>array('/site/page', 'view'=>'graphs')),
                        //array('label' => 'Forms', 'url' => array('/site/page', 'view' => 'forms')),
                        //array('label' => 'Tables', 'url' => array('/site/page', 'view' => 'tables')),
                        //array('label' => 'Interface', 'url' => array('/site/page', 'view' => 'interface')),
                        //array('label' => 'Typography', 'url' => array('/site/page', 'view' => 'typography')),                       
                        array('label' => 'Administrar Usuarios <span class="caret"></span>', 'url' => '#', 'visible' => Yii::app()->user->isSuperAdmin, 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"), 'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                            'items' => array(
                                array('label' => 'Crear Usuario', 'url' => array('/cruge/ui/usermanagementcreate')),
                                array('label' => 'Administrar Usuarios', 'url' => array('/cruge/ui/usermanagementadmin')),
                                array('label' => 'Listar Campos Perfil', 'url' => array('/cruge/ui/fieldsadminlist')),
                                array('label' => 'Crear Campo de Perfil', 'url' => array('/cruge/ui/fieldsadmincreate')),
                                array('label' => 'Crear Roles', 'url' => array('/cruge/ui/rbaclistroles')),
                                array('label' => 'Crear Tareas', 'url' => array('/cruge/ui/rbaclisttasks')),
                                array('label' => 'Crear Operaciones', 'url' => array('/cruge/ui/rbaclistops')),
                                array('label' => 'Asignar Roles', 'url' => array('/cruge/ui/rbacusersassignments')),
                                array('label' => 'Sesiones', 'url' => array('/cruge/ui/sessionadmin')),
                                array('label' => 'Opciones', 'url' => array('/cruge/ui/systemupdate')),
                            )),
                        array('label' => 'Constancias <span class="caret"></span>', 'url' => '#', 'visible' => Yii::app()->user->isSuperAdmin, 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"), 'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                            'items' => array(
                                array('label' => 'Tutor Tesis', 'url' => 'index?cid=1'),
                                array('label' => 'Tutor Pasantía', 'url' => array('/themes/abound/reports/test')),
                                array('label' => 'Aceptación Pasantía', 'url' => array('/cruge/ui/usermanagementadmin')),
                                array('label' => 'Aceptación Tesis', 'url' => array('/cruge/ui/fieldsadminlist')),
                                array('label' => 'Acta Evaluación Pasantía', 'url' => array('/cruge/ui/fieldsadmincreate')),
                                array('label' => 'Acta Evaluación Tesis', 'url' => array('/cruge/ui/rbaclistroles')),
                                array('label' => 'Jurado Evaluador Pasantía', 'url' => array('/cruge/ui/rbaclisttasks')),
                                array('label' => 'Jurado Evaluador Tesis', 'url' => array('/cruge/ui/rbaclisttasks')),
                            )),
                        /* array('label'=>'Gii generated', 'url'=>array('customer/index')), */
                        array('label' => 'Mi Cuenta <span class="caret"></span>', 'url' => '#', 'visible' => !Yii::app()->user->isGuest, 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"), 'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                            'items' => array(                                
                                array('label' => 'Historial de Sesiones', 'url' => '#'),
                                array('label' => 'Perfil', 'url' => array('/cruge/ui/editprofile')),
                            )),
                        array('label' => 'Iniciar', 'url' => array('/cruge/ui/login'), 'visible' => Yii::app()->user->isGuest),
                        
                        array('label' => 'Pre-Inscribir <span class="caret"></span>', 'url' => '#', 'visible' => !Yii::app()->user->isGuest, 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"), 'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                            'items' => array(
                                array('label' => 'Tesis', 'url' => '/inscribir?t=1'),
                                array('label' => 'Pasantias', 'url' => '/inscribir?t=2'),
                            )),
                        array('label' => 'Cerrar Sesión (' . Yii::app()->user->name . ')', 'url' => Yii::app()->user->ui->logoutUrl, 'visible' => !Yii::app()->user->isGuest),
                    ),
                ));
                ?>
            </div>
        </div>
    </div>
</div>


<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">

            <!-- Cambio de Colores en la barra principal -->
            <div class="style-switcher pull-left">  
                <?php if (!Yii::app()->user->isGuest) { ?>
                    <span>Bienvenido <strong><?php echo Yii::app()->user->name ?></strong>. Último Inicio de Sesión:</span>
                    <?php
                } else {
                    ?>
                    <span>Bienvenido. Inicie sesión para acceder a sus opciones operacionales.</span>
<?php } ?>
                <!--
            <a href="javascript:chooseStyle('none', 60)" checked="checked"><span class="style" style="background-color:#0088CC;"></span></a>
            <a href="javascript:chooseStyle('style2', 60)"><span class="style" style="background-color:#7c5706;"></span></a>
            <a href="javascript:chooseStyle('style3', 60)"><span class="style" style="background-color:#468847;"></span></a>
            <a href="javascript:chooseStyle('style4', 60)"><span class="style" style="background-color:#4e4e4e;"></span></a>
            <a href="javascript:chooseStyle('style5', 60)"><span class="style" style="background-color:#d85515;"></span></a>
            <a href="javascript:chooseStyle('style6', 60)"><span class="style" style="background-color:#a00a69;"></span></a>
            <a href="javascript:chooseStyle('style7', 60)"><span class="style" style="background-color:#a30c22;"></span></a>
                -->
            </div>
<?php if (!Yii::app()->user->isGuest) { ?>
                <form class="navbar-search pull-right" action="">           	 
                    <input type="text" class="search-query span2" placeholder="Búsqueda..">         
                </form>
<?php } ?>
        </div><!-- container -->
    </div><!-- navbar-inner -->
</div><!-- subnav -->