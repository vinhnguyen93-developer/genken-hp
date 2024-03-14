<?php
/** 
 * Template Name:研究会活動
*/
?>
<?php get_header(); ?>
<main>
    <section class="study-title">
        <h1><img id="study-visual" src="<?php echo get_stylesheet_directory_uri();?>/_g3/image/kenkyukai-toudai.png" alt="研究会活動ページ画像"></h1>
        <div class="border-only"><div>
    </section>

    <section class="study-contents-wrap">
        <div class="study-contents">    
            <h2>研究会活動</h2>
            <p>最新情報を基にした情勢分析・課題解決を主題としています。<br>少人数制による高密度な内容と運営の質的充実に努めます。<br>討議型・懇談型を主体とし、会員相互の人脈づくりを支援しています。</p>
            <p>創設5年目の1970年より、会員制による「産業事情検討会」と「新経営具体化研究会」（旧名称変更）という異なる特徴をもつ2つの定例研究会を主催しております。また、年1～2回、特別研究会として、「総合研究会」、「現研懇話会」およびシンポジウム形式の研究会を主催しております。</p>
            <p>現研研究会のねらいは、創業以来一貫して、企業組織または企業経営者・管理者の現在抱えている問題解決のみならず、将来当面する問題の予測・分析・対応行動の確立を計ることにあります。<br>いずれの研究会合も、極力、討議型・懇談型を主体とし、会員同士の交流を図るとともに、情報内容の発展性を高め、高密度な内容となるよう質的充実を図ることに努めております。</p>
            </p>
        </div>
    </section>

    <section class="study-container">
        <div class="study-item">
            <a href="<?php echo esc_url( home_url('/study/industry')); ?>">
                <h3>産業事情検討会</h3>
                <p>実践的行動を模索する若い人々に対して、新時代に対応でき、かつ、現状の打破に通じる考え方ならびに行動の方法に重点をおいて2日間の研修を行います。個人として、組織人としての考え方の確立に役立つと確信しております。</p>
            </a>
        </div>
        <div class="study-item">
            <a href="<?php echo esc_url( home_url('/study/new-management')); ?>">
                <h3>新経営具体化研究会</h3>
                <p>実践的行動を模索する若い人々に対して、新時代に対応でき、かつ、現状の打破に通じる考え方ならびに行動の方法に重点をおいて2日間の研修を行います。個人として、組織人としての考え方の確立に役立つと確信しております。</p>
            </a>
        </div>
        <div class="study-item">
            <a href="<?php echo esc_url( home_url('/study/comprehensive')); ?>">
                <h3>総合研究会＆現研懇話会</h3>
                <p>実践的行動を模索する若い人々に対して、新時代に対応でき、かつ、現状の打破に通じる考え方ならびに行動の方法に重点をおいて2日間の研修を行います。個人として、組織人としての考え方の確立に役立つと確信しております。</p>
            </a>
        </div>
        <div class="study-item">
            <a href="<?php echo esc_url( home_url('/study/membership')); ?>">
                <h3>研究会会員制度</h3>
                <p>実践的行動を模索する若い人々に対して、新時代に対応でき、かつ、現状の打破に通じる考え方ならびに行動の方法に重点をおいて2日間の研修を行います。個人として、組織人としての考え方の確立に役立つと確信しております。</p>
            </a>
        </div>
    </section>
</main>
<?php get_footer(); ?>
