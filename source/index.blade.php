@extends('_layouts.master')

@section('body')
<h1>Hello world!</h1>
<script>
    if (window.netlifyIdentity) {
        window.netlifyIdentity.on("init", user => {
            if (!user) {
                window.netlifyIdentity.on("login", () => {
                    document.location.href = "/admin/";
                });
            }
        });
    }
</script>
@endsection
