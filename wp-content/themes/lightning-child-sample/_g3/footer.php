<footer class="footer-area">
        <div class="footer-area-first">
            <div class="toppage">
                <ul class="footer-nav">
                    <li><a href="<?php echo esc_url( home_url()); ?>"><span>トップページ</span></a></li>
                </ul>
            </div>
            
            <div class="company">
                <ul class="footer-nav">
                    <li><a href="<?php echo esc_url( home_url('company')); ?>"><span>会社情報</span></a></li>
                    <li><a href="<?php echo esc_url( home_url('company/message')); ?>">ご挨拶</a></li>
                    <li><a href="<?php echo esc_url( home_url('company/purpose')); ?>">現研の使命・理念</a></li>
                    <li><a href="<?php echo esc_url( home_url('company/about')); ?>">会社概要</a></li>
                    <li><a href="<?php echo esc_url( home_url('company/ourstories')); ?>">Our Stories</a></li>
                    <li><a href="<?php echo esc_url( home_url('company/access')); ?>">Access</a></li>
                </ul>
            </div>
            
            <div class="service">
                <ul class="footer-nav">
                    <li><a href="<?php echo esc_url( home_url('service')); ?>"><span>事業の構成</span></a></li>
                    <li><a href="<?php echo esc_url( home_url('service/consulting')); ?>">経営コンサルティング</a></li>
                    <li><a href="<?php echo esc_url( home_url('service/training')); ?>">人材開発</a></li>
                </ul>
            </div>

            <div class="study">
                <ul class="footer-nav">
                    <li><a href="<?php echo esc_url( home_url('study')); ?>"><span>研究会活動</span></a></li>
                    <li><a href="<?php echo esc_url( home_url('study/industry')); ?>">産業事情検討会</a></li>
                    <li><a href="<?php echo esc_url( home_url('study/new-management')); ?>">新経営具体化研究会</a></li>
                    <li><a href="<?php echo esc_url( home_url('study/comprehensive')); ?>">総合研究会・現研懇話会</a></li>
                    <li><a href="<?php echo esc_url( home_url('study/convivial')); ?>">現研懇話会</a></li>
                    <li><a href="<?php echo esc_url( home_url('study/membership')); ?>">研究会会員制度</a></li>
                </ul>
            </div>

            <div class="seminar">
                <ul class="footer-nav">
                    <li><a href="<?php echo esc_url( home_url('seminar')); ?>"><span>現研セミナー</span></a></li>
                    <li><a href="<?php echo esc_url( home_url('seminar/spring')); ?>">新春セミナー</a></li>
                    <li><a href="<?php echo esc_url( home_url('seminar/powerup')); ?>">パワーアップ研究セミナー</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-area-second">
            <div class="training">
                <ul class="footer-nav">
                    <li><a href="<?php echo esc_url( home_url('training')); ?>"><span>経営考え方教室</span></a></li>
                    <li><a href="<?php echo esc_url( home_url('training/foreign')); ?>">海外駐在員候補者研修</a></li>
                    <li><a href="<?php echo esc_url( home_url('training/finance')); ?>">経営のストーリーを読み解こう</a></li>
                    <li><a href="<?php echo esc_url( home_url('training/ma')); ?>">事業会社のための実践経営M&A講座</a></li>
                    <li><a href="<?php echo esc_url( home_url('training/innovation')); ?>">経営イノベーション講座　建設（建築）産業編</a></li>
                    <li><a href="<?php echo esc_url( home_url('training/young')); ?>">若手リーダー育成基本研修</a></li>
                </ul>
            </div>
            
            <div class="reading">
                <ul class="footer-nav">
                    <li><a href="<?php echo esc_url( home_url('column')); ?>"><span>コラム＆アーティクル</span></a></li>
                    <li><a href="<?php echo esc_url( home_url('think-tank-function')); ?>"><span>社会提言</span></a></li>
                    <li><a href="<?php echo esc_url( home_url('media-business')); ?>"><span>メディア事業</span></a></li>
                </ul>
            </div>

            <div class="information">
                <ul class="footer-nav">
                    <li><a href="<?php echo esc_url( home_url('contact')); ?>"><span>お問合せ</span></a></li>
                    <li><a href="#"><span>採用情報</span></a></li>
                    <li><a href="#"><span>新規事業開発室</span></a></li>
                    <li><a href="<?php echo esc_url( home_url('privacy')); ?>"><span>プライバシーポリシー</span></a></li>
                </ul>
            </div>
        </div>

        <div class="footer-address">
            <p>東京本社　〒〒113-0033 東京都文京区本郷2-27-17 ICNビル TEL :03-3813-7338(代表）<br>
            ロンドン事務所　8 St.Stephen's Court,Mayfield,LONDON N8 9NQ,UK TEL:44-20-8348-9681<br>
            Copyright <small>&copy;GENKEN Institute of Management All rights reserved.</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script type="text/javascript"  src="<?php echo get_stylesheet_directory_uri();?>/assets/js/main.js"></script>
</body>
</html>
