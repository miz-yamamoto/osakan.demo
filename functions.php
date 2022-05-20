<?php
// ウィジェットの有効化
    function my_theme_widgets_init() {
        register_sidebar( array(
          'name' => 'Main Sidebar',
          'id' => 'main-sidebar',
        ) );
      }
      add_action( 'widgets_init', 'my_theme_widgets_init' );

    if (function_exists('register_sidebar')) { //エラーが起きないようにする

// 最新の記事[5]ウィジェットの定義
      register_sidebar(array(
        'name' => '最新の記事! 5',
        'id' => 'new_blog',
        'before_widget' => '<div class="new-blog-widget-area">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => ''
      ));

// 最新の記事[5]ウィジェットの定義
      register_sidebar(array(
        'name' => '最新の記事! 6',
        'id' => 'new_blog-6',
        'before_widget' => '<div class="new-blog-6-widget-area">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => ''
      ));

// Facebook用ウィジェットエリアの定義
      register_sidebar(array(
        'name'=>'Facebook',
        'id' => 'facebook_area',
        'before_widget' => '<div class="facebook-widget-area">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => ''
        ));

    }

// 先頭に「！」を付けたウィジェットのタイトルが表示されなくなる
        add_filter( 'widget_title', 'remove_widget_title' );
            function remove_widget_title( $widget_title ) {
            if ( substr ( $widget_title, 0, 1 ) == '!' )
                return;
            else
                return ( $widget_title );
            }


// 投稿記事の最初の画像をアイキャッチ化する
        function catch_that_image() {
          global $post, $posts;
          $first_img = '';
          ob_start();
          ob_end_clean();
          $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
          $first_img = $matches [1] [0];

          if(empty($first_img)){ //Defines a default image
                  $no =  get_template_directory_uri();
                  $first_img = "$no./images/general/no_image.png";
              }
              return $first_img;
          }

// カスタムフィールド[link_url]に入力されたURLを取得して、[link_url]があれば、記事のリンク先を指定したURLに差し替えます。
        function wpdev_permalink_links( $link, $post ) {
          $meta = get_post_meta( $post->ID, 'link_url', TRUE );
          $url = esc_url( filter_var( $meta, FILTER_VALIDATE_URL ) );
          return $url ? $url : $link;
        }
        add_filter( 'post_link', 'wpdev_permalink_links', 10, 2 );

// member表示件数を50件に設定
        function change_posts_per_page($query) {
          if ( is_admin() || ! $query->is_main_query() )
              return;

          if ( $query->is_category("member") ) { /* メンバーページの時に表示件数を50件にセット */
              $query->set( 'posts_per_page', '50' );
          }

          if ( $query->is_category("events") ) { /* 開催終了イベントの表示件数を1件にセット */
            $query->set( 'posts_per_page', '1' );
        }
        }
        add_action( 'pre_get_posts', 'change_posts_per_page' );

// すでに開催されたイベント表示件数1件に設定

// paginationをカスタマイズ
        the_posts_pagination( array(
          'prev_text' => '&lt;',
          'next_text' => '&gt;',
        ) );