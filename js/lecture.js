jwplayer('container').setup({
  'flashplayer': '/wp-content/themes/olresponsive/jwplayer/player.swf',
  'width': '100%',
  'height': '100%',
  'plugins': {
    'hd-2': {'state': 'true'},
    // 'captions-2': {file:''},
    'lightsout-1': {}
  },
  'controlbar': 'bottom',
  'logo': {
    'file': '/wp-content/uploads/Logo-Player.png',
    'position': 'top-left',
  },
  'skin': '/wp-content/themes/olresponsive/jwplayer/schoon.zip',
  'screencolor': 'ffffff'
});