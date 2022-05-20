<?php
/*
Template Name: --------
*/
    get_header();
?>

<section class="recruitment">
    <div class="recruitment-text"><span>大学生アルバイト募集中</span></div>
</section>

<section class="calendar">
    <div class="external">
        <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FTokyo&src=bWl6LnlhbWFtb3RvLmFzcGFya0BnbWFpbC5jb20&src=aTEydjQ4NW1tdTJqbXRob25rZ3UyM2NrcHNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=Y3RxbzluNDdyOWUxdW9tcjhhbWduNDE4YTBAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=amEuamFwYW5lc2UjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%234285F4&color=%23D50000&color=%2333B679&color=%230B8043"
        style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>
    <div class="other">
        <h3>Googleカレンダーに登録</h3>
        <p><a href="https://support.google.com/calendar/answer/37100?hl=ja&ref_topic=3417970">カレンダー登録方法→</a></p>
        <div class="copy-area">
            <h6>オオサカンスペースで開催イベントカレンダー登録</h6>
            <label>
                <input id="calender-url" type="text" value="https://osakan.net/events/events.ics">
                <button onclick="copy()"><i class="fas fa-clipboard"></i></button>
            </label>
        </div>
        <div class="copy-area">
            <h6>オオサカンスペース<span class="red bold">以外で</span>開催イベントカレンダー登録</h6>
            <label>
                <input id="calender-url_2" type="text" value="https://osakan.net/events/events-2.ics">
                <button onclick="copy_2()"><i class="fas fa-clipboard"></i></button>
            </label>
        </div>
    </div>
</section>

<section class="events page">
    <section class="page-content">
        <section>
            <h2>これからオオサカンで開催されるイベント</h2>
            <div class="events-content">
                <?php
                    $arg = array(
                                'posts_per_page' => 5, // 表示する件数
                                'orderby' => 'date', // 日付でソート
                                'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                                'category_name' => 'event_i' // 表示したいカテゴリーのスラッグを指定
                            );
                    $posts = get_posts( $arg );
                    if( $posts ): ?>
                        <ul>
                    <?php
                        foreach ( $posts as $post ) :
                            setup_postdata( $post ); ?>
                        <li>
                            <?php the_time( 'Y/m/d(D)' ); ?><br class="sp">
                            <div class="img"><img src="" alt=""></div>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                    <?php endforeach; ?>
                        </ul>
                    <?php
                    endif;
                    wp_reset_postdata();
                    ?>
            </div>
        </section>

        <section>
            <h2>これからオオサカン<span class="red bold">以外で</span>開催されるイベント</h2>
            <div class="events-content">
                <?php
                $arg = array(
                            'posts_per_page' => 5, // 表示する件数
                            'orderby' => 'date', // 日付でソート
                            'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                            'category_name' => 'event_o' // 表示したいカテゴリーのスラッグを指定
                        );
                $posts = get_posts( $arg );
                if( $posts ): ?>
                    <ul>
                <?php
                    foreach ( $posts as $post ) :
                        setup_postdata( $post ); ?>
                    <li>
                        <?php the_time( 'Y/m/d(D)' ); ?><br class="sp">
                        <div class="img"><img src="" alt=""></div>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                <?php endforeach; ?>
                    </ul>
                <?php
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </section>

        <section>
            <h3>すでに開催されたイベント</h3>
            <div class="events-content">
                <?php
                $arg = array(
                            'posts_per_page' => 1, // 表示する件数
                            'orderby' => 'date', // 日付でソート
                            'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                            'category_name' => 'event_end' // 表示したいカテゴリーのスラッグを指定
                        );
                $posts = get_posts( $arg );
                if( $posts ): ?>
                    <ul>
                <?php
                    foreach ( $posts as $post ) :
                        setup_postdata( $post ); ?>
                    <li><?php the_time( 'Y/m/d(D)' ); ?><br class="sp">
                        <div class="img"><img src="" alt=""></div>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                <?php endforeach; ?>
                    </ul>
                <?php
                endif;
                wp_reset_postdata();
                ?>
            </div>
            <div class="transition">
                <a href=""><< もっと前のイベント</a>
                <?php
                // the_posts_pagination(
                //     array(
                //         'mid_size'      => 1, // 現在ページの左右に表示するページ番号の数
                //         'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
                //         'prev_text'     => __('もっと新しいイベント >>'), // 「<」リンクのテキスト
                //         'next_text'     => __('<< もっと前のイベント'), // 「>」リンクのテキスト
                //     )
                // )
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
            </div>
        </section>
    </section>
</section>


<?php get_footer() ?>