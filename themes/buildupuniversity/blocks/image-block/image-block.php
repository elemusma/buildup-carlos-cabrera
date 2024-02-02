<?php
echo '<section class="position-relative image-block ' . get_field('classes') . '" style="' . get_field('style') . '" id="' . get_field('id') . '">';

echo get_field('code_block');

echo '<div class="' . get_field('image_class') . '" style="' . get_field('image_style') . '">';

$image = get_field('image');

echo wp_get_attachment_image($image['id'],'full','',[
    'class'=>'w-100 h-auto d-block',
    'style'=>''
]);

echo '</div>';

echo '</section>';

?>