<ul class="nav nav-pills nav-stacked">
    <li>
        <a href = "<?php echo $this->createAbsoluteUrl('Category/admin',array())?>">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/icon/cat.jpg"
                 data-src="holder.js/50x50"
                 class="img-responsive lazy img-navbar-left"
                 align="middle"/>
            จัดการหมวดหมู่สินค้า
        </a>
    </li>
    <li>
        <a href = "<?php echo $this->createAbsoluteUrl('shop/admin',array())?>">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/icon/shop.jpg"
                 data-src="holder.js/50x50"
                 class="img-responsive lazy img-navbar-left"
                 align="middle"/>
            จัดการร้านค้า
        </a>
    </li>
    <li>
        <a href = "<?php echo $this->createAbsoluteUrl('member/admin',array())?>">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/icon/member.png"
                 data-src="holder.js/50x50"
                 class="img-responsive lazy img-navbar-left"
                 align="middle"/>
            จัดการสมาชิก
        </a>
    </li><li>
        <a href = "<?php echo $this->createAbsoluteUrl('CatShop/admin',array())?>">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/icon/shop.jpg"
                 data-src="holder.js/50x50"
                 class="img-responsive lazy img-navbar-left"
                 align="middle"/>
            จัดการหมวดร้านค้า
        </a>
    </li>
    <li>
        <a href = "<?php echo $this->createAbsoluteUrl('admin/admin',array())?>">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/icon/admin.png"
                 data-src="holder.js/50x50"
                 class="img-responsive lazy img-navbar-left"
                 align="middle"/>
            จัดการแอดมิน
        </a>
    </li>
</ul>