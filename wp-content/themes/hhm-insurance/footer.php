        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-12">
                        <div class="mb-5">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <?php
                                        if (is_active_sidebar("footer-1")){
                                            dynamic_sidebar("footer-1");
                                        }
                                    ?>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <?php
                                        if (is_active_sidebar("footer-2")){
                                            dynamic_sidebar("footer-2");
                                        }
                                    ?>
                                </div>
                                <div class="col-md-12 col-lg-12 col-xl-4">
                                    <?php
                                        if (is_active_sidebar("footer-3")){
                                            dynamic_sidebar("footer-3");
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <span class="text-body"><a href="<?php home_url();?>" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i><?php echo bloginfo(); ?></a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-start text-body">
                        Developed by<a class="border-bottom text-white" href="https://bmhhmartin.vercel.app/"> bmhhmartin</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   
        
        <?php wp_footer(); ?>
    </body>

</html>