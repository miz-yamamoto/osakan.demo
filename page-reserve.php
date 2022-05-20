<?php
/*
Template Name: --------
*/
    get_header('form');
?>
<section class="form">
    <h1 class="reserve">見学予約フォーム Tour reservation</h1>
    <div class="overview">
        <p>見学をご希望の方は、事前に見学予約フォームよりお申し込みください。<br>
        予約なしでお越しの場合、スタッフ不在で対応できないこともございます。<br><br>
        見学にお越しいただく際には名刺をご提出していただきます。<br>
        名刺をお持ちでない場合は、ご本人確認書類の確認が必要です。<br><br>
        コワーキングスペースを見学してわかることはほんの少しです。<br>
        実際に体験いただくビジター（1日）利用をお勧めしております。<br>
        ＊ビジター利用後1ヶ月以内にメンバー登録いただいた方には、ビジター料金（2,200円）を返金いたします。<br><br>
        If you want to take a look before trying ,<br>
        please booking the date.<br><br>
        If you’re here,　that means you’re considering a membership. That’s GREAT news!<br>
        We'd like to learn bit about you, please complete the form below .<br>
        We'll send back to you after adjusting the date.</p>
        <a href="">ビジター予約をする</a>
    </div>
    <section class="content">
        <?php echo do_shortcode('[mwform_formkey key="284"]'); ?>
    </section>
</section>


<?php get_footer('form') ?>
