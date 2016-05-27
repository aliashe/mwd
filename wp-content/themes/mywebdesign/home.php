<?php remove_filter ('the_content', 'wpautop'); ?>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://aliashe.github.io/ks/wp-content/themes/asthecrowflys/css/bootstrap.css?ver=4.4.3" rel="stylesheet" type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>
<style>
.logo {
	background-image:url('data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(get_stylesheet_directory_uri() . '/images/logo.svg'))?>') !important; }
</style>
<style>
.portrait {
	background-image:url('data:image/jpeg;base64,<?php echo base64_encode(file_get_contents(wp_get_attachment_url(get_post_thumbnail_id(5)) ))?>') !important; }
</style>
  </head><body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div class="navbar navbar-fixed-top purple-border">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle hidden" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand big full-width page-scroll" href="#mywebsitedesign" style="width: 171px">
			<span height="60" alt="Brand" style="height: 60px; display: block; background-size: contain; background-repeat: no-repeat" class="hidden-xs logo"></span>
            <span style="height: 100%; display: block; background-size: contain; background-repeat: no-repeat; background-position: center;" class="hidden-lg hidden-md hidden-sm logo" alt="Brand" id="home"></span>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a class="btn btn-purple page-scroll" href="#mywebsitedesign">Home</a>
            </li>
            <li>
              <a class="btn btn-orange page-scroll" href="#about">About</a>
            </li>
            <li>
              <a class="btn btn-green page-scroll" href="#portfolio">Portfolio</a>
            </li>
            <li>
              <a class="btn btn-red page-scroll" href="#enquire-now">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
<div id="mywebsitedesign">
    <div class="cover hidden-xs" id="home">
        <div class="cover-image logo" style="background-size:70% auto; background-repeat:no-repeat;"></div>
        <a href="#about" class="page-scroll"><i class="fa wow bounce fa-arrow-circle-down fa-fw"></i></a>
      </div>
      <br class="hidden-lg hidden-md hidden-sm">
      <br class="hidden-lg hidden-md hidden-sm">
      <br class="hidden-lg hidden-md hidden-sm">
      <br class="hidden-lg hidden-md hidden-sm">
      <br class="hidden-lg hidden-md hidden-sm">
      <br class="hidden-lg hidden-md hidden-sm">
      <br class="hidden-lg hidden-md hidden-sm">
      <br class="hidden-lg hidden-md hidden-sm">
      <br class="hidden-lg hidden-md hidden-sm">
      <br class="hidden-lg hidden-md hidden-sm">
      <br class="hidden-lg hidden-md hidden-sm">
      <br class="hidden-lg hidden-md hidden-sm">
    </div>
    <div id="about">
      <div class="container-fluid no-pad bg-orange">
        <div class="container">
          <div class="row">
            <h1 class="col-xs-12">About</h1>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="col-lg-7">
          <br>
          <br class="hidden-xs hidden-sm hidden-md hidden-lg">
          <br class="hidden-xs hidden-sm hidden-md hidden-lg">
          <h2 class="col-sm-text-center orange"><?php echo get_the_title( 5 ); ?></h2>
          <span class="col-xs-8 col-xs-pull-2 col-sm-4 col-sm-pull-4 col-sm-offset-12 col-md-pull-0 col-md-4 col-md-offset-1 hidden-lg pull-right">
            <br class="hidden-md">
            <br class="hidden-sm hidden-xs hidden-md hidden-lg">
            <span style="background-position:center; background-size:cover; height: 0; width: 100%; padding-bottom: 134% !important;" class="img-responsive portrait"></span>
            <br class="hidden-md hidden-xs">
          </span>
<?php $id=5; 
$post = get_post($id); 
$content = apply_filters('the_content', $post->post_content); 
echo $content;  
?>
            <p class="blue col-sm-10 col-sm-push-1 col-xs-12">&nbsp;</p>
            <br>
            <br>
            <br>
            <br>
        </div>
        <div class="col-lg-4 col-lg-push-1 hidden-md hidden-sm hidden-xs">
          <br class="hidden-lg">
           <br class="hidden-lg">
          <br>
          <br>
          <br>
          <br>
          <span style="background-position:center; background-size:cover; height: 0; width: 100%; padding-bottom: 133% !important;" class="img-responsive portrait"></span>
        </div>
      </div>
    </div>
    <div id="portfolio">
      <div class="container-fluid no-pad bg-green">
        <div class="container">
          <div class="row">
            <h1 class="col-xs-12">Portfolio</h1>
          </div>
        </div>
      </div>
      <br>&nbsp;
      <div class="container-fluid portfolio ">
      
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- Mobile links -->

<div class="col-sm-6 col-md-4 hidden-md hidden-lg">
<div 
class="panel panel-default <?php echo get_post_meta($post->ID, 'colour', true) ?>" 
href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>"
data-toggle="lightbox" 
data-gallery="portfolio-xs-sm" 
data-title="<?php the_content(); ?>"
data-footer="<a href='http://<?php echo get_post_meta($post->ID, 'www', true) ?><?php the_title(); ?>' class='pull-right btn btn-white btn-xl hidden-xs hidden-sm' target='_blank'><?php echo get_post_meta($post->ID, 'www', true) ?><?php the_title(); ?></a><a href='http://<?php echo get_post_meta($post->ID, 'www', true) ?><?php the_title(); ?>' class='pull-right btn btn-white btn-xl hidden-md hidden-lg'><?php echo get_post_meta($post->ID, 'www', true) ?><?php echo get_post_meta($post->ID, 'www', true) ?><?php the_title(); ?></a>"
loading="hello" 
data-width="100%"
scale_height="true"
data-type="image"
>
            <div class="panel-heading bg-clear no-border-bottom">
              <span>
                <span style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>'); height: 0; width: 100%; padding-bottom: 134% !important; padding-bottom: 90% !important; background-size: cover; background-position: center;" class="img-responsive img-rounded"></span>
              </span>
            </div>
            <div class="panel-body">
              <h3 class="active">
                <span class="hidden-md"><?php the_title(); ?></span>
                <a class="btn pull-right">View</a>
              </h3>
            </div>
          </div>
        </div>

<!-- Desktop links -->

<div class="col-sm-6 col-md-4 hidden-xs hidden-sm">
<div 
class="panel panel-default <?php echo get_post_meta($post->ID, 'colour', true) ?>" 
href="<?php echo get_post_meta($post->ID, 'url', true) ?>"
data-toggle="lightbox" 
data-gallery="portfolio-md-lg" 
data-title="<?php the_content(); ?>"
data-footer="<a href='http://<?php echo get_post_meta($post->ID, 'www', true) ?><?php the_title(); ?>' class='pull-right btn btn-white btn-xl hidden-xs hidden-sm' target='_blank'><?php echo get_post_meta($post->ID, 'www', true) ?><?php the_title(); ?></a><a href='http://<?php echo get_post_meta($post->ID, 'www', true) ?><?php the_title(); ?>' class='pull-right btn btn-white btn-xl hidden-md hidden-lg'><?php echo get_post_meta($post->ID, 'www', true) ?><?php echo get_post_meta($post->ID, 'www', true) ?><?php the_title(); ?></a>"
loading="hello" 
data-width="100%"
scale_height="true"
>
            <div class="panel-heading bg-clear no-border-bottom">
                <span style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>'); height: 0; width: 100%; padding-bottom: 134% !important; padding-bottom: 90% !important; background-size: cover; background-position: center;" class="img-responsive img-rounded"></span>
            </div>
            <div class="panel-body">
              <h3 class="active">
                <span class="hidden-md"><?php the_title(); ?></span>
                <a class="btn pull-right">View</a>
              </h3>
            </div>
          </div>
        </div>



<?php endwhile; ?><?php endif; ?>
      </div>
      <br class="hidden-xs">
      <br class="hidden-xs">
    </div>
    <div class="container-fluid no-pad bg-purple">
      <div class="container">
        <div class="row">
          <h1 class="col-xs-12">Contact</h1>
        </div>
      </div>
    </div>
      <div class="cover contact">
        <div class="background-image-fixed cover-image" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/contact-background.svg'); background-size:contain; opacity: 0.4;"></div>
        <div class="container-fluid bg-fade">
          <div class="row" id="enquire-now">
            <div class="col-md-12 text-center">
              <h4 class="blue">
                <span class="hidden-md">Make Your Enquiry Now</span>
                <span class="hidden-sm hidden-xs hidden-lg">Enquire Now</span>
              </h4>
              <br class="hidden-lg hidden-md hidden-xs">
              <br class="hidden-lg hidden-md hidden-xs">
              <br class="hidden-md">
              <div class="container">
                <div class="row">
                  <p class="green lead text-center col-lg-8 col-lg-push-2">All budgets catered to, get in touch now
                    <br class="hidden-xs hidden-lg hidden-sm">for your free quote.</p>
                </div>
                <br>
                <br class=" hidden-md hidden-xs">
                <br class=" hidden-md hidden-xs">
                <br class="hidden-lg">
                <div class="row">
                  <div class="col-sm-6 col-sm-push-1 col-md-5 col-md-push-1 col-lg-4 col-lg-push-2 active no-pad">
                    <a class="btn btn-green btn-xl wide" href="mailto:ali@mywebsitedesign.net">ali@mywebsitedesign.net</a>
                  </div>
                  <div class="col-sm-6 col-md-4 col-md-push-2 col-lg-5 col-lg-push-2 active no-pad">
                    <a class="btn btn-red btn-xl wide" data-toggle="modal" data-target="#contact">Contact Form</a>
                  </div>
                </div>
                <br class="hidden-lg">
                <br>
                <br>
                <br class="hidden-lg hidden-md hidden-xs">
                <br class="hidden-lg hidden-md hidden-xs">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <a class="btn btn-grey bg-white btn-lg pull-right col-lg-pull-1 page-scroll" href="#mywebsitedesign">BACK TO TOP</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br class="hidden-lg hidden-md">
          </div>
        </div>
      </div>
      <div class="bg-clear hidden-lg hidden-md hidden-sm hidden-xs section text-center">
        <h4 class="blue">Make Your Enquiry Now</h4>
        <br>
        <div class="container">
          <div class="row">
            <p class="green lead text-center col-lg-6 col-lg-push-3">All budgets catered to, get in touch now for your free quote.</p>
          </div>
          <br>
          <br>
          <div class="row">
            <div class="col-lg-4 col-lg-push-2 active no-pad">
              <a class="btn btn-green btn-xl wide">ali@mywebsitedesign.net</a>
            </div>
            <div class="col-lg-5 col-lg-push-2 active no-pad">
              <a class="btn btn-red btn-xl wide">Contact Form</a>
            </div>
          </div>
          <br>
          <br>
        </div>
      </div>
    </div>
    <div class="container hidden-lg hidden-md hidden-sm hidden-xs">
      <div class="row">
        <div class="col-lg-10 col-lg-push-1">
          <a class="btn btn-grey btn-lg pull-right col-lg-pull-1">BACK TO TOP</a>
        </div>
      </div>
    </div>
    <div class="modal fade" id="contact">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="fa fa-3x fa-fw fa-times-circle">&nbsp;</i>
            </button>
          </div>
          <div class="modal-body">
            <h5 class="modal-title green">Contact Form</h5>
            <p class="blue small">Reach out today and make an enquiry. You will receive an individual response, usually within 24 hours. No commitment or pressure!</p>
            <form role="form">
              <div class="form-group">
                <div>
                  <label class="control-label" for="exampleInputEmail1">
                    <p class="purple">Full Name</p>
                  </label>
                  <span class="col-xs-12 no-pad">
                    <input type="text" class="form-control input-xxl col-xs-8" id="inputEmail3">
                  </span>
                  <br>
                </div>
                <div>
                  <label class="control-label" for="exampleInputEmail1">
                    <p class="purple not-first">Email</p>
                  </label>
                  <span class="col-xs-12 no-pad">
                    <input type="email" class="form-control input-xxl col-xs-8" id="inputEmail3">
                  </span>
                  <br>
                </div>
                <div>
                  <label class="control-label" for="exampleInputEmail1">
                    <p class="purple not-first">Message</p>
                  </label>
                  <textarea type="text" class="form-control input-xxl" id="textarea" name="textarea" rows="5"></textarea>
                </div>
              </div>
              <p class="orange small">
                <em>Your personal details are treated with confidentiality and privacy, and
                  we will never pass on information to 3rd parties.
                  <br>&nbsp;</em>
              </p>
              <div class="row">
                <div class="form-group">
                  <br>
                  <div class="active">
                    <span class="col-xs-12 text-center">
                      <button type="submit" class="btn btn-xxl btn-red">Send Message</button>
                    </span>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

<!-- Google Analytics -->
<script>
window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
ga('create', 'UA-78406132-1', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->

<!-- JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript">
    function downloadJSAtOnload() {
        var links = ["https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js", "https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js", "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js", "https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.js", "<?php echo get_stylesheet_directory_uri(); ?>/js/script.js", "https://www.google-analytics.com/analytics.js"],
            headElement = document.getElementsByTagName("head")[0],
            linkElement, i;
        for (i = 0; i < links.length; i++) {
            linkElement = document.createElement("script");
            linkElement.src = links[i];
            headElement.appendChild(linkElement);
        }
    }
    if (window.addEventListener)
        window.addEventListener("load", downloadJSAtOnload, false);
    else if (window.attachEvent)
        window.attachEvent("onload", downloadJSAtOnload);
    else window.onload = downloadJSAtOnload;
</script>
<!-- /JS -->

<!-- CSS -->
<script type="text/javascript">
var loadCSSFiles = function() {
    var links = ["https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css", "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css", "https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.css"],
        headElement = document.getElementsByTagName("head")[0],
        linkElement, i;
    for (i = 0; i < links.length; i++) {
        linkElement = document.createElement("link");
        linkElement.rel = "stylesheet";
        linkElement.href = links[i];
        headElement.appendChild(linkElement);
    }
};

var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
if (raf) {
    raf(loadCSSFiles);
} else {
    window.addEventListener("load", loadCSSFiles);
}
</script>
<!-- /CSS -->

</body></html>