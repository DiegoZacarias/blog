@extends('app')
@section('content')

<section id="intro">
    <div class="jumbotron masthead">

      <div class="container">
        <div class="row">
          <div class="span12">

            <div id="slider" class="nivoSlider">
              <img src="assets/img/slides/nivo/img1.jpg" data-thumb="assets/img/slides/nivo/img1.jpg" alt="" />
              <img src="assets/img/slides/nivo/img2.jpg" data-thumb="assets/img/slides/nivo/img2.jpg" alt="" title="#htmlcaption1" />
              <img src="assets/img/slides/nivo/img3.jpg" data-thumb="assets/img/slides/nivo/img3.jpg" alt="" data-transition="slideInLeft" />
              <img src="assets/img/slides/nivo/img4.jpg" data-thumb="assets/img/slides/nivo/img4.jpg" alt="" title="#htmlcaption2" />
            </div>
            <div id="htmlcaption1" class="nivo-html-caption">
              <h2>Responsive layout</h2>
              <p>
                At pro solet consequat, feugait expetenda dignissim ne has. Usu tale referrentur eu. No cetero oblique vituperatoribus vix. Vocent suscipiantur eum id, probo facete persius te usu.
              </p>
            </div>
            <div id="htmlcaption2" class="nivo-html-caption">
              <h2>Lot of features</h2>
              <p>
                Tale saepe eu ius. Illum lorem mediocrem ad nec, aliquam consetetur quo no. In bonorum repudiare pri, ut vis verterem expetendis definitionem. Voluptua gloriatur eam eu.
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="tagline">
          <div class="row">
            <div class="span6">
              <div class="tagline_text">
                <h2>Scaffold will <span class="text-success">pimp up</span> your website quickly</h2>
                <div class="tag_list">
                  <ul>
                    <li><span><i class="icon-fire"></i> Hottest price on the net</span></li>
                    <li><span><i class="icon-gift"></i> More than expected</span></li>
                    <li><span><i class="icon-plane"></i> Flying out of the crowd</span></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="span6">
              <div class="btn-toolbar cta">
                <a class="btn btn-large btn-danger" href="#"><i class="m-icon-big-swapright m-icon-white"></i> Our pricing</a>
                <a class="btn btn-large btn-success" href="#"><i class="m-icon-big-swapdown m-icon-white"></i> Download now</a>
              </div>
            </div>


          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- end tagline -->

  <section id="maincontent">
    <div class="container">

      <div class="row">
        <div class="span3">
          <h3 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapright m-icon-white"></i></span>&nbsp;&nbsp;Main features</h3>
          <p>Aenean sodales augue ac lacus hendrerit sed rhoncus erat hendrerit. Praesent eleifend sodales felis, in congue purus scelerisque eget.</p>
        </div>
        <div class="span3">
          <div class="well well-primary box">
            <img src="assets/img/icons/box-1-white.png" alt="" />
            <h3>Responsive bootstrap</h3>
            <p>
              Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri. Mel virtute efficiantur ne zril.
            </p>
            <a href="#">Read more</a>
          </div>
        </div>
        <div class="span3">
          <div class="well well-success box">
            <img src="assets/img/icons/box-2-white.png" alt="" />
            <h3>With metro taste</h3>
            <p>
              Ad sit option intellegat, unum populo comprehensam ut sed. Copiosae corrumpit qui ex, duo nullam feugait qualisque at an dicit saperet.
            </p>
            <a href="#">Read more</a>
          </div>
        </div>
        <div class="span3">
          <div class="well well-warning box">
            <img src="assets/img/icons/box-3-white.png" alt="" />
            <h3>Well documented</h3>
            <p>
              Ne vix clita integre expetenda, eos cetero numquam no, in sea omnes detracto. Ne iriure habemus maiestatis mei. Postea euripidis contentiones.
            </p>
            <a href="#">Read more</a>
          </div>
        </div>
      </div>

      <!-- divider -->
      <div class="row">
        <div class="span12">
          <div class="divider"></div>
        </div>
      </div>
      <!-- end divider -->

      <div class="row">
        <div class="span6">
          <h3 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapright m-icon-white"></i></span>&nbsp;&nbsp;What people are saying</h3>

          <div id="myCarousel" class="carousel slide testimonials">
            <div class="carousel-inner">
              <div class="item active">
                <div class="testimonial">
                  <img src="assets/img/dummies/testimonial-author-1.png" alt="" />
                  <blockquote>
                    <p>
                      Lorem ipsum dolor sit amet, ne has nostro mentitum gubergren, no eam utamur civibus philosophia.
                    </p>
                  </blockquote>
                  <div class="info">
                    <span class="author"><strong><a href="#">Kelly Howards</a>,</strong></span>
                    <span class="company">MMC Design - Director</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial">
                  <img src="assets/img/dummies/testimonial-author-2.png" alt="" />
                  <blockquote>
                    <p>
                      Equidem instructior duo ad, mucius eripuit eloquentiam cu mea, suas tota urbanitas id his. Nec ea veritus nostrum.
                    </p>
                  </blockquote>
                  <div class="info">
                    <span class="author"><strong><a href="#">Mark Lunch</a>,</strong></span>
                    <span class="company">Mad Business - Marketing Officer</span>
                  </div>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>


        </div>

        <div class="span6">
          <h3 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapright m-icon-white"></i></span>&nbsp;&nbsp;What we do</h3>
          <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
						1. Web development services
					  </a>
              </div>
              <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                  <img src="assets/img/icons/responsive-icon.png" class="alignleft" alt="" />
                  <h5>Web development services</h5>
                  <p>
                    Ex decore equidem detracto vis, nihil labores euripidis an sea. Nisl solet nonumes ne has, eos nostrum antiopam aliquando at no reque.
                  </p>
                  <a href="#">Learn more</a>
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
						2. Web design Services
					  </a>
              </div>
              <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                  <img src="assets/img/icons/design-icon.png" class="alignleft" alt="" />
                  <h5>Web design Services</h5>
                  <p>
                    Nam omnium salutandi ad, accusam indoctum ne mel, posse expetendis mea at. Luptatum antiopam pro ne. Eum at autem antiopam.
                  </p>
                  <a href="#">Learn more</a>
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
						3. Internet marketing services
					  </a>
              </div>
              <div id="collapseThree" class="accordion-body collapse">
                <div class="accordion-inner">
                  <img src="assets/img/icons/statistic-icon.png" class="alignleft" alt="" />
                  <h5>Internet marketing services</h5>
                  <p>
                    Sit et laudem aperiri argumentum. Vim laboramus instructior eu, minim aliquid accusata ut est, sea ut ridens causae quaerendum ea vide.
                  </p>
                  <a href="#">Learn more</a>
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
						4. Wordpress development services
					  </a>
              </div>
              <div id="collapseFour" class="accordion-body collapse">
                <div class="accordion-inner">
                  <img src="assets/img/icons/wp-icon.png" class="alignleft" alt="" />
                  <h5>Wordpress development services</h5>
                  <p>
                    Mei ad recteque rationibus, ex quaeque civibus eloquentiam vim. Solet cetero id nam. Ne eos nonumy voluptua, vis nobis euismod qualisque.
                  </p>
                  <a href="#">Learn more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



    </div>
  </section>


  <section id="bottom">
    <div class="container">

      <!-- divider -->
      <div class="row">
        <div class="span12">
          <div class="divider"></div>
        </div>
      </div>
      <!-- end divider -->


      <div class="row">
        <div class="span12">
          <h3><a class="btn btn-large btn-success" href="#"><i class="m-icon-big-swapdown m-icon-white"></i></a> Recent works</h3>

          <div id="latest-work" class="carousel btleft">
            <div class="carousel-wrapper">

              <ul class="portfolio-home da-thumbs">
                <li>
                  <div class="thumbnail">
                    <div class="image-wrapp">
                      <img src="assets/img/dummies/work1.jpg" alt="Portfolio name" title="" />
                      <article class="da-animate da-slideFromRight" style="display: block;">
                        <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt="" /></a>
                        <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
                      </article>
                    </div>
                    <div class="caption">
                      <h5>Portfolio name</h5>
                    </div>

                  </div>
                </li>
                <li>
                  <div class="thumbnail">
                    <div class="image-wrapp">
                      <img src="assets/img/dummies/work2.jpg" alt="Portfolio name" title="" />
                      <article class="da-animate da-slideFromRight" style="display: block;">
                        <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt="" /></a>
                        <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
                      </article>
                    </div>
                    <div class="caption">
                      <h5>Portfolio name</h5>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="thumbnail">
                    <div class="image-wrapp">
                      <img src="assets/img/dummies/work3.jpg" alt="Portfolio name" title="" />
                      <article class="da-animate da-slideFromRight" style="display: block;">
                        <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt="" /></a>
                        <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
                      </article>
                    </div>
                    <div class="caption">
                      <h5>Portfolio name</h5>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="thumbnail">
                    <div class="image-wrapp">
                      <img src="assets/img/dummies/work4.jpg" alt="Portfolio name" title="" />
                      <article class="da-animate da-slideFromRight" style="display: block;">
                        <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt="" /></a>
                        <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
                      </article>
                    </div>
                    <div class="caption">
                      <h5>Portfolio name</h5>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="thumbnail">
                    <div class="image-wrapp">
                      <img src="assets/img/dummies/work5.jpg" alt="Portfolio name" title="" />
                      <article class="da-animate da-slideFromRight" style="display: block;">
                        <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt="" /></a>
                        <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
                      </article>
                    </div>
                    <div class="caption">
                      <h5>Portfolio name</h5>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="thumbnail">
                    <div class="image-wrapp">
                      <img src="assets/img/dummies/work6.jpg" alt="Portfolio name" title="" />
                      <article class="da-animate da-slideFromRight" style="display: block;">
                        <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt="" /></a>
                        <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
                      </article>
                    </div>
                    <div class="caption">
                      <h5>Portfolio name</h5>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="thumbnail">
                    <div class="image-wrapp">
                      <img src="assets/img/dummies/work7.jpg" alt="Portfolio name" title="" />
                      <article class="da-animate da-slideFromRight" style="display: block;">
                        <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt="" /></a>
                        <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
                      </article>
                    </div>
                    <div class="caption">
                      <h5>Portfolio name</h5>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="thumbnail">
                    <div class="image-wrapp">
                      <img src="assets/img/dummies/work8.jpg" alt="Portfolio name" title="" />
                      <article class="da-animate da-slideFromRight" style="display: block;">
                        <a class="link_post" href="portfolio-detail.html"><img src="assets/img/icons/link_post_icon.png" alt="" /></a>
                        <span><a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg"><img src="assets/img/icons/zoom_icon.png" alt="Portfolio name" title="Portfolio name" /></a></span>
                      </article>
                    </div>
                    <div class="caption">
                      <h5>Portfolio name</h5>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection