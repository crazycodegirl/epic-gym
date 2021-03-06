<?php
// The template to use when the URL could not be resolved to an existing page

get_header();
?>
<div class="error-message">
   <div class="gif">
     <iframe src="https://giphy.com/embed/r9JRreEKA9Xsk" width="360" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/searching-r9JRreEKA9Xsk">via GIPHY</a></p>
   </div>
   <div class="message">
     <h2 class="oops">Looking for something?</h2>
     <p>Whatever it is you were looking for doesn't seem to be here. You
       can try clicking on one of the links above, OR you can try searching here:</p>

     <?php get_search_form(); ?>
   </div>
</div>

<?php get_footer(); ?>
