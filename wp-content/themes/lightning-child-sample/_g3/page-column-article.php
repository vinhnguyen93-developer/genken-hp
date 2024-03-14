<?php
/** 
 * Template Name:コラム＆アーティクル
*/
?>
<?php get_header(); ?>
<main>    
    <section class="column-article-title">
        <h1><img id="column-article-visual" src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/column-coffee.png" alt="コラム＆アーティクルページ画像"></h1>
        <div class="border-only"></div>
    </section>
    
    <section class="column-articl-wrap">
        <h2>コラム＆アーティクル</h2>
        <p class="new-article">最新の記事</p>
        <div class="column-articl-archive">
            <div class="management-forum-wrap">
                <div class="management-forum1">
                    <p><span class="small-gray">マネジメントフォーラム</span></p>
                    <h3>新元号を迎えて－ご長寿に学ぶ</h3>
                    <p>今年も帰省先の新潟で新年を迎えました。初詣は、近所の地域で最も古くからある神社と決めています。眠い目をこすりながら、この儀式のために頑張って起きている長男と一緒に向かいました。神社に入る少し前...</P>
                    <p><span class="small-gray">現研主任講師&emsp;泉川獅道&emsp;&emsp;&emsp;&emsp;&emsp;2022.01.01</span></p>
                    </p>
                </div>
                <div class="management-forum2">
                    <p><span class="small-gray">マネジメントフォーラム</span></p>
                    <h3>改めて思う－塀と壁と橋</h3>
                    <p>塀と壁。広辞苑によれば、塀は家屋敷などの境界とする囲い。壁は障害物として他を排除するもの、江戸時代には野暮・無粋を言った言葉・・とある。 塀の中と外というと、その塀は刑務所の塀を...</P>
                    <p><span class="small-gray">現研主任研究員&emsp;萩野齊之&emsp;&emsp;&emsp;&emsp;&emsp;2021.10.016</span></p>
                </div>
            </div>
            <div class="archive-category">
                <p class="archive-category-search">検索</p>
                <form method="get" action="#" class="management-forum-search">
                    <input class="management-forum-form-input" type="search">
                    <button class="management-forum-form-button" type="submit"><img src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/musimegane.png" alt="虫メガネ" width="30px" height="30px"></button>
                </form>
                <div class="archive-month-wrap">
                    <h3>月別アーカイブ</h3>
                    <ul class="month-archive">
                        <li>2019年4月</li>
                        <li>2019年2月</li>
                        <li>2018年1月</li>
                        <li>2017年6月</li>
                        <li>2017年4月</li>
                        <li>2014年7月</li>
                        <li>2014年6月</li>
                    </ul>
                </div>            
                <div class="category">
                    <h3>カテゴリ</h3>
                    <p>マネジメントフォーラム</p>
                </div>
            </div>
        </div>    
        <ul class="column-articl-nav-links">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="dots">…</li>
            <li><a href="#">10</a></li>
        </ul>
    </section>
</main>
<?php get_footer(); ?>
