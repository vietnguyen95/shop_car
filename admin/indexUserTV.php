<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/templates/admin/inc/header.php'?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<div id="page-wrapper">
        <?php 
            $query="select * from users where status=0";
            $result=$mysqli -> query($query);
         ?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh sách quản trị</h1>
                     <div class="sub">
                        <a href="addUser.php"  class="btn btn-default colorr"><i style="background-color: red;" class="fa fa-plus-square " ></i> Thêm mới</a>
                    </div>
                    <?php 
                        if(isset($_GET["msg"])){
                            $msg=$_GET["msg"];
                            if($msg == 1){
                                echo "<p style='color: green;'><strong>Thực hiện thành công!</strong></p>"; 
                            }else if($msg == 0){
                                echo "<p style='color: red;'><strong>Thực hiện thất bại !</strong></p>";
                            }
                            else if($msg == 3){
                                echo "<p style='color: red;'><strong>không có quyền xóa!</strong></p>";    
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
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Địa chỉ</th>
                                        <th>SDT</th>
                                        <th>Fullname</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=0;    
                                     while ($arUser=mysqli_fetch_assoc($result)) {
                                    $i+=1;
                                    $id=$arUser["id"];
                                    $username=$arUser["username"]; 
                                    $email=$arUser["email"];
                                    $phone= $arUser["phone"];
                                    $address=$arUser["address"];
                                    $fullname=$arUser["fullname"];
                                   ?>
                                    <tr class="odd gradeX">
                                        <td style="text-align: center;" ><?php echo $i; ?></td>
                                        <td style="text-align: center;" ><?php echo $username; ?></td> 
                                        <td ><?php echo $email; ?></td> 
                                        <td style="text-align: center;"><?php echo $address ?></td> 
                                        <td style="text-align: center;"><?php echo $phone; ?></td> 
                                        <td ><?php echo $fullname; ?></td>
                                      
                                        <td  class="center al">
                                        <a href="delUser.php?uid=<?php echo $id; ?> " onclick="return confirm('bạn có muốn xóa không')" class="btn btn-danger"><i class="fa fa-trash-o  fa-fw"></i> Delete</a>
                                      </td>
                                        <td class="center al">
                                            
                                        <a href="editUser.php?uid=<?php echo $id; ?>" class="btn btn-default"><i class="fa fa-pencil fa-fw"></i>Edit</a>
                                        
                                        </td>


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
    <!-- <script>    
        function setStatus1(selectObject,id){
           
            var status = selectObject.value; 
            $.ajax({
                url: "/function/setProducts.php",
                type: 'POST',
                cache: false,
                data: {aid: id, astatus: status},
                success: function(data){
                     //$('#setStatus-' + id).html(data);
                     //alert (data);
                     
                },
                error: function (){
                    alert('Có lỗi xảy ra');
                }
            });
            return false;
        }
    </script> -->

<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/templates/admin/inc/footer.php'?>

