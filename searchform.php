<div class='search-form-container'>
    <form role="search" method="get" class="search-form" action="<?php echo esc_url( get_home_url() ); ?>">
        <input id="search-field" type="search" class="search-field" value="" name="s"
               title="<?php esc_attr_e( 'Search', 'mission' ); ?>" placeholder="<?php esc_attr_e( ' Search for...', 'mission' ); ?>" />
        <input type="submit" class="search-submit" value='<?php esc_attr_e( 'Search', 'mission' ); ?>'/>
    </form>
</div>