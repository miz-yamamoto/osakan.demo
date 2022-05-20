<?php
/*
Template Name: --------
*/
    get_header();
?>

<section class="recruitment">
    <div class="recruitment-text"><span>大学生アルバイト募集中</span></div>
</section>

<section class="staff-blog">
<?php
if ( have_posts() ) {
  while ( have_posts() ){
    the_post();
    ?>
    <div class="blog-card">
        <div class="position">
            <div class="img">
                <img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>">
            </div>
            <span><?php $category = get_the_category(); $cat_name = $category[0]->cat_name; echo $cat_name; ?></span>
        </div>
        <h2>
            <?php the_title(); ?>
        </h2>
        <p>
            <?php
                // １、投稿テキストを取得する
                $content = get_the_content();

                // ２，HTMLタグをすべて取り除く
                $content = wp_strip_all_tags( $content );

                // ３．ショートコードを取り除く
                $content = strip_shortcodes( $content );

                // ４、出力する
                // echo $content;
                // echo mb_substr($content, 0, 9).'…';
                // echo "<br>";
                echo mb_strimwidth("$content", 0, 80, "...", 'UTF-8');
            ?>
        </p>
        <p class="date"><?php the_time("y年m月d日"); ?></p>
    </div>
    <?php
  }
}
?>
</section>

<!-- paginationの実装 -->
<?php the_posts_pagination(
    array(
        'mid_size'      => 1, // 現在ページの左右に表示するページ番号の数
        'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
        'prev_text'     => __(' '), // 「<」リンクのテキスト ::afterでつけてる
        'next_text'     => __(' '), // 「>」リンクのテキスト ::afterでつけてる
    )
)
// the_posts_pagination()の中身
//     <nav class="navigation pagination" role="navigation">
//         <h2 class="screen-reader-text">投稿ナビゲーション</h2>
//         <div class="nav-links">
//             <a class="prev page-numbers" href="http://localhost/minimalist/">前へ</a>
//             <a class="page-numbers" href="http://localhost/minimalist/">1</a>
//             <span class="page-numbers current">2</span> 今いるページ
//             <a class="page-numbers" href="http://localhost/minimalist/page/3/">3</a>
//             <span class="page-numbers dots">…</span>
//             <a class="page-numbers" href="http://localhost/minimalist/page/8/">8</a>
//             <a class="next page-numbers" href="http://localhost/minimalist/page/3/">次へ</a>
//         </div>
//     </nav>
; ?>



<?php get_footer() ?>