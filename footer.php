        </main>

        <footer>
            <div class="footer-widget-area">
                <div class="footer-map">
                    <h2>オオサカンスペース</h2>
                    <p>〒541-0051
                       <br>大阪市中央区備後町3-6-2 大雅ビル10F （<a href="#">詳しいアクセス</a>）
                       <br>※メンバー以外の方はご予約の上お越しください。
                    </p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/footer/map.png" alt="地図">
                    <div class="information">
                        <div class="information-inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/footer/information.png" alt="オオサカンスペースにはご予約の上お越しください">
                            <p>
                                御堂筋線 本町駅 2番出口徒歩1分、2番出口でて御堂筋をはさんで向かいにある、シアトルズベストコーヒーのあるビルです。
                                <br><span>（梅田・新大阪方面からは車両の後ろの方にお乗りください。）</span>
                            </p>
                            <ul>
                                <li>中央線 本町駅 450m（5分）</li>
                                <li>四つ橋線 20番出口 650m（8分）</li>
                                <li>堺筋線 堺筋本町駅 16番出口 650m（8分）</li>
                                <li>タクシー 『御堂筋沿いの北御堂向かいのビル』とお伝えください。</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="site-map">
                    <h2>SITE MAP</h2>
                    <ul>
                    <li><a href="<?php echo home_url('/about/'); ?>">オオサカンとは</a></li>
                        <li><a href="#">メンター制度</a></li>
                        <li><a href="#">オオサカンスタッフ紹介</a></li>
                        <li><a href="<?php echo home_url('/facility/'); ?>">設備・備品</a></li>
                        <li><a href="<?php echo home_url('/price/'); ?>">サービス料金</a></li>
                        <li><a href="<?php echo home_url('/access/'); ?>">アクセス</a></li>
                        <li><a href="<?php echo home_url(); ?>/category/member/">メンバー紹介</a></li><li><a href="#">メンバー紹介</a></li>
                        <li><a href="#">メディア掲載一覧</a></li>
                        <li><a href="<?php echo home_url(); ?>/category/events/">イベント情報</a></li>
                        <li><a href="<?php echo home_url() ; ?>/category/staff-blog/">スタッフブログ</a></li>
                        <li><a href="#">よくある質問</a></li>
                        <li><a href="<?php echo home_url('/reserve/'); ?>">見学予約フォーム</a></li>
                        <li><a href="<?php echo home_url('/inquiry/'); ?>">お問い合わせ</a></li>
                        <li><a href="#">会社概要</a></li>
                        <li><a href="#">採用情報</a></li>
                        <li><a href="#">資料ダウンロード</a></li>
                        <li><a href="#">English</a></li>
                    </ul>
                </div>
                <div class="sns-demo">
                    <?php dynamic_sidebar('facebook_area'); ?>
                    <div class="sns_icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/footer/icon_twitter.png" alt="icon_twitter">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/footer/icon_facebook.png" alt="icon_facebook">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/footer/icon_instagram.png" alt="icon_instagram">
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright======================</p>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>