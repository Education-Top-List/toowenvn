<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) );  ?>">
							<div class="search">
								<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="...">
								<input type="hidden" value="product" name="post_type">
								<button type="submit" id="searchsubmit"><?php if(get_locale() == 'en_US'){?>Search<?php }else{?>Tìm kiếm<?php }?></button>
							</div>
						</form>