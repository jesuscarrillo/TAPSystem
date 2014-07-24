<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl;

if (Yii::app()->user->isGuest)
    $this->redirect('cruge/ui/login');
?>
<?php
$gridDataProvider = new CArrayDataProvider(array(
    array('id' => 1, 'firstName' => 'Mark', 'lastName' => 'Otto', 'language' => 'CSS', 'usage' => '<span class="inlinebar">1,3,4,5,3,5</span>'),
    array('id' => 2, 'firstName' => 'Jacob', 'lastName' => 'Thornton', 'language' => 'JavaScript', 'usage' => '<span class="inlinebar">1,3,16,5,12,5</span>'),
    array('id' => 3, 'firstName' => 'Stu', 'lastName' => 'Dent', 'language' => 'HTML', 'usage' => '<span class="inlinebar">1,4,4,7,5,9,10</span>'),
    array('id' => 4, 'firstName' => 'Jacob', 'lastName' => 'Thornton', 'language' => 'JavaScript', 'usage' => '<span class="inlinebar">1,3,16,5,12,5</span>'),
    array('id' => 5, 'firstName' => 'Stu', 'lastName' => 'Dent', 'language' => 'HTML', 'usage' => '<span class="inlinebar">1,3,4,5,3,5</span>'),
        ));
?>

<div class="row-fluid">



</div>

<div class="row-fluid">

    <div class="span3">
        <div class="sidebar-nav">

            <ul id="yw5">
                <li><a href="index?not=1"><i class="icon icon-envelope"></i> Bandeja Tesis <span class="badge badge-success pull-right">3</span></a></li>
                <li><a href="index?not=2"><i class="icon icon-envelope"></i> Bandeja Pasantías <span class="badge badge-important pull-right">1</span></a></li>


            </ul>		</div>
        <br>
        <!--<table class="table table-striped table-bordered">
            <tbody>
                <tr>
                    <td width="50%">Bandwith Usage</td>
                    <td>
                        <div class="progress progress-danger">
                            <div class="bar" style="width: 80%"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Disk Spage</td>
                    <td>
                        <div class="progress progress-warning">
                            <div class="bar" style="width: 60%"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Conversion Rate</td>
                    <td>
                        <div class="progress progress-success">
                            <div class="bar" style="width: 40%"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Closed Sales</td>
                    <td>
                        <div class="progress progress-info">
                            <div class="bar" style="width: 20%"></div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>-->
        <!--
        <div class="well">

            <dl class="dl-horizontal">
                <dt>Account status</dt>
                <dd>$1,234,002</dd>
                <dt>Open Invoices</dt>
                <dd>$245,000</dd>
                <dt>Overdue Invoices</dt>
                <dd>$20,023</dd>
                <dt>Converted Quotes</dt>
                <dd>$560,000</dd>

            </dl>
        </div> -->
        <div class="summary">
            <ul>
                <!--<li>
                    <span class="summary-icon">
                        <img src="<?php echo $baseUrl; ?>/img/credit.png" width="36" height="36" alt="Monthly Income">
                    </span>
                    <span class="summary-number">$78,245</span>
                    <span class="summary-title"> Monthly Income</span>
                </li>-->
                               
                <li>
                    <span class="summary-icon">
                        <img src="<?php echo $baseUrl; ?>/img/folder_page.png" width="36" height="36" alt="Recent Conversions">
                    </span>
                    <span class="summary-number">522</span>
                    <span class="summary-title"> Trabajos de Tésis</span></li>
                <li>
                    <span class="summary-icon">
                        <img src="<?php echo $baseUrl; ?>/img/folder_page.png" width="36" height="36" alt="Recent Conversions">
                    </span>
                    <span class="summary-number">430</span>
                    <span class="summary-title"> Trabajos de Pasantías</span></li>

            </ul>
        </div>
    </div>



    <?php
    if (Yii::app()->request->getParam("not") == 1) {        
        ?>
        
        <div class="span9">
            <h3>Bandeja Tesis</h3>
            <div id="yw9" class="grid-view">
                <table class="table table-hover table-striped table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th id="yw9_c0">#</th><th id="yw9_c1">Asunto</th><th id="yw9_c3">Remitente</th><th id="yw9_c4">Adjunto</th></tr>
                    </thead>
                    <tbody>
                        <tr class="odd"><td>1</td><td>Notificación de Nombramiento como Jurado</td><td><span class="badge badge-warning">Comisión T.A.P</span></td><td><span class="badge-info">SI</span></td></tr>
                        <tr class="even"><td>2</td><td>Notificación de Nombramiento como Tutor</td><td><span class="badge badge-warning">Comisión T.A.P</span></td><td><span class="badge-ifo">SI</span></td></tr>
                        <tr class="odd"><td>3</td><td>Consulta de Tesista</td><td><span class="badge badge-info">Tesista - Carlos Ramírez</span></td><td><span class="badge-info">NO</span></td></tr>
                    </tbody>
                </table><div class="keys" style="display:none" title="/yiitheme/abound/index.php?r=site/page&amp;view=tables"><span>1</span><span>2</span><span>3</span></div>
            </div>
<?php } ?>


<?php if (Yii::app()->request->getParam("not") == 2) { ?>
            <div class="span9">
                <h3>Bandeja Pasantías</h3>
                <div id="yw9" class="grid-view">
                    <table class="table table-hover table-striped table-bordered table-condensed">
                        <thead>
                            <tr>
                                <th id="yw9_c0">#</th><th id="yw9_c1">Asunto</th><th id="yw9_c3">Remitente</th><th id="yw9_c4">Adjunto</th></tr>
                        </thead>
                        <tbody>
                            <tr class="even"><td>2</td><td>Notificación de Nombramiento como Tutor</td><td><span class="badge badge-warning">Cominisión T.A.P</span></td><td><span class="badge-ifo">SI</span></td></tr>

                        </tbody>
                    </table><div class="keys" style="display:none" title="/yiitheme/abound/index.php?r=site/page&amp;view=tables"><span>1</span><span>2</span><span>3</span></div>
                </div>
<?php } ?>


            <!--
            <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title' => '<span class="icon-picture"></span>Operations Chart',
                'titleCssClass' => ''
            ));
            ?>
              
              <div class="auto-update-chart" style="height: 250px;width:100%;margin-top:15px; margin-bottom:15px;"></div>
              
<?php $this->endWidget(); ?>
            -->
        </div>
    </div>

    <!--
    <div class="row-fluid">
        <div class="span6">
    <?php
    $this->widget('zii.widgets.grid.CGridView', array(
        /* 'type'=>'striped bordered condensed', */
        'htmlOptions' => array('class' => 'table table-striped table-bordered table-condensed'),
        'dataProvider' => $gridDataProvider,
        'template' => "{items}",
        'columns' => array(
            array('name' => 'id', 'header' => '#'),
            array('name' => 'firstName', 'header' => 'First name'),
            array('name' => 'lastName', 'header' => 'Last name'),
            array('name' => 'language', 'header' => 'Language'),
            array('name' => 'usage', 'header' => 'Usage', 'type' => 'raw'),
        ),
    ));
    ?>
    
        </div>--><!--/span--> 
    <!--    
    <div class="span6">
    <?php
    $this->widget('zii.widgets.grid.CGridView', array(
        /* 'type'=>'striped bordered condensed', */
        'htmlOptions' => array('class' => 'table table-striped table-bordered table-condensed'),
        'dataProvider' => $gridDataProvider,
        'template' => "{items}",
        'columns' => array(
            array('name' => 'id', 'header' => '#'),
            array('name' => 'firstName', 'header' => 'First name'),
            array('name' => 'lastName', 'header' => 'Last name'),
            array('name' => 'language', 'header' => 'Language'),
            array('name' => 'usage', 'header' => 'Usage', 'type' => 'raw'),
        ),
    ));
    ?>
    
        </div>--><!--/span-->
</div><!--/row-->
<!--
<div class="row-fluid">
    <div class="span6">
<?php
$this->beginWidget('zii.widgets.CPortlet', array(
    'title' => '<span class="icon-th-large"></span>Income Chart',
    'titleCssClass' => ''
));
?>

        <div class="visitors-chart" style="height: 230px;width:100%;margin-top:15px; margin-bottom:15px;"></div>

<?php $this->endWidget(); ?>
    </div>--><!--/span-->

<!--
    <div class="span6">
<?php
$this->beginWidget('zii.widgets.CPortlet', array(
    'title' => '<span class="icon-th-list"></span> Visitors Chart',
    'titleCssClass' => ''
));
?>

        <div class="pieStats" style="height: 230px;width:100%;margin-top:15px; margin-bottom:15px;"></div>

<?php $this->endWidget(); ?>
    </div>-->
<!--<div class="span2">
<input class="knob" data-width="100" data-displayInput=false data-fgColor="#5EB95E" value="35">
</div>
<div class="span2">
<input class="knob" data-width="100" data-cursor=true data-fgColor="#B94A48" data-thickness=.3 value="29">
</div>
<div class="span2">
 <input class="knob" data-width="100" data-min="-100" data-fgColor="#F89406" data-displayPrevious=true value="44">     	
</div><!--/span-->
</div><!--/row-->




<script>
    $(function() {

        $(".knob").knob({
            /*change : function (value) {
             //console.log("change : " + value);
             },
             release : function (value) {
             console.log("release : " + value);
             },
             cancel : function () {
             console.log("cancel : " + this.value);
             },*/
            draw: function() {

                // "tron" case
                if (this.$.data('skin') == 'tron') {

                    var a = this.angle(this.cv)  // Angle
                            , sa = this.startAngle          // Previous start angle
                            , sat = this.startAngle         // Start angle
                            , ea                            // Previous end angle
                            , eat = sat + a                 // End angle
                            , r = 1;

                    this.g.lineWidth = this.lineWidth;

                    this.o.cursor
                            && (sat = eat - 0.3)
                            && (eat = eat + 0.3);

                    if (this.o.displayPrevious) {
                        ea = this.startAngle + this.angle(this.v);
                        this.o.cursor
                                && (sa = ea - 0.3)
                                && (ea = ea + 0.3);
                        this.g.beginPath();
                        this.g.strokeStyle = this.pColor;
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                        this.g.stroke();
                    }

                    this.g.beginPath();
                    this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                    this.g.stroke();

                    this.g.lineWidth = 2;
                    this.g.beginPath();
                    this.g.strokeStyle = this.o.fgColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                    this.g.stroke();

                    return false;
                }
            }
        });

        // Example of infinite knob, iPod click wheel
        var v, up = 0, down = 0, i = 0
                , $idir = $("div.idir")
                , $ival = $("div.ival")
                , incr = function() {
                    i++;
                    $idir.show().html("+").fadeOut();
                    $ival.html(i);
                }
        , decr = function() {
            i--;
            $idir.show().html("-").fadeOut();
            $ival.html(i);
        };
        $("input.infinite").knob(
                {
                    min: 0
                    , max: 20
                    , stopper: false
                    , change: function() {
                        if (v > this.cv) {
                            if (up) {
                                decr();
                                up = 0;
                            } else {
                                up = 1;
                                down = 0;
                            }
                        } else {
                            if (v < this.cv) {
                                if (down) {
                                    incr();
                                    down = 0;
                                } else {
                                    down = 1;
                                    up = 0;
                                }
                            }
                        }
                        v = this.cv;
                    }
                });
    });
</script>
