<?php header('Content-type: application/xml; charset="ISO-8859-1"',true); ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
   <url>
      <loc><?php echo base_url();?></loc>
      <priority>0.1</priority>
      <changefreq>daily</changefreq>
   </url>
    <?php $no = 2; foreach($menu as $res) { ?>
    <url>
      <loc><?php echo base_url().$res; ?></loc>
      <priority>0.<?php echo $no;?></priority>
      <changefreq>daily</changefreq>
    </url>
   <?php $no++; } ?>
</urlset>
