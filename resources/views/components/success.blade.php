<div>
<div class="card-body">
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>  
@endif     
                    </div>
</div>
<script>
        <script src="/js/app.js"></script>
    </script>