<?php include "pages/header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                
                <div class="card">
                    <div class="card-header text-center">Prime Number</div>

                    <div class="card-body">

                        <form action="action.php" method="POST">

                            <div class="form-group row">    <!--Row-->
                                <label for="" class="col-md-3 col-form-label">Enter Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="given_number" id="" class="form-control">
                                </div>
                            </div>      <!--Row-->
                            <div class="form-group row">    <!--Row-->
                                <label for="" class="col-md-3 col-form-label">Result</label>
                                <div class="col-md-9">
                                    <input type="text" name="" id="" class="form-control" value="<?php echo isset($result) ? $result :''?>">
                                </div>
                            </div>      <!--Row-->
                            <div class="form-group row">    <!--Row-->
                                <label for="" class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="prime_btn" id="" class="btn btn-outline-success btn-block" value="submit">
                                </div>
                            </div>      <!--Row-->

                        </form>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    
</section>






<?php include "pages/footer.php"; ?>