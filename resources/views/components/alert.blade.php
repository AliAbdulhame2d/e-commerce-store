@if (session()->has('success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss='alert' area-hidden='true'>x</button>
    {{session()->get('success')}}
</div>
@endif