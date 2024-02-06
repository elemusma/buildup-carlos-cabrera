<?php
echo '<footer>';
echo '<section class="" style="padding:50px 0px;">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-md-4 text-center pb-5">';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 

echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto']);

echo '</a>';
echo '</div>';

echo '<div class="col-md-4 text-center pb-5">';
echo '<a href="' . home_url() . '">';


$logoFooter = get_field('logo_footer','options'); 

echo wp_get_attachment_image($logoFooter['id'],'full',"",['class'=>'w-100 h-auto']);

echo '</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';

echo '<section class="bg-black">';
echo '<div class="container">';
echo '<div class="row justify-content-center align-items-center">';

echo '<div class="col-lg-3 text-center text-white">';

echo get_template_part('partials/si');

echo '</div>';

echo '<div class="col-lg-6 text-center text-white">';

echo '<div class="text-gray-1 pt-4">';

the_field('website_message','options');

echo '</div>';
echo '</div>';

echo '<div class="col-lg-3 text-right">';
echo '<a href="https://buildupuniversity.com/" target="_blank" rel="noopener noreferrer" style="" class="">';
echo '<img src="https://buildupuniversity.com/wp-content/uploads/2024/02/backlink.png" style="width:150px;" class="h-auto ml-2" alt="">';

echo '</a>';
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';

echo '</footer>';

if(get_field('footer', 'options')) { the_field('footer', 'options'); }
if(get_field('footer_code')) { the_field('footer_code'); }

wp_footer();

echo '</body>';
echo '</html>';
?>