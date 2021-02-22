
<article class="c-reviews__review">
    <p class="c-reviews__text"><?php echo get_the_title(); ?></p>
    <p class="c-reviews__quote"><?php echo get_the_content(); ?></p>
    <div class="c-reviews__rating">
        <?php

            for($i = 1; $i <= 5; $i++){
                if ($i <= get_post_meta($post->ID, '_rating', true)){
                    ?>
                        <svg id="Group" xmlns="http://www.w3.org/2000/svg" width="28.066" height="26.773" viewBox="0 0 28.066 26.773">
                            <path id="Path_58" data-name="Path 58" d="M28.026,21.962a.822.822,0,0,0-.664-.56l-8.7-1.264L14.77,12.254a.822.822,0,0,0-1.475,0L9.4,20.138.7,21.4a.822.822,0,0,0-.456,1.4l6.3,6.137L5.058,37.607a.822.822,0,0,0,1.193.867l7.782-4.091,7.782,4.091a.822.822,0,0,0,1.193-.867l-1.486-8.665,6.3-6.137A.822.822,0,0,0,28.026,21.962Z"transform="translate(0 -11.796)"fill="#f29100"/>
                        </svg>
                    <?php
                }
                else{
                    ?>
                        <svg id='Group' xmlns='http://www.w3.org/2000/svg' width='28.066' height='26.773' viewBox='0 0 28.066 26.773'>
                            <path id='Path_58' data-name='Path 58' d='M28.026,21.962a.822.822,0,0,0-.664-.56l-8.7-1.264L14.77,12.254a.822.822,0,0,0-1.475,0L9.4,20.138.7,21.4a.822.822,0,0,0-.456,1.4l6.3,6.137L5.058,37.607a.822.822,0,0,0,1.193.867l7.782-4.091,7.782,4.091a.822.822,0,0,0,1.193-.867l-1.486-8.665,6.3-6.137A.822.822,0,0,0,28.026,21.962Z' transform='translate(0 -11.796)' fill='#023c48'/>
                        </svg>
                    <?php
                }
            }

        ?>





    </div>
</article>