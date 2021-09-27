<div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="widget">
                        <h5 class="widgetheading">Browse pages</h5>
                        <ul class="link-list">
                            @foreach ($navigasi as $item)
                            <li><a href="{{$item->slugs}}">{{$item->title}}</a></li>
                            @endforeach
                        </ul>

                    </div>
                </div>
                <div class="span4">
                    <div class="widget">
                        <h5 class="widgetheading">Contact Us</h5>
                        <address>
                            <strong>{{$company_info->company_name}}</strong><br>
                            {{$company_info->address}}
                        </address>
                        <p>
                            <i class="icon-phone"></i> {{$company_info->phone}}<br>
                            <i class="icon-envelope-alt"></i> {{$company_info->email}}
                        </p>
                    </div>
                </div>
                <div class="span4">
                    <div class="widget">
                        <h5 class="widgetheading">Subscribe newsletter</h5>
                        <p>
                            Keep updated for new releases and freebies. Enter your e-mail and subscribe to our
                            newsletter.
                        </p>
                        <form class="subscribe">
                            <div class="input-append">
                                <input class="span2" id="appendedInputButton" type="text">
                                <button class="btn btn-theme" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="span6">
                        <div class="copyright">
                            <p><span>&copy; PT.GLOBAL ENVIRONMENT SOLUSINDO. All right reserved</span></p>
                        </div>

                    </div>

                    <div class="span6">
                        <div class="credits">
                            Designed by <a href="#">GES</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
