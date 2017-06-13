<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/slug.php";?>
<?php 
	$id=$_POST["aid"];
	$aview=$_POST["aview"];
	if($aview == 0){
		$que="UPDATE `order` SET `viewstatus`=1 where id={$id} limit 1";
		$re=$mysqli -> query($que);
	}
	$query="SELECT * FROM `order` where id={$id} limit 1";
	$result=$mysqli ->query($query);
	$arow=mysqli_fetch_assoc($result);
	$idUser=$arow["id_user"];
	$fullname=$arow["fullname"];
	$phone=$arow["phone"];
	$address=$arow["address"];
	$detailshopping=$arow["detailshopping"];
    $detai=unserialize($detailshopping);

    $sql="SELECT * FROM users where id={$idUser} limit 1";
	$resu=$mysqli ->query($sql);
	$row=mysqli_fetch_assoc($resu);
	$email=$row["email"];
 ?>
 <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title text-center">CHI TIẾT HÓA ĐƠN KHÁCH HÀNG</h4>
        </div>
        <div class="modal-body-">
            <h5 class="titlett">THÔNG TIN KHÁCH HÀNG:</h5>
            <P>Họ tên : <span class="viewcolor"><?php echo $fullname; ?></span> || Số điện thoại: <span class="viewcolor"><?php echo $phone; ?></span></P>
            <p>Tài khoản đăng nhập: <span class="viewcolor"><?php echo $email; ?></span></p>
            <p>Địa chỉ nhận hàng: <span class="viewcolor"><?php echo $address; ?></span></p>
            <h5 class="titlett">THÔNG TIN SẢN PHẨM:</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Thông tin sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá bán</th>
                        <th colspan="2">Tổng tiền</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                	$thanhtien=0;
                 foreach ($detai as $key => $value) {
                        $name=$value["aname"];
                        $sl=$value["asoluong"];
                        $aprice=$value["aprice"];
                        $tong=$aprice*$sl;
                        $thanhtien+=$tong;
                     ?>
                    <tr>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $sl; ?></td>
                        <td><?php echo adddotstring($aprice); ?>(vnđ)</td>
                        <td colspan="2"><?php echo adddotstring($tong); ?>(vnđ)</td>
                    </tr>
                <?php } ?>    
                    <tr>
                        <td colspan="4">Thành Tiền:</td>
                        <td><?php echo adddotstring($thanhtien); ?>(vnđ)</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <a  class="btn btn-default" href="" title="Chuyển hàng">Chuyển hàng</a>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>