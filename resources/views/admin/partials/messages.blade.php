@if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <ul>
            @foreach ( $errors->all('<li>:message</li>') as $error )
                {!! $error !!}
            @endforeach
        </ul>
    </div>
@endif

@foreach ( array('success', 'info', 'warning') as $level )
    @if ( Session::has( $level ) )
        <div class="alert alert-{{ $level }} alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <ul>
                <li>{{ Session::get( $level ) }}</li>
            </ul>
        </div>
    @endif
@endforeach
