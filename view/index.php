<?php
    include 'head.php';
    if(daddslashes($_GET['orderid'])){
        $orderid = daddslashes($_GET['orderid']);
        $chouqu = daddslashes($_GET['chouqu']);
        echo '<script type="text/javascript" src="./public/index/js/main.js?var='.config('var').'"></script>';
        ticheng($orderid,$chouqu);
    }
    
    $manghe_nan = $DB->getColumn("SELECT count(*) FROM `pre_manghe` WHERE `sex`=1 AND `for_user` IS NULL AND `ok`='1' AND `from_user`!='{$userInfo['user']}'");
    $manghe_nv = $DB->getColumn("SELECT count(*) FROM `pre_manghe` WHERE `sex`=0 AND `for_user` IS NULL AND `ok`='1' AND `from_user`!='{$userInfo['user']}'");

?>
<style>
.auto-layer{
	width:300px;
}
</style>
<section class="aui-flexView">
            <section class="aui-scrollView">
                <div class="m-slider" data-ydui-slider="">
                    <div class="slider-wrapper" style="transform: translate3d(-4374px, 0px, 0px); transition-duration: 300ms;">
                        <div class="slider-item" style="width: 1458px;">
                            <a href="<?php echo config('img1_url');?>">
                                <img src="<?php echo config('img1');?>">
                            </a>
                        </div>
                        <div class="slider-item" style="width: 1458px;">
                            <a href="<?php echo config('img2_url');?>">
                                <img src="<?php echo config('img2');?>">
                            </a>
                        </div>
                        <div class="slider-item" style="width: 1458px;">
                            <a href="<?php echo config('img3_url');?>">
                                <img src="<?php echo config('img3');?>">
                            </a>
                        </div></div>
                    <div class="slider-pagination"></div>
                </div>
                <div class="aui-flex aui-flex-white">
                    <div class="aui-sml-logo">
                        <img src="<?php echo $HTTP_HOST;?>/public/index/img/tj.jpg" alt="">
                    </div>
                    <div class="aui-flex-box">
                        <h2>????????????</h2>
                        <p>??????????????????<?php echo $manghe_nv;?>??????????????????<?php echo $manghe_nan;?>???~</p>
                    </div>
                </div>
                <div class="aui-list-theme">
                    <a onclick="manghe('nan','<?php echo $order_id?>')" class="aui-list-theme-item">
                        <div class="aui-list-title">
                            <h3>????????????</h3>
                            <div class="aui-flex">
                                <div class="aui-flex-box">
                                    <span>????????????????????????~</span>
                                </div>
                                <div class="aui-flex-icon-sm">
                                    <img src="<?php echo $HTTP_HOST;?>/public/index/img/icon-001.png" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a onclick="manghe('nv','<?php echo $order_id?>')" style="text-decoration: none" class="aui-list-theme-item aui-list-color">
                        <div class="aui-list-title">
                            <h3>????????????</h3>
                            <div class="aui-flex">
                                <div class="aui-flex-box">
                                    <span>????????????????????????~</span>
                                </div>
                                <div class="aui-flex-icon-sm">
                                    <img src="<?php echo $HTTP_HOST;?>/public/index/img/icon-003.png" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="?mod=toudi" class="aui-list-theme-item aui-list-color1">
                        <div class="aui-list-title">
                            <h3>????????????</h3>
                            <div class="aui-flex">
                                <div class="aui-flex-box">
                                    <span>?????????????????????~</span>
                                </div>
                                <div class="aui-flex-icon-sm">
                                    <img src="/public/index/img/icon-004.png" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                     <a href="?mod=manghe" class="aui-list-theme-item">
                        <div class="aui-list-title">
                            <h3>????????????</h3>
                            <div class="aui-flex">
                                <div class="aui-flex-box">
                                    <span>????????????????????????~</span>
                                </div>
                                <div class="aui-flex-icon-sm">
                                    <img src="/public/index/img/icon-003.png" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="aui-flex">
                    <div class="aui-flex-box">
                        <img src="/public/index/img/icon-title.png" alt="">
                    </div>
                    <div class="aui-arrow">
                        <a href="?mod=tool" style="color:red;"><p>????????????</p></a>
                    </div>
                </div>
               
                <?php
                    if(config('first_toudi')){
                        echo '<div class="aui-local-box">
                    <div class="aui-flex">
                        <div class="aui-flex-box">
                            <div class="aui-jiu-logo">
                                <img src="/public/index/img/zan.png" alt="">
                            </div>
                            <div class="aui-head-info">????????????????????????</div>
                        </div>
                        <div class="aui-head-button">
                            <a href="?mod=toudi">
	                        <div class="aui-head-button">
	                            <button>????????????</button>
	                        </div>
                        </a>
                        </div>
                    </div>
                </div>';
                    }
                ?>
             <div class="aui-local-box">
                    <div class="aui-flex">
                        <div class="aui-flex-box">
                            <div class="aui-jiu-logo">
                                <img src="/public/index/img/kf.png" alt="">
                            </div>
                            <div class="aui-head-info">??????QQ??????</div>
                        </div>
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $kfqq;?>&site=qq&menu=yes">
	                        <div class="aui-head-button">
	                            <button>QQ??????</button>
	                        </div>
                        </a>
                    </div>
                </div>
                <div class="aui-local-box">
                    <div class="aui-flex">
                        <div class="aui-flex-box">
                            <div class="aui-jiu-logo">
                                <img src="/public/index/img/kf.png" alt="">
                            </div>
                            <div class="aui-head-info">??????????????????</div>
                        </div>
                        <a onclick="layer.alert('???????????????: <?php echo $kfwx;?>')">
	                        <div class="aui-head-button">
	                            <button>????????????</button>
	                        </div>
                        </a>
                    </div>
                </div>
                <br><br><br><br><br><br><br>
            </section>
            <?php include 'foot.php'?>
        </section>
</body>
</html>