<?php 
    require_once  __DIR__. "/autoload/autoload.php"; 
    $sqlHomecate = "SELECT name,id FROM category WHERE home ";  
    $CategoryHome = $db->fetchsql($sqlHomecate);
    $data = [];
        foreach ($CategoryHome as $item)
         {
        $cateId = intval($item['id']);
        $sql = " SELECT * FROM product WHERE category_id = $cateId";
        $ProductHome = $db->fetchsql($sql);
        $data[$item['name']] = $ProductHome;
        }
 ?>

<?php require_once  __DIR__. "/layouts/header.php"; ?>
<section style="
    width: 1349px;
">
    <h2
        style="position: absolute;top:400px;left:900px;text-align: center;text-decoration: none;font-size: 28px;display: inline-block;font-family: 'Dancing Script', cursive;">
        Tôi xin làm "Quán Đợi"<br>Buồn chân em ghé chơi
    </h2>
    <a href="main.php" class="button w3-button w3-border w3-hover-red"
        style="position:absolute;margin-top:380px;margin-left:940px;height:44px;background-color:#fff;border: none;border-radius: 99px;
    padding:10px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;color:#666666">Menu Cafe Đợi</a>
    <img src=" ./public/frontend/images/banner.jpg" class="right" alt="Image" style="width:1349px;height:680px">
</section>

<section style="
    width: 1349px;
">
    <div class="" style="height:260px; background-color:#D8D8D8">
        <div class="col-md-4" style="height:200px;padding-left: 50px">
            <div class="col-inner" style="margin-top: 50px;width: 400px;padding-right: 50px;">
                <div class="icon-box featured-box icon-box-left text-left" style="text-align: left;display: flex;">
                    <div class="icon-box-img" style="width: 62px">
                        <div class="icon">
                            <div class="icon-inner">
                                <img width="62" height="62" src="./public/frontend/images/ou.png"
                                    class="attachment-medium size-medium" alt="img_outleft"> </div>
                        </div>
                    </div>
                    <div class="icon-box-text last-reset" style="padding-left: 1em;">

                        <h3 style="font-family: 'Dancing Script', cursive;">Cà Phê 100% Nguyên Chất - Rang Mộc</h3>
                        <br>
                        <p style="font-family: 'MuseoModerno', cursive;"><em
                                style="font-size:16px;font-family: 'MuseoModerno', cursive;">Thưởng thức cà phê chuẩn
                                tại Quảng Nam,
                                được phân
                                phối cà phê hạt, cà phê rang xay từ Đà
                                Lạt.</em></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="height:200px; padding-left: 30px; padding-right: 30px;">
            <div class="col-inner" style="margin-top: 50px;width: 400px;padding-right: 50px;">
                <div class="icon-box featured-box icon-box-left text-left" style="text-align: left;display: flex;">
                    <div class="icon-box-img" style="width: 62px">
                        <div class="icon">
                            <div class="icon-inner">
                                <img width="62" height="62" src="./public/frontend/images/se.png"
                                    class="attachment-medium size-medium" alt="img_outleft"> </div>
                        </div>
                    </div>
                    <div class="icon-box-text last-reset" style="padding-left: 1em;">

                        <h3 style="font-family: 'Dancing Script', cursive;">Gu Cafe Phong Phú Với Nhiều Các Kiểu Pha
                        </h3>
                        <br>
                        <p style="font-family: 'MuseoModerno', cursive;"><em
                                style="font-size:16px;font-family: 'MuseoModerno', cursive;">Sản phẩm của chúng tôi có
                                nhiều Gu & Cách Pha để bạn chọn lựa.</em></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="height:200px; padding-left: 15px;padding-right: 50px;">
            <div class="col-inner" style="margin-top: 50px;width: 400px;padding-right: 50px;">
                <div class="icon-box featured-box icon-box-left text-left" style="text-align: left;display: flex;">
                    <div class="icon-box-img" style="width: 62px">
                        <div class="icon">
                            <div class="icon-inner">
                                <img width="62" height="62" src="./public/frontend/images/tn.png"
                                    class="attachment-medium size-medium" alt="img_outleft"> </div>
                        </div>
                    </div>
                    <div class="icon-box-text last-reset" style="padding-left: 1em;">

                        <h3 style="font-family: 'Dancing Script', cursive;">Chứng Nhận An Toàn Vệ Sinh Thực Phẩm</h3>
                        <br>
                        <p style="font-family: 'MuseoModerno', cursive;"><em
                                style="font-size:16px;font-family: 'MuseoModerno', cursive;">Đợi hướng tới đào tạo
                                nhân lực pha chế,
                                đào tạo để mở rộng menu đồ uống
                                cho các quán cà phê.</em></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="height:240px;width:1349px;background-color:white;">
    <div class="col-md-9" style="height:200px;padding-left: 200px;padding-right: 200px;width: 1349px;">
        <div class=" col-inner" style="margin-top: 20px;width: auto;">
            <div class="icon-box featured-box icon-box-left text-left" style="text-align: left;display: flex;">
                <div class="icon-box-img" style="width: 150px">
                    <div class="icon">
                        <div class="icon-inner">
                            <img width="150px" height="150px" src="./public/frontend/images/logo.png"
                                class="attachment-medium size-medium" alt="img_outleft"> </div>
                    </div>
                </div>
                <div class="icon-box-text last-reset" style="padding-left: 1em;margin-top:30px;font-size:20px">
                    <h3 style="font-family: 'Dancing Script', cursive;">Bắt đầu ngày mới cùng “Đợi Cafe”</h3>
                    <br>
                    <p style="font-size:20px"><em style="font-size:16px;font-family: 'MuseoModerno', cursive;">Với
                            nhiều kinh nghiệm
                            nghiên cứu về cafe, Đợi tin rằng có thể mang đến
                            cho
                            các bạn những trải nghiệm tuyệt vời nhất.</em></p>
                </div>
                <div><img src="./public/frontend/images/gi.gif"
                        style="height: 160px;padding-top: 10px;padding-left: 10px;border-radius: 99px;"></img></div>
            </div>
        </div>
    </div>
</section>

<section style="width: 1349px;" style="float:left">
    <div class="" style="text-align:center">
        <h3
            style="width:1349px;text-align: center;text-decoration: none;font-size: 28px;display: inline-block;font-family: 'Dancing Script', cursive;padding-left: 200px;padding-right: 200px;padding-bottom: 5px;padding-top: 5px;">
            --- Sản Phẩm Mới ---</h3>
        <ul>
            <?php foreach ($productNew as $item):?>
            <li class="clearfix" style="float:left;padding:20px 20px 20px 45px">
                <a href="chi-tiet-san-pham.php?id= <?php echo $item['id'] ?>">
                    <img src="<?php echo uploads() ?>/product/<?php echo $item['thunbar']?>"
                        style="width:200px;height:200px;border-radius:50%" class="img-responsive">
                    <div class="info" style="float:left;width:200px">
                        <p class="name" style="width:200px;text-align: center;text-decoration: none;padding:20px 0px">
                            <?php echo $item['name'] ?></p>
                        <?php if ($item['sale'] > 0): ?>
                        <p> <strike class="sale"><?php echo formatPrice($item['price']) ?>
                            </strike></br> <b
                                class="price"><?php echo formatpricesale($item['price'],$item['sale']) ?></b>
                            <?php else: ?>
                            <b class="price"><?php echo formatPrice($item['price']) ?></b>
                            <?php endif ?>
                    </div>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        <a href="main.php"
            style="width:1220px;padding:5px 450px;color:4c4c4c;text-align: center;text-decoration: none;font-size: 20px;display: inline-block;font-family: 'Dancing Script', cursive;">
           ( Xem Thêm Sản Phẩm )
        </a>
    </div>
</section>

<section style="margin-top:10px;float:left;height:750px;width: 1349px;background-image:url(./public/frontend/images/tea.jpg);">
    <div style="padding:80px 60px"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d245784.6909725845!2d108.2561357751355!3d15.73071731682327!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31420a7361a9d4ed%3A0xb8d4e1a8595ce366!2zSzI4MywgMjUgVGnhu4N1IExhLCB0dC4gSMOgIExhbSwgVGjEg25nIELDrG5oLCBRdeG6o25nIE5hbSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2sus!4v1593584532858!5m2!1svi!2sus" width="1200" height="550" frameborder="0" style="border-radius:20px;border:0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <h2
            style="width:1220px;padding:5px 450px;color:white;text-align: center;text-decoration: none;font-size: 28px;display: inline-block;font-family: 'Dancing Script', cursive;">
            <i class="fas fa-map-marker-alt"
                style="color:white;text-align: center;text-decoration: none;font-size: 28px;display: inline-block;padding-right:15px"></i>Quảng
            Nam - Việt Nam
        </h2>
    </div>
</section>

<?php require_once  __DIR__. "/layouts/footer.php"; ?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
</style>
<style>
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Fahkwang:wght@200&display=swap');
</style>