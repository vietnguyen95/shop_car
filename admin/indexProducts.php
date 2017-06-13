<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/templates/admin/inc/header.php'?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/dbconnect.php";?>
<div id="page-wrapper">
        <?php 
            $query="SELECT p.*,p.id As pid,p.name AS pname, c.*,c.name AS cname FROM products AS p INNER JOIN category AS c ON p.id_category=c.id";
            $result=$mysqli -> query($query);
         ?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh sách sản phẩm</h1>
                     <div class="sub">
                        <a href="addProducts.php"  class="btn btn-default colorr"><i style="background-color: red;" class="fa fa-plus-square " ></i> Thêm mới</a>
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
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th >STT</th>
                                        <th>Hình ảnh</th>
                                        <th>Tên Sản phẩm</th>
                                        <th>Tên Danh Mục</th>
                                        <th>Giá bán</th>
                                        <th>Trạng Thái</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($arPro=mysqli_fetch_assoc($result)) {
                                    $id=$arPro["pid"];
                                    $name=$arPro["pname"]; 
                                    $id_cat=$arPro["cname"];
                                    $image= $arPro["image"];
                                    $urlimage="/files/" . $image;
                                    $price=$arPro["price"];
                                    $status=$arPro["status"];

                                      $selected='';
                                   ?>
                                    <tr class="odd gradeX">
                                        <td style="text-align: center;" ><?php echo $id; ?></td>
                                        <?php if($image == ""){?>
                                             <td style="text-align: center;" >--chưa update--</td> 
                                        <?php } else{?>
                                            <td style="text-align: center;"><img width="150px;" height="100px;" src="<?php echo $urlimage; ?>" class="hoa" /></td> 
                                            <?php } ?>
                                        <td ><?php echo $name; ?></td> 
                                        <td style="text-align: center;"><?php echo $id_cat ?></td> 
                                        
                                        <td style="text-align: center;"><?php echo $price; ?></td> 
                                        
                                        <td id="setStatus1-<?php echo $id; ?>">
                                        
                                            <?php 
                                            $checkselect = '';
                                            $e = array(1,0);
                                            foreach ($e as $value) {
                                                if($value == $status)
                                                {
                                                  $checkselect = "selected";
                                                }
                                                else{
                                                    $checkselect = "";
                                                }
                                            }
                                            ?>
                                            <select onchange = "setStatus1(this,<?php echo $id; ?>);" name="status" data="<?php echo $id; ?>" class="form-control changeStatus" data-id=1  id="setStatus-<?php echo $id; ?>">
                                                 <option <?php echo $checkselect; ?> value="1">hiện</option>
                                                  <option <?php echo $checkselect; ?> value="0">Ẩn</option>
                                            </select>

                                            
                                        </td>
                                       
                                        <td  class="center al"><a href="delProducts.php?pid=<?php echo $id; ?> " onclick="return confirm('bạn có muốn xóa không')" class="btn btn-danger"><i class="fa fa-trash-o  fa-fw"></i> Delete</a></td>
                                        <td class="center al"><a href="editProducts.php?pid=<?php echo $id; ?>  " class="btn btn-default"><i class="fa fa-pencil fa-fw"></i> Edit</a></td>

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
    </script>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/templates/admin/inc/footer.php'?>

