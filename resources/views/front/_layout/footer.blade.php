<!-- Page Footer-->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo">
                    <h6 class="text-white">Bootstrap Blog</h6>
                </div>
                <div class="contact-details">
                    <p>53 Broadway, Broklyn, NY 11249</p>
                    <p>Phone: (020) 123 456 789</p>
                    <p>Email: <a href="/themes/front/mailto:info@company.com">Info@Company.com</a></p>
                    <ul class="social-menu">
                        <li class="list-inline-item"><a href="/themes/front/#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="/themes/front/#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="/themes/front/#"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="/themes/front/#"><i class="fa fa-behance"></i></a></li>
                        <li class="list-inline-item"><a href="/themes/front/#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="menus d-flex">
                    <ul class="list-unstyled">
                        <li> <a href="{{route('front.index.index')}}">Home</a></li>
                        <li> <a href={{route('front.blog.index')}}>Blog</a></li>
                        <li> <a href={{route('front.contact.contact')}}>Contact</a></li>
                        <li> <a href="{{route('home')}}">Login</a></li>
                    </ul>
                    <ul class="list-unstyled">
                        <li> <a href="/themes/front/blog-category.html">Growth</a></li>
                        <li> <a href="/themes/front/blog-category.html">Local</a></li>
                        <li> <a href="/themes/front/blog-category.html">Sales</a></li>
                        <li> <a href="/themes/front/blog-category.html">Tips</a></li>
                    </ul>
                </div>
            </div>
            <div id="newestPosts" class="col-md-4">
                
            </div>
        </div>
        <div class="copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; 2017. All rights reserved. Your great site.</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p>Template By <a href="/themes/front/https://bootstrapious.com/p/bootstrap-carousel" class="text-white">Bootstrapious</a>
                            <!-- Please do not remove the backlink to Bootstrap Temple unless you purchase an attribution-free license @ Bootstrap Temple or support us at http://bootstrapious.com/donate. It is part of the license conditions. Thanks for understanding :)                         -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
</footer>
@push('footer_javascript')
<script type="text/javascript">

    function refreshNewestPosts() {

        // ajax funkcija vraca PROMISE 
        $.ajax({
            "url": "{{route('front.footer.newest_posts')}}",
            "type": "get", //http method GET ili POST
            "data": {}
        }).done(function (response) {

            $('#newestPosts').html(response);
            console.log('Zavrseno ucitavanje najnovijih postova');
            //console.log(response);
        }).fail(function (jqXHR, textStatus, error) {
            console.log('Greska prilikom ucitavanja najnovijih postova');
        });
    }

    refreshNewestPosts(); 

</script>
@endpush

