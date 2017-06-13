<?php $active = 'shop' ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/public/inc/header.php";?>
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/function/shop.php";?>
                
            </div>
            <script type="text/javascript">
            function getProduct(id){
                $.ajax({
                    url: 'function/ajaxCart.php',
                    type: 'POST',
                    cache: false,
                    data: {aid: id},
                    success: function(data){
                       //alert(data);
                       $('.shopping-item').html(data);
                    },
                    error: function (){
                        alert('Có lỗi xảy ra');
                    }
                });
              return false;  
            }
</script>
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/public/inc/footer.php";?>