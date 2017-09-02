<!DOCTYPE html>
<html lang="en">
<head>
	@include('partial._head')
</head>
<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
        @include('partial._navbar')
        </nav>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
            	
				<article class="post-item post-detail">
					<div class="post-item-body">
						 <div class="padding-10">
						 	@yield('content')
						</div>
					</div>
				</article>
            </div>
            <div class="col-md-4">
                <aside class="right-sidebar">
                    <div class="search-widget">
                        <div class="input-group">
                          <input type="text" class="form-control input-lg" placeholder="Search for...">
                          <span class="input-group-btn">
                            <button class="btn btn-lg btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                          </span>
                        </div><!-- /input-group -->
                    </div>
                </aside>
            </div>

        </div> {{-- row --}}
    </div> {{-- container --}}

    <footer>
    	@include('partial._footer')
    </footer>

    @include('partial._js')



</body>
</html>
