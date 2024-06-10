    <?php  get_header(); ?>

    <!-- Home -->

    <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
            <?php 
            $cat = get_the_category();
            $catslug = $cat[0]->slug;
            $catname = $cat[0]->cat_name;
            ?>
            <div><?php echo $catslug; ?></div>
            <div><?php echo $catname; ?></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Course -->

    <div class="course">
      <div class="row content-body">
        <!-- Course -->
        <div class="col-lg-8">
          <!-- Course Tabs -->
          <div class="course_tabs_container">
            <div class="tab_panels">
              <!-- Description -->
              <div class="tab_panel">
                <div class="tab_panel_title"><?php echo $catname; ?></div>
                <div class="tab_panel_content">
                  <div class="tab_panel_text">
                    <!-- news loop from here-->
                    <?php if(have_posts()): ?>
                      <?php  while(have_posts()): the_post(); ?>
                      <div class="row">
                        <div class="col-lg-2 col-md-2 col-sx-12">
                          <div class="calender_news_border">
                            <div class="calender_news_border_1">
                              <div class="calender_month">
                                <?php
                                  if(is_category('event')):
                                    echo post_custom('month');
                                  else:
                                    echo get_post_time('F');
                                  endif;
                                ?>
                              </div>
                              <div class="calender_day">
                                <span>
                                  <?php
                                    if(is_category('event')):
                                      echo post_custom('day');
                                    else:
                                      echo get_the_date('d');
                                    endif;                                  ?>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="calender_hour"></div>
                        </div>
                        <div class="news_post_small_title">
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                        <div class="news_post_meta">
                          <ul>
                            <li>
                              <?php echo wp_trim_words(get_the_content() , 100, '...'); ?>
                            </li>
                          </ul>
                        </div>
                        <div class="read_continue">
                        <button><a href="<?php the_permalink(); ?>" class="text-white">詳細を見る</a></button>
                        </div>
                      </div>
                      <?php endwhile; ?>
                      <?php endif; ?>
                      <!-- news loop until here-->
                      <div class="news-pagination">
                        <?php
                         //記事一覧ページ用のページジェネレーション
                          echo paginate_links(array(
                            'total' => $wp_query->max_num_pages,
                            'prev_text' => '&lt;&lt;前へ',
                            'next_text' => '次へ&gt;&gt',
                          )); 
                        ?>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Course Sidebar -->
        <div class="col-lg-4" style="background-color: #2b7b8e33">
          <!-- sidebar-main に切り出す -->
          <div class="sidebar">
            <div class="category">
              <div class="section_title_container category_title">
                <h2>CATEGORY</h2>
                <div class="section_subtitle">カテゴリー</div>
              </div>
              <div class="sidebar_categories">
                <ul>
                  <li><a href="#">News ニュース</a></li>
                  <li><a href="#">Event イベント</a></li>
                  <li><a href="#">CampusLife 侍の学生</a></li>
                </ul>
              </div>
            </div>
            <div class="category">
              <div class="section_title_container category_title">
                <h2>Latest Post</h2>
                <div class="section_subtitle">最新記事</div>
              </div>
              <div class="sidebar_categories">
                <ul>
                  <li><a href="#">AWS ハンズオンセミ…</a></li>
                  <li><a href="#">AWS ハンズオンセミ…</a></li>
                  <li><a href="#">AWS ハンズオンセミ…</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- sidebar-main ここまで -->
        </div>
      </div>
    </div>

    <?php get_footer(); ?>