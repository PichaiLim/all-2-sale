<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a href = "<?php echo $this->createAbsoluteUrl('/'); ?>" class="navbar-brand">
                <?php echo CHtml::encode(Yii::app()->name); ?>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
<!--                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
<!--                <li><a href="#">Link</a></li>-->
<!--                <li class="dropdown">-->
<!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a href="#">Action</a></li>-->
<!--                        <li><a href="#">Another action</a></li>-->
<!--                        <li><a href="#">Something else here</a></li>-->
<!--                        <li role="separator" class="divider"></li>-->
<!--                        <li><a href="#">Separated link</a></li>-->
<!--                        <li role="separator" class="divider"></li>-->
<!--                        <li><a href="#">One more separated link</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Welcome <?php echo Yii::app()->user->name; ?>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $this->createAbsoluteUrl('admin/index',array())?>">
                                <i class="fa fa-cogs"></i>
                                จัดการแอดมิน
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->createAbsoluteUrl('admin/update',array('id'=>Yii::app()
                                ->user->id =1))
                            ?>">
                                <i class="fa fa-pencil-square-o"></i>
                                แก้ไขข้อมูล
                            </a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="<?php echo $this->createAbsoluteUrl('home/logout',array('id'=>Yii::app()
                                ->user->id))?>">
                                <i class="fa fa-sign-out"></i>
                                ออกจากระบบ
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>