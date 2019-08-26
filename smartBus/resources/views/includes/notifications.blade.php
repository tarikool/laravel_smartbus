@if( session('restriction') )
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session( 'restriction' ) }}
    </div>
@endif

@if( session('info_updated') )
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session( 'info_updated' ) }}
    </div>
@endif

@if( session('booked') )
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session( 'booked' ) }}
    </div>
@endif


@if( session('data_inserted') )
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session( 'data_inserted' ) }}
    </div>
@endif



@if( session('user_created') )
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session( 'user_created' ) }}
    </div>
@endif


@if( session('user_updated') )
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session( 'user_updated' ) }}
    </div>
@endif

