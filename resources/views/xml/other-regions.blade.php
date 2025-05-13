<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

 <?php foreach($regions as $region) { ?>
        <url>
            <loc><?php echo url('/')."/report-store/".htmlspecialchars($region->page_url).'.xml'; ?></loc>
            <changefreq>daily</changefreq>
            <priority>0.85</priority>
        </url>
    <?php } ?>  
     <?php foreach($countries as $country) { ?>
        <url>
            <loc><?php echo url('/')."/report-store/".htmlspecialchars($country->page_url).'.xml'; ?></loc>
            <changefreq>daily</changefreq>
            <priority>0.85</priority>
        </url>
    <?php } ?>  
    
    
</urlset>