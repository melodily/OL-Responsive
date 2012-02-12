<?php get_header(); ?>
<body>
<div class="container">
<?php echo do_shortcode('[sp-twitter users=27 count=1 displayFormat=div]')?>
<h1>What did you <span class="subheader">learn</span> today? Choose a subject:</h1>
<div class="row">
<div class="span2">
<a href="/subjects/economics"><span>
<img src="/wp-content/themes/olresponsive/img/econs.png">
<h2>Econs</h2>
</span></a>
</div><!--3col-->
<div class="span2">
<a href="/subjects/chemistry"><span>
<img src="/wp-content/themes/olresponsive/img/chem.png">
<h2>Chem</h2>
</span></a>
</div><!--2col-->
<div class="span2">
<img src="/wp-content/themes/olresponsive/img/math.png" class="muted">
<h2 class="disabled">Math</h2>
</div><!--2col-->
<div class="span2">
<img src="/wp-content/themes/olresponsive/img/physics.png" class="muted">
<h2 class="disabled">Physics</h2>
</div><!--2col-->
<div class="span2">
<img src="/wp-content/themes/olresponsive/img/bio.png" class="muted">
<h2 class="disabled">Bio</h2>
</div><!--2col-->
<div class="span8">
<div class="video" id="container">
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
  </div><!--video-->
</div><!--8col-->
<div class="span4">
  <h1><a href="/about-us"><span class="subheader">What are we?</span></a> Free education. That's what we are. Watch a video, and hear it from our lecturers.</h1>
</div><!--4col-->
</div><!--row-->
</div><!--container-->
<!--[if lt IE 7 ]>
  <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->
</body>
<?php get_footer(); ?>
</html>