
{{--  Footer  --}}
    <footer class="text-muted">
        <div class="container">
            <div class="col-lg-12 text-center">
                <div class="links">
                    <a href="/">Home</a>
                    <a href="/posts/">Posts</a>
                    <a href="/posts/create/">Create a post</a>
                    <a href="/about/">About</a>
                    <a href="https://github.com/laravel/laravel">Contact us</a>
                </div>
                <p>A simple app created with the Laravel framework and vue.js for front-end interactions.</p>
            </div>
        </div>        
    </footer>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="{{ URL::asset('js/popper.min.js') }}"></script>
<script src="{{ URL::asset('js/holder.min.js') }}"></script>
<script>
    $(function () {
    Holder.addTheme("thumb", { background: "#55595c", foreground: "#eceeef", text: "Thumbnail" });
    });
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>