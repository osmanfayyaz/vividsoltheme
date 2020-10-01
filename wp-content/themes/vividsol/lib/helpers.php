<?php 
    
function vividsoltheme_post_meta(){

   printf(
      esc_html__( 'Posted on %s', 'Vividsol' ),
      '<a href="'. esc_url(get_permalink()) .'"><time datetime="' . esc_attr(get_the_date('c')) .'">'
      . esc_html(get_the_date()) .'</time></a>'
   );
        
   //  echo' Posted on ';
   //          echo '<a href="'. esc_url(get_permalink()) .'">'; 
   //           echo '<time datetime="' . esc_attr(get_the_date('c')) .'">'. esc_html(get_the_date()) .'</time>';
   //          echo' </a>';

   printf(
      esc_html__( ' By %s', 'Vividsol' ),
       '<a href="' . esc_url(get_author_posts_url(get_the_author_meta("ID"))) .'">' 
         . esc_html(get_the_author()) .'</a>'
);
         //   echo ' By <a href="' . esc_url(get_author_posts_url(get_the_author_meta("ID"))) .'">' 
         //   . esc_html(get_the_author()) .'</a>';
             
 }

 function vividsoltheme_read_more(){
    echo '<a href="' . esc_url(get_the_permalink()) . '" title="' . the_title_attribute(['echo'=>false]) .'">';
    echo ' Read More <span class="u-screen-reader-text"> About ' . get_the_title() .'</span>';
    echo '</a>';
 }

?>