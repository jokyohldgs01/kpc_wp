<?php
/*
Template Name: sample_page
*/
?>
<?php get_header(); ?>
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <!-- ここにthe_content()を挿入 -->
    <?php the_content(); ?>
    <?php endwhile; ?><?php else : ?>
    <p>コンテンツがありません</p>
  <?php endif; ?>
  <div class="company_page">
    <section class="detail_page">
      <h2>会社概要</h2>
      <div class="company_overview">
        <table class="company_overview_table">
          <tr>
            <th>会社名</th>
            <td>東遠（ドンウォン）ジャパン 株式会社<br>DONGWON JAPAN CO.,LTD</td>
          </tr>
          <tr>
            <th>設立</th>
            <td>2010年6月29日</td>
          </tr>
          <tr>
            <th>代表者</th>
            <td>代表取締役　河　基錫（ハ　キソク）</td>
          </tr>
          <tr>
            <th>資本金</th>
            <td>9千万円</td>
          </tr>
          <tr>
            <th>本社</th>
            <td>〒160-0015<br>東京都新宿区大京町23-3 四谷オーキッドビル10F<br>TEL 03-5363-5376<br>FAX 03-3358-8401</td>
          </tr>
          <tr>
            <th>事業内容</th>
            <td>
              1. 食料品、酒類、清涼飲料水の製造、加工、販売及び輸出入<br>
              2. 缶詰、瓶詰食料品の製造、加工、販売及び輸出入<br>
              3. 農水畜産物の生産、加工、販売及び輸出入並びに仲介、委託販売<br>
              4. 医薬品の製造、販売及び輸出入<br>
              5. 高麗人参、ローヤルゼリー等の健康食品の製造、加工、販売及び輸出入<br>
              6. 生鮮食品、保存食品、加工食品の製造、販売及び輸出入
            </td>
          </tr>
          <tr>
            <th>グループ会社</th>
            <td>
              東遠エンタープライズ（グループ持株会社）<br>
              東遠産業（水産流通、総合物流会社）<br>
              東遠F&B（総合食品会社）<br>
              東遠システムズ（素材・包材専門会社）<br>
              東遠ホームフード（食堂委託運営、食材・団体給食流通供給会社）<br>
              東遠デーリィフード（乳加工会社）<br>
              東遠コールドプラザ（冷蔵・冷凍物流専門会社）<br>
              Samjo Colltech（調味料食品専門製造会社）<br>
              東遠ファームス（飼料専門会社）<br>
              東遠ワインプラス（ワイン輸入流通専門会社）<br>
              東遠HRD（人材派遣・育成会社）<br>
              東遠リーダースアカデミー（人材育成・生涯学習の教育機関）
            </td>
          </tr>
        </table>
      </div>
    </section>
    <section class="detail_page">
      <h2>アクセス</h2>
      <div class="access_inner">
        <p>東京メトロ 丸の内線「四谷三丁目」駅<br>1番出口から徒歩7分</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.644809607328!2d139.7160070199915!3d35.68574691073844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ceb66c015e5%3A0x5baaf6a991873bb5!2z44CSMTYwLTAwMTUg5p2x5Lqs6YO95paw5a6_5Yy65aSn5Lqs55S677yS77yT4oiS77yTIOWbm-iwt-OCquODvOOCreODg-ODieODk-ODqw!5e0!3m2!1sja!2sjp!4v1721546428019!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
  </div>
<?php get_footer(); ?>
