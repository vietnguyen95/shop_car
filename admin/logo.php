<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/templates/admin/inc/header.php'?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<div id="page-wrapper">
<?php 
    $query="select * from logo order by id DESC";
    $result=$mysqli -> query($query);

 ?>
        
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh sách logo</h1>
                     <div class="sub">
                        <a href="addLogo.php"  class="btn btn-default colorr"><i style="background-color: red;" class="fa fa-plus-square " ></i> Thêm mới</a>
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
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="hinh"></div>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th >STT</th>
                                        <th>image</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($arLogo=mysqli_fetch_assoc($result)) {
                                    $id=$arLogo["id"];
                                    $image=$arLogo["image"];  
                                    $urlImage="/files/" . $image;
                                    
                                   ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $id; ?></td>
                                        <?php if($image == ""){ ?>
                                            <td>==chưa update hình ảnh==</td> 
                                        <?php }else{ ?>
                                        <td>
                                            <img width="80px;" height="50px;" src="<?php echo $urlImage; ?>">
                                        </td> 
                                        <?php } ?>
                                        <td  class="center al"><a href="function/logo.php?lid=<?php echo $id; ?> " onclick="return confirm('bạn có muốn xóa không')" class="btn btn-danger"><i class="fa fa-trash-o  fa-fw"></i> Delete</a></td>
                                        

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
    </script>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/templates/admin/inc/footer.php'?>

