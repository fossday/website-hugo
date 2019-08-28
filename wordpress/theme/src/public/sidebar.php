<div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                               <div class="form-group">
                                  <div class="input-group mb-3">
                                     <input type="text" class="form-control" placeholder='Procurar no Blog'
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Procurar no Blog'">
                                     <div class="input-group-append">
                                        <button class="btn" type="button"><i class="ti-search"></i></button>
                                     </div>
                                  </div>
                               </div>
                               <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Pesquisar</button>
                            </form>
                         </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Categorias</h4>
                            <?php wp_list_categories(array(
                                'orderby'    => 'name',
                                'show_count' => true,
                                'title_li' => ''
                            )); ?>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Autores do Blog</h3>
                            <?php $users = get_users('orderby=post_count&role=author&order=DESC'); 
                      
                            ?>
                            <?php
                                foreach($users as $user)
                                {
                                    if(!in_array( 'subscriber', $user->roles ) && !in_array( 'administrator', $user->roles))
                                    {
                                    ?>
                                    <div class="media post_item">
                                            <?php echo get_avatar( $user->user_email, $size = '80', $default, $alt, $args = array('class' => 'round')); ?>
                                            <div class="media-body">
                                                <a href="<?php echo get_author_posts_url( $user->ID, $user->user_nicename); ?>">
                                                    <h3><?php echo $user->first_name . ' ' . $user->last_name; ?></h3>
                                                </a>
                                                <p><a href="mailto:<?php echo $user->user_email; ?>" class="social-link" target="_blank"> <?php echo $user->user_email; ?></a></p>
                                                <p><a href="<?php echo get_author_posts_url( $user->ID, $user->user_nicename); ?>" class="social-link" target="_blank">Todos os posts</a></p>
                                            </div>
                                    </div>
                                <?php
                                    }
                                }
                            ?>
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Tags</h4>
                            <ul class="list">
                                <li>
                                    <?php wp_tag_cloud(); ?>
                                </li>
                            </ul>
                        </aside>


                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Endereço de E-mail'" placeholder='Endereço de E-mail' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Subscrever</button>
                            </form>
                        </aside>
                    </div>
                </div>