<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

 <?php foreach($subcategory as $OtherIndustries) { ?>
        <url>
            <loc><?php echo url('/')."/report-store/".htmlspecialchars($OtherIndustries->page_url).'.xml'; ?></loc>
            <changefreq>daily</changefreq>
            <priority>0.85</priority>
        </url>
    <?php } ?>  
    
</urlset>