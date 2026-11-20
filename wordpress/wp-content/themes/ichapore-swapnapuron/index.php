<?php
/**
 * The main template file
 *
 * @package IchaporeSwapnapuron
 */

get_header(); ?>

<main id="primary" class="site-main py-5">
    <div class="container py-4">
        <header class="page-header mb-5 text-center">
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-2">LATEST STORIES</span>
            <h1 class="page-title text-white fw-bold display-5">News & Community Updates</h1>
            <p class="text-white-50 max-w-700 mx-auto">Field dispatches, community drives, and inspiring stories of transformation from Ichapore Swapnapuron Society.</p>
        </header>

        <div class="row g-4">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <article id="post-<?php the_ID(); ?>" <?php post_class('card bg-dark text-white border-white-10 h-100 shadow-sm rounded-4 overflow-hidden'); ?>>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="ratio ratio-16x9">
                                    <?php the_post_thumbnail('medium_large', ['class' => 'card-img-top object-fit-cover']); ?>
                                </div>
                            <?php endif; ?>
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="text-white-50 small mb-2">
                                    <i class="bi bi-calendar3 me-1"></i> <?php echo get_the_date(); ?>
                                </div>
                                <h3 class="card-title h5 fw-bold mb-3">
                                    <a href="<?php the_permalink(); ?>" class="text-white text-decoration-none hover-warning">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                <div class="card-text text-white-50 small mb-4 flex-grow-1">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-outline-warning btn-sm rounded-pill px-3">
                                        Read Story <i class="bi bi-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php
                endwhile;

                the_posts_pagination([
                    'prev_text' => '<i class="bi bi-arrow-left"></i> Previous',
                    'next_text' => 'Next <i class="bi bi-arrow-right"></i>',
                    'class'     => 'pagination justify-content-center mt-5',
                ]);
            else :
                ?>
                <div class="col-12 text-center py-5">
                    <p class="text-white-50 fs-5">No posts published yet. Check back soon!</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php
get_footer();
