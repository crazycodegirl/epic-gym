<?php
// The template to use when the URL could not be resolved to an existing page

get_header();
?>
<div class="error-message">
   <div class="image">
     <img src="img/elk-looking.png" alt="Young bull elk in trees" style="width:250px;height:335px;">
   </div>
   <div class="message">
     <h2 class="oops">Looking for something?</h2>
     <p>Whatever it is you were looking for doesn't seem to be here. You
       can try clicking on one of the links above, OR you can try searching here:</p>

     <?php get_search_form(); ?>
   </div>
</div>

<?php get_footer(); ?>
