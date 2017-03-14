<?php get_header(); ?>
<div id="page" class="page single_page">
<div class="charector-wrap " id="js_wrap">
    <div class="charector"></div>
</div>

<section id="s_content" class="single">

<?php the_post(); ?>
		
<article class="sp">
<div class="time_bar">
    <h1><?php the_date(); ?></h1>
</div>
<hgroup class="p_lt p_a">

	<header class="p_t">
		<span class="p_s_c"><?php the_category(' ') ?>></span>
		<h2><a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a></h2>
	</header> 
	
	<div class="p_i">
		<span class="lable_div">
			<?php the_tags('','',''); ?>
		</span>
		<span class="author_div">
            <?php
                if(get_post_meta($post->ID,'view',true)){
                    $val=get_post_meta($post->ID,'view',true);
                    update_post_meta($post->ID,'view',$val+1);
                }else{
                    add_post_meta($post->ID,'view',1);
                }  
            ?>
			<span class="p_i_a"><a><?php the_author(); ?></a></span>
			<span class="p_i_r"><a href="<?php comments_link(); ?>" ><?php comments_number( __('无回复','dpt') , __('落单的回复','dpt') , __('% 回复','dpt') ); ?></a></span>
			<span class="p_i_s"><a/><?php echo get_post_meta($post->ID,'view',true);?></a/></span>
			<span class="p_i_d"><?php echo edit_post_link( __('编辑','dpt') ); ?></span>
		</div>
	</span>

</hgroup>

<div class="sp_c">

	<?php the_content(); ?>

</div>

<nav class="post_nav">
    <?php
        $prev_post = get_previous_post();
        if (!empty( $prev_post )): ?>
    <div>
		<span class="p_n_l">上一篇</span><?php previous_post_link( '%link', '' . '%title' ); ?></div>
    <?php endif; ?>
    <?php
        $next_post = get_next_post();
        if(!empty( $next_post)): ?>
    <div>
		<span class="p_n_r">下一篇</span><?php next_post_link( '%link', '%title ' . '' ); ?></div>
    <?php endif; ?>
</nav>

</article>

<?php comments_template( '', true ); ?>

</section>

<?php get_footer(); ?>