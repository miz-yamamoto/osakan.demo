<?php
/*
Template Name: --------
*/
    get_header('form');
?>
<section class="form">
    <h1>お問い合わせフォーム Contact Us</h1>
    <div class="overview">
        <p>オオサカンスペースのご利用ついてなど、<br>ご不明な点はこちらよりお気軽にお問い合わせください。<br><br>
        なお、お問い合わせに対する返信は数日いただく場合もございます。</p>
    </div>
    <section class="content">
        <?php echo do_shortcode('[mwform_formkey key="276"]'); ?>
    </section>
</section>



<?php get_footer('form') ?>