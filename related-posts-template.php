<style type="text/css">
    
#editlink{
    color: black;
}

#editlink:hover{
    transition: .5s;
    text-decoration: none;
    color: red;
}


</style>


<?php if (!empty($related_posts)) { ?>
        <div class="related-posts">
        

        <div class="container-fluid related-posts-list">
            <div class="row">
                 <div class="col-xs-12 ">
    <div class="be-post style-2">
            <?php
            foreach ($related_posts as $post) {
                setup_postdata($post);
            ?>
           
                <a id="editlink" class="title" href="<?php the_permalink(); ?>"  title="<?php the_title_attribute(); ?>">
                    
                    <div class="thumb">
                        <img style="width: 170px;height: 100px;" src="<?php the_field('image');?>" alt="">
                    </div>
                
                    <h4><?php the_title(); ?></h4>
                </a>
      <hr><br>
            <?php } ?>
        </div>
        </div>
    </div>
       </div> 
        <div class="clearfix"></div>
    </div>
<?php
}   