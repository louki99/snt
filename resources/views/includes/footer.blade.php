<footer class="pt-50 pb-20 bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="sidebar-widget wow fadeInUp mb-30 animated" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">À PROPOS DE MOI</h5>
                    </div>
                    <div class="textwidget">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti nemo dolorum vel ipsum rerum voluptas eos iure necessitatibus molestias doloremque. Quia, explicabo quaerat omnis temporibus aspernatur nihil repellat totam enim.
                        </p>
                        <p>
                            <strong class="color-black">Sujet</strong><br />
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti nemo
                        </p>
                        <p><strong class="color-black">Follow me</strong><br /></p>
                        <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                            <li class="list-inline-item">
                                <a style="background: #3b5999;" href="https://facebook.com" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a style="background: #55acf9;" href="https://twitter.com" target="_blank" title="Twitter"><i class="elegant-icon social_twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a style="background: #0a66c2;" href="https://linkedin.com" target="_blank" title="Linkedin"><i class="elegant-icon social_linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="sidebar-widget widget_categories wow fadeInUp mb-30 animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Quick links</h5>
                    </div>
                    <ul class="font-small">
                        <li>
                            <a href="{{ route("home") }}" title="Homepage">
                                <span>Homepage</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="sidebar-widget widget_newsletter wow fadeInUp mb-30 animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Newsletter</h5>
                    </div>
                    <div class="newsletter">
                        <p class="font-medium">Subscribe to our newsletter and get our newest updates right on your inbox.</p>
                        <form class="input-group form-subcriber mt-30 d-flex newsletter-form" action="http://localhost:8000/newsletter/subscribe" method="post">
                            <input type="hidden" name="_token" value="dtj00BumFEzeS35Ym6JYp3B7BNwXTt0yOeghaOU1" /> <input type="email" name="email" class="form-control bg-white font-small mb-3" placeholder="Enter your email" />
                            <button class="btn bg-primary text-white mb-3" type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copy-right pt-30 mt-20 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
            <p class="float-md-left font-small text-muted">©2023 Stories - Laravel Personal Blog Script</p>
            <p class="float-md-right font-small text-muted">
                Designed by AliThemes | All rights reserved.
            </p>
        </div>
    </div>
</footer>
