<?php get_header(); ?>
<body>
<div class="container">
<div class="tealbox round-top round-bot">
<p class="lead aligncenter">New stuff lands on 12 Feb! Chemistry > Introductory Topics > States of Matter</p>
</div><!--tealbox-->
</div><!--container-->
<div class="container header">
<h2 class="add-half-top">What did you <span class="subheader">learn</span> today? Choose a subject:</h2>
<div class="row">
<div class="subject columns aligncenter alpha">
<a href="/subjects/economics" class="email"><span>
<img src="/wp-content/themes/olresponsive/img/econs.png">
<h2>Econs</h2>
</span></a>
</div><!--3col-->
<div class="subject columns aligncenter">
<a href="/subjects/chemistry" class="email"><span>
<img src="/wp-content/themes/olresponsive/img/chem.png">
<h2>Chem</h2>
</span></a>
</div><!--3col-->
<div class="subject columns aligncenter">
<img src="/wp-content/themes/olresponsive/img/math.png" class="disabled">
<h2 class="disabled">Math</h2>
</div><!--3col-->
<div class="subject columns aligncenter">
<img src="/wp-content/themes/olresponsive/img/physics.png" class="disabled">
<h2 class="disabled">Physics</h2>
</div><!--3col-->
<div class="subject columns aligncenter omega">
<img src="/wp-content/themes/olresponsive/img/bio.png" class="disabled">
<h2 class="disabled">Bio</h2>
</div><!--3col-->
</div><!--row-->
<div class="row">
<div class="two-thirds column alpha">
<div id="container">
  <script type='text/javascript'>
    jwplayer('container').setup({
      'flashplayer': '/wp-content/themes/olresponsive/jwplayer/player.swf',
      'playlist': [{
        'file': 'http://www.youtube.com/watch?v=nY7c1v93aVk',
        'provider': 'youtube',
        'image': '/wp-content/uploads/Ending-Wrapper.png'
      },{ 
        'file': 'http://www.youtube.com/watch?v=P7_9sD2jZtE', 
        'provider': 'youtube',
        'image': '/wp-content/uploads/Ending-Wrapper.png'
      },{ 
        'file': 'http://www.youtube.com/watch?v=N6cRTr2FFew', 
        'provider': 'youtube',
        'image': '/wp-content/uploads/Ending-Wrapper.png'
      },{ 
        'file': 'http://www.youtube.com/watch?v=of2QpN2KjIM', 
        'provider': 'youtube',
        'image': '/wp-content/uploads/Ending-Wrapper.png'
      },{ 
        'file': 'http://www.youtube.com/watch?v=T7S1qzQj4rc', 
        'provider': 'youtube',
        'image': '/wp-content/uploads/Ending-Wrapper.png'
      },{ 
        'file': 'http://www.youtube.com/watch?v=JUUMtg2N3fw', 
        'provider': 'youtube',
        'image': '/wp-content/uploads/Ending-Wrapper.png'
      }],
      'repeat': 'always',
      'shuffle': 'true',
      'width': '620',
      'height': '392',
      'plugins': {
        'hd-2': {'state': 'true'},
        // 'captions-2': {file:''}
      },
      'controlbar': 'bottom',
      'logo': {
        'file': '/wp-content/uploads/Logo-Player.png',
        'position': 'top-left',
      },
    'skin': '/wp-content/themes/olresponsive/jwplayer/schoon.zip'
    });
  </script>
  </div>
</div><!--2/3col-->
<div class="one-third column omega">
<h1><a href="/about-us"><span class="subheader">What are we?</span></a> Free education. That's what we are. Watch a video, and hear it from our lecturers.</h1>
</div><!--1/3col-->
</div><!--row-->
</div><!--container-->
<!--[if lt IE 7 ]>
  <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->
</body>
<?php get_footer(); ?>
</html>