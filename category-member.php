<?php
/*
Template Name: --------
*/
    get_header();
?>

<section class="recruitment">
    <div class="recruitment-text"><span>大学生アルバイト募集中</span></div>
</section>

<section class="member">
    <section class="member-list">
        <?php
        if ( have_posts() ) {
        while ( have_posts() ){
            the_post();
            ?>
            <div class="member-card">
                    <div class="img"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>"></div>
                <h2>
                    <?php
                        $member_name = the_title();
                        echo mb_strimwidth("$member_name", 0, 8, "...", 'UTF-8');
                    ?>
                </h2>
                <p class="tag"><?php the_tags("") ?></p>
                <p>
                    <?php
                        // １、投稿テキストを取得する
                        $content = get_the_content();

                        // ２，HTMLタグをすべて取り除く
                        $content = wp_strip_all_tags( $content );

                        // ３．ショートコードを取り除く
                        $content = strip_shortcodes( $content );

                        // ４、出力する
                        echo mb_strimwidth("$content", 0, 80, "...", 'UTF-8');
                    ?>
                </p>
            </div>

            <?php
            }
        }
        ?>
    </section>
    <section >
        <a class="ob_btn" href=""><img src="<?php echo get_template_directory_uri(); ?>/images/member/ob.png" alt="ob"></a>
    </section>
</section>



<?php get_footer() ?>