<?php get_header(); ?>
<div class="kapla" style="min-height:700px;">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-8 no-padding">
                <div class="not-found">
                <h2>Oops, Nie ma takiej strony!</h2>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-4">
                <hr style="background:#E7E7E7; height:1px; margin-top:30px !important; margin-top:20px;">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-8 col-sm-offset-8 search-write">
                <h3>Przeszukaj nasze strony</h3>
                <p>Nie możesz znaleźć czego szukasz? Spróbuj jeszcze raz w wyszukiwarce poniżej!</p>
            <div class="not-found-search">
                <form role="search404" method="get" id="searchTerim" action='<?php echo home_url( '/' ); ?>'>
                    <input type="text" class="searchTerim" name="s" id="s" placeholder="Search...">
                        <button type="submit" class="searchButton404" id="searchTerim">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
