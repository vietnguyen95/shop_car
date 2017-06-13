<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/templates/admin/inc/header.php'?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<div id="page-wrapper">
<?php 
            $query="SELECT * FROM `order`";
            $result=$mysqli -> query($query);
         ?>
        
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh sách mua hàng</h1>
                </div>
                  <?php 
                        if(isset($_GET["msg"])){
                            $msg=$_GET["msg"];
                            if($msg == 1){
                                echo "<p style='color: green;'><strong>Thực hiện thành công!</strong></p>"; 
                            }else if($msg == 0){
                                echo "<p style='color: red;'><strong>Thực hiện thất bại !</strong></p>";
                            }
                        }
                     ?> 
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <input type="hidden" name="_token" value="5M6aeYnxenDEsaLzRErPP7knX2pES4rXcflGBQGF">
            <tr align="center">
                <th>ID</th>
                <th>Họ tên</th>
                <th>Số điện thoại</th>
                <th>Chuyển Hàng</th>
                <th>Trạng thái</th>
                <th>Ngày đặt mua</th>
                <th>Xem chi tiết</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($arOrder=mysqli_fetch_assoc($result)) {
                $id=$arOrder["id"];
                $fullname=$arOrder["fullname"];
                $phone=$arOrder["phone"];
                $created_at=$arOrder["created_at"];
                $viewstatus=$arOrder["viewstatus"];
                $detailshoping=$arOrder["detailshopping"];
                $detai=unserialize($detailshoping);
             ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $fullname; ?></td>
                <td><?php echo $phone; ?></td>
                <td>Đã chuyển hàng</td>
                <?php if($viewstatus == 1){ ?>
                <td id="views-<?php echo $id; ?>">Đã xem</td>
                <?php }else{ ?>
                <td id="views-<?php echo $id; ?>">Chưa xem</td>
                <?php } ?>
                <td><?php echo $created_at; ?></td>
                <td>
                    <a onclick="setorder(<?php echo $id; ?>,<?php echo $viewstatus; ?>)" class="btn btn-default viewOrder" data-id="<?php echo $id; ?>" data-views="views-<?php echo $id; ?>" data-toggle="modal" href="#modal-<?php echo $id; ?>"><i class="fa fa-eye" aria-hidden="true"></i> Xem chi tiết</a>
                     <div class="modal fade" id="modal-<?php echo $id; ?>">
                        
                    </div>
                </td>
                <td><a href="delorder.php?oid=<?php echo $id; ?>" onclick="return xacnhanxoa('bạn chắc muốn xóa')" title="xóa" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</a></td>
            </tr>
             <?php } ?>
        </tbody>
    </table>
                          
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
        </div>
        <!-- /#page-wrapper -->
        </div>
    </div>

    <!-- /#wrapper -->
    <script>    
        function setStatus(selectObject,id){
           $('.hinh').append('<img src="../templates/admin/dist/images/Loading_icon.gif">');
            var status = selectObject.value; 
            $.ajax({
                url: "function/setStatus.php",
                type: 'POST',
                cache: false,
                data: {aid: id, astatus: status},
                success: function(data){
                     //$('#setStatus-' + id).html(data);
                     //alert (data);

                     $('.hinh').html('');
                },
                error: function (){
                    alert('Có lỗi xảy ra');
                }
            });
            return false;
        }
        function setorder(id,viewstatus){
            $.ajax({
                url: "function/setOrder.php",
                type: 'POST',
                cache: false,
                data: {aid: id,aview: viewstatus},
                success: function(data){
                     // alert(data);
                     $('#modal-' + id).html(data);
                },
                error: function (){
                    alert('Có lỗi xảy ra');
                }
            });
            return false;
        }
    </script>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/templates/admin/inc/footer.php'?>

