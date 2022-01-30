<!--Main Navigation-->
<header>

  <?php require( get_stylesheet_directory() . '/modified-navbar.php'); ?>


            <!--Grid row-->
            <div class="container-fluid"> <!--- add row -->

                <!--Grid column-->
                <div class="col-md-6 text-center">

                    <h1 class="font-weight-bold mb-4 text-white"><?php the_title();?></h1>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>

    </div>
    <!-- Intro -->

</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
    <div class="container">

        <!--Section: Post-->
        <section class="mt-3">

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-sm-8 mb-4">

                    <!-- Breadcrumbs -->
                    <!-- Breadcrumbs -->
<?php
$categories = get_the_category();
$first_category_name = $categories[0]->cat_name;
$first_category_id = get_cat_ID( $category[0]->cat_name );
$first_category_link = get_category_link( $category_id );
?>
<ol class="breadcrumb white z-depth-1">
    <li class="breadcrumb-item">
        <a href="<?php echo get_home_url(); ?>">Home Page</a>
    </li>
    <?php
    if (count($categories)){
    ?>
    <li class="breadcrumb-item">
        <a href="<?php echo $first_category_link ?>"><?php echo $first_category_name ?></a>
    </li>
    <?php
    }
    ?>
    <li class="breadcrumb-item active"><?php the_title() ?></li>
</ol>
<!-- Breadcrumbs -->
                    <!-- Breadcrumbs -->

                   
                    <!--Card-->
                    <div class="card mb-4">
                    <!-- Featured image -->
                    <img style="height: 500px;" src="<?php the_field('image');?>" alt="">
                        <!--Card content-->
                        <div class="card-body">

      <p>by <a href=""><?php get_the_author();?></a> on <?php echo get_the_date(); ?></p>

                            <hr>

                            <p class="h5 my-4"><?php the_content();?></p>

                           

                            <blockquote class="blockquote">

                                <footer class="blockquote-footer">
                                    <cite title="Source Title"></cite>
                                </footer>
                            </blockquote>
<hr>
<div class="text-right" id="the_price"><b><?php the_field('price')?> $</b></div>
                </div>

                    </div>
                    <!--/.Card-->

                    
                    <!--Reply-->
                    <div class="card mb-3 wow fadeIn">
                        <div class="card-header font-weight-bold">Leave a reply</div>
                        <div class="card-body">

                            <!-- Default form reply -->
                            <form>

                                <!-- Comment -->
                                <div class="form-group">
                                    <label for="replyFormComment">Your comment</label>
                                    <textarea class="form-control" id="replyFormComment" rows="5"></textarea>
                                </div>

                                <!-- Name -->
                                <label for="replyFormName">Your name</label>
                                <input type="email" id="replyFormName" class="form-control">

                                <br>

                                <!-- Email -->
                                <label for="replyFormEmail">Your e-mail</label>
                                <input type="email" id="replyFormEmail" class="form-control">


                                <div class="text-center mt-4">
                                    <button class="btn btn-info btn-md" type="submit">Post</button>
                                </div>
                            </form>
                            <!-- Default form reply -->



                        </div>
                    </div>
                    <!--/.Reply-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <!-- Sticky content -->
                    <div class="sticky">
                        <!--Section: Dynamic Content Wrapper-->
                        <section>
                          <div id="dynamic-content"></div>

                        </section>
                        <!--Section: Dynamic Content Wrapper-->

                        <!--Card-->
                        <div class="card mb-4">

                            <div class="card-header">Related Posts</div>

                            <!--Card content-->
                            <div class="card-body">
 
                               
                                   
                                 

<?php wcr_related_posts()?>
                            </div>

                        </div>
                        <!--/.Card-->

                        <div class="card mb-4">
                            <div class="card-header">Sidebar</div>
<?php get_sidebar('sidebar-primary'); ?>
</div>

                    </div>
                    <!-- Sticky content -->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Post-->


</main>
<!--Main layout-->
<?php  get_footer();