@if($errors)
    @foreach($errors->all() as $error)
    <div class="alert alert-danger text-center fade in">
        <button data-dismiss="alert" class="close close-sm" type="button">
            <i class="icon-remove"></i>
        </button>
        {{ $error }}
    </div>
    @endforeach
@endif
@if(session('success'))
<div class="alert alert-success text-center fade in">
    <button data-dismiss="alert" class="close close-sm" type="button">
        <i class="icon-remove"></i>
    </button>
    {{ session('success') }}
</div>
@elseif(session('error'))
<div class="alert alert-danger text-center fade in">
    <button data-dismiss="alert" class="close close-sm" type="button">
        <i class="icon-remove"></i>
    </button>
    {{ session('error') }}
</div>
@endif