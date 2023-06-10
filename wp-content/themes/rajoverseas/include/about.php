<section class="section-bg">
   <div class="container" data-aos="fade-up">
      <div class="section-title">
         <h2><?php echo get_theme_mod('title1') ?></h2>
      </div>
      <div class="row">
         <div class="col-lg-6 aboutImage hero-img aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
              <div class="radialSection">
				  <button>25 <br/> Years of Excellence Service</button>
              <ul>
                  
                   <a href="#mission">
 <li>
  <input id="c1">
  <label for="c1" class="c1"><?php echo get_theme_mod('circle1') ?></label>
</li>
</a>

<a href="#vision">
<li>
<input id="c2">
<label for="c2" class="c2"><?php echo get_theme_mod('circle2') ?></label>
</li>

</a>

<a href="#goals">
<li>
<input id="c3">
<label for="c3" class="c3"><?php echo get_theme_mod('circle3') ?></label>
</li>
</a>

<a href="#message">
<li>
<input id="c4">
<label for="c4" class="c4"><?php echo get_theme_mod('circle4') ?></label>
</li>
</a>

<a href="#service">
<li>
<input id="c5">
<label for="c5" class="c5"><?php echo get_theme_mod('circle5') ?></label>
</li>
</a>

<a href="#features">
<li>
<input id="c6">
<label for="c6" class="c6"><?php echo get_theme_mod('circle6') ?></label>
</li>
</a>

<a href="#flowchart">
<li>
<input id="c7">
<label for="c7" class="c7"><?php echo get_theme_mod('circle7') ?></label>
</li>
</a>

<a href="#clients">
<li>
<input id="c8">
<label for="c8" class="c8"><?php echo get_theme_mod('circle8') ?></label>
</li>
</a>
            </ul>
            </div>
         </div>
         <div class="col-lg-6 content aboutTitle" >
            <!-- <h3><?php echo get_theme_mod('title') ?></h3> -->
            <p style="text-align: justify!important;"><?php echo nl2br(get_theme_mod('description')) ?></p>
            <div class="row gy-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
               <div class="col-lg-3 col-6">
                  <div class="stats-item text-center w-100 h-100">
                     <span class="counterNumber" style="color: #179c49;"><?php echo get_theme_mod('counter4') ?> </span>
                     <p>Valuable Clients</p>
                  </div>
               </div>
               <div class="col-lg-3 col-6">
                  <div class="stats-item text-center w-100 h-100">
                     <span class="counterNumber" style="color: #106eea;"><?php echo get_theme_mod('counter3') ?> </span>
                     <p>Countries Recruiting</p>
                  </div>
               </div>
               <div class="col-lg-3 col-6">
                  <div class="stats-item text-center w-100 h-100">
                     <span class="counterNumber" style="color: #eb6152;"><?php echo get_theme_mod('counter2') ?> </span>
                     <p>Recruitment Worldwide</p>
                  </div>
               </div>
               <div class="col-lg-3 col-6">
                  <div class="stats-item text-center w-100 h-100">
                     <span class="counterNumber" style="color: #9478b5;"><?php echo get_theme_mod('counter1') ?> </span>
                     <p>Established in Nepal</p>
                  </div>
               </div>
            </div>
 
         </div>
      </div>
   </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
var nbOptions = 8; // number of menus
var angleStart = -360; // start angle
// jquery rotate animation
function rotate(li,d) {
  $({d:angleStart}).animate({d:d}, {
   step: function(now) {
    $(li)
      .css({ transform: 'rotate('+now+'deg)' })
      .find('label')
       .css({ transform: 'rotate('+(-now)+'deg)' });
   }, duration: 16
  });
}

// show / hide the options
function toggleOptions(s) {
  $(s).toggleClass('open');
  var li = $(s).find('li');
  var deg = $(s).hasClass('half') ? 180/(li.length-1) : 360/li.length;
  for(var i=0; i<li.length; i++) {
   var d = $(s).hasClass('half') ? (i*deg)-90 : i*deg;
   $(s).hasClass('open') ? rotate(li[i],d) : rotate(li[i],angleStart);
  }
}

$('.radialSection button').click(function(e) {
  toggleOptions($(this).parent());
});

setTimeout(function() { toggleOptions('.radialSection'); }, 100);
</script>

