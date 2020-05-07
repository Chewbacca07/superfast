<?php get_header(); ?>   
    
    <section>
            <h1>Articles classés dans : <strong><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></strong></h1>
             <p><?php echo category_description(); ?></p>

    </section>
    
    <section  class="page-default">
                
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    
            <article class="category-content">
                <h2><?php the_title(); ?></h2>
                <div class="meta">Posté par <strong><?php the_author(); ?></strong> le <strong><?php the_time('j F Y'); ?></strong></div>
                <?php the_excerpt(); ?>
                <a class="btn" href="<?php the_permalink(); ?>">Lire la suite</a>
            </article>
            
            <?php endwhile; else : ?>
            <h2>Erreur</h2>     
            <p>Désolé, mais les articles que vous recherchez n'existent pas ou plus.</p>        
            <?php endif; ?>
                                                
    </section>
    
<?php get_footer(); ?>    


