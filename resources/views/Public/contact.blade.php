@extends('Public.layouts.context')
@section('content')

<section class="page-header">
    <div class="page-header__bg"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <ul class="villoz-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Get in Touch</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
        <h2 class="page-header__title">Get in Touch</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->


<section class="contact-map">
    <div class="container">
        <div class="google-map google-map__contact">
            <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="map__contact" allowfullscreen></iframe>
        </div>
        <!-- /.google-map -->
    </div><!-- /.container-fluid -->
</section><!-- /.contact-map -->

<section class="contact-one">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-md-12 col-lg-5 wow fadeInLeft" data-wow-duration="1500ms">
                <div class="contact-one__left">
                    <ul class="list-unstyled contact-one__info">
                        <li class="contact-one__info__item">
                            <div class="contact-one__info__icon">
                                <i class="icon-place"></i>
                            </div><!-- /.contact-one__info__icon -->
                            <div class="contact-one__info__content">
                                <p class="contact-one__info__text">Our Office</p> <!-- /.contact-one__info__text -->
                                <h4 class="contact-one__info__title"><a href="#">88 Broklyn Street Road
                                        New York. USA</a></h4><!-- /.contact-one__info__title -->
                            </div><!-- /.contact-one__info__content -->
                        </li>
                        <li class="contact-one__info__item">
                            <div class="contact-one__info__icon">
                                <i class="icon-phone-call-1"></i>
                            </div><!-- /.contact-one__info__icon -->
                            <div class="contact-one__info__content">
                                <p class="contact-one__info__text">Call Team</p>
                                <!-- /.contact-one__info__text -->
                                <h4 class="contact-one__info__title"><a href="tel:+92(8800)-8960">+92 (8800) -
                                        8960</a> <br>
                                    <a href="tel:+6800-320-60">+6800-320-60</a>
                                </h4><!-- /.contact-one__info__title -->
                            </div><!-- /.contact-one__info__content -->
                        </li>
                        <li class="contact-one__info__item">
                            <div class="contact-one__info__icon">
                                <i class="icon-at"></i>
                            </div><!-- /.contact-one__info__icon -->
                            <div class="contact-one__info__content">
                                <p class="contact-one__info__text">Send Mail</p>
                                <!-- /.contact-one__info__text -->
                                <h4 class="contact-one__info__title"><a href="mailto:needhelp@company.com">needhelp@company.com</a> <br>
                                    <a href="mailto:mail@villa.com">mail@villa.com</a>
                                </h4>
                                <!-- /.contact-one__info__title -->
                            </div><!-- /.contact-one__info__content -->
                        </li>
                    </ul><!-- /.list-unstyled -->
                    <div class="contact-one__social">
                        <div class="contact-one__social__title">Follow villoz</div><!-- /.contact-one__social__title -->
                        <div class="contact-one__social__links">
                            <a href="https://twitter.com">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                <span class="sr-only">Twitter</span>
                            </a>
                            <a href="https://facebook.com">
                                <i class="fab fa-facebook" aria-hidden="true"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                            <a href="https://pinterest.com">
                                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                <span class="sr-only">Pinterest</span>
                            </a>
                            <a href="https://instagram.com">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                        </div><!-- /.contact-one__social__links -->
                    </div><!-- /.contact-one__social -->
                </div><!-- /.contact-one__left -->
            </div><!-- /.col-md-12 col-lg-5 -->
            <div class="col-md-12 col-lg-7">
                <form class="contact-one__form contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms" action="inc/sendemail.php">
                    <div class="contact-one__form__top">
                        <div class="sec-title text-start">

                            <h6 class="sec-title__tagline">Talk with the team</h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title">Any Questions? Feel Free <br> to Contact</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                    </div><!-- /.contact-one__form__top -->
                    <div class="form-one__group">
                        <div class="form-one__control">
                            <input type="text" name="name" placeholder="Your name">
                        </div><!-- /.form-one__control -->
                        <div class="form-one__control">
                            <input type="email" name="email" placeholder="Email address">
                        </div><!-- /.form-one__control -->
                        <div class="form-one__control">
                            <input type="text" name="phone" placeholder="PHone number">
                        </div><!-- /.form-one__control -->
                        <div class="form-one__control">
                            <div class="form-one__control__select">
                                <label class="sr-only" for="language-select">Select service</label>
                                <!-- /#language-select.sr-only -->
                                <select class="selectpicker" id="language-select">
                                    <option value="Select service">Select service</option>
                                    <option value="Select service 01">Select service 01</option>
                                    <option value="Select service 02">Select service 02</option>
                                </select>
                            </div><!-- /.main-menu__language -->
                        </div><!-- /.form-one__control -->
                        <div class="form-one__control form-one__control--full">
                            <textarea name="message" placeholder="Write  a message"></textarea><!-- /# -->
                        </div><!-- /.form-one__control -->
                        <div class="form-one__control form-one__control--full">
                            <button type="submit" class="villoz-btn">
                                <i>Send a Message</i>
                                <span>Send a Message</span>
                            </button>
                        </div><!-- /.form-one__control -->
                    </div><!-- /.form-one__group -->
                </form>
                <div class="result"></div><!-- /.result -->
            </div><!-- /.col-md-12 col-lg-7 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-one -->

@endsection