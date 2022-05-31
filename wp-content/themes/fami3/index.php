<?php get_header(); ?>

<div class="wiki_top_body">
    <div class="wiki_body">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top_banner.jpg" />

        <div class="flexbox_parent">
            <div class="flexbox_sidebar_left" >
                <?php get_sidebar('left'); ?>
            </div>
            <div class="flexbox_center">
                <div class="article_top">
                    <div id="article_title">
                        <span id="title_top">エルデンリング攻略Wiki</span>
                        <div class="article_sub_info">
                            <span id="time_top">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/clock.png" />最終更新：<time datetime="2022-05-18T00:00:00+9:00">2022.05.18 9:00</time>
                            </span>
                            <span id="writer_top">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/pen.png" />Fami-3 攻略班
                            </span>
                        </div>
                        <div class="announce_top">
                            <p>攻略班からのお知らせ</p>
                            <li>

                            </li>
                        </div>
                    </div>
                </div>
                <p>エルデンリングの攻略サイトです。</p>
                <table border="1" class="index_table">
                    <tr class="index_table_title">
                        <th colspan="3">目次</th>
                    </tr>
                    <div class="index_table_sub">
                        <tr>
                            <td width="33%">
                                <a>マップ</a>
                            </td>
                            <td width="33%">
                                <a>武器</a>
                            </td>
                            <td width="33%">
                                <a>防具</a>
                            </td>
                        </tr>
                        <tr>
                            <td width="33%">
                                <a>ボス攻略</a>
                            </td>
                            <td width="33%">
                                <a>NPCイベント</a>
                            </td>
                            <td width="33%">
                                <a>魔術</a>
                            </td>
                        </tr>
                        <tr>
                            <td width="33%">
                                <a>祈祷</a>
                            </td>
                            <td width="33%">
                                <a>戦灰</a>
                            </td>
                            <td width="33%">
                                <a>アイテム</a>
                            </td>
                        </tr>
                    </div>
                </table>
            </div>
            <div class="flexbox_right">
                <?php get_sidebar('right'); ?>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>