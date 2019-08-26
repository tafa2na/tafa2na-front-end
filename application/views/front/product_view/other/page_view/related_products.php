<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/front/plugins/owl-carousel2/assets/owl.carousel.min.css">   
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/front/plugins/owl-carousel2/assets/owl.theme.default.min.css">
<script type="text/javascript" src="<?php echo base_url();?>template/front/plugins/owl-carousel2/owl.carousel.min.js"></script>

<section class="page-section featured-products sl-featured">
    <div class="container">
        <h2 class="section-title section-title-lg section-title-2">
            <span><?php echo translate('related_products');?> </span>
        </h2>
        <div class="carousel-arrow-alt">
        <div class="owl-carousel carousel-arrow" id="featured-products-carousel">
                    <?php
                   
                     $box_style = 5;
                    
                        $recommends=$this->crud_model->product_list_set('related',12,$row['product_id']);
                        foreach($recommends as $rec){
                            

                    echo $this->html_model->product_box($rec, 'grid', $box_style);
                    
                        }
                    ?>
        </div>
    </div>
    </div>
</section>
