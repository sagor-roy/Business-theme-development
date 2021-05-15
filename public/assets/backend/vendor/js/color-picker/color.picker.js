$(document).ready( function() {

    $('.demo').each( function() {
      //
      // Dear reader, it's actually very easy to initialize MiniColors. For example:
      //
      //  $(selector).minicolors();
      //
      // The way I've done it below is just for the demo, so don't get confused
      // by it. Also, data- attributes aren't supported at this time. Again,
      // they're only used for the purposes of this demo.
      //
      $(this).minicolors({
        control: $(this).attr('data-control') || 'hue',
        defaultValue: $(this).attr('data-defaultValue') || '',
        format: $(this).attr('data-format') || 'hex',
        keywords: $(this).attr('data-keywords') || '',
        inline: $(this).attr('data-inline') === 'true',
        letterCase: $(this).attr('data-letterCase') || 'lowercase',
        opacity: $(this).attr('data-opacity'),
        position: $(this).attr('data-position') || 'bottom',
        swatches: $(this).attr('data-swatches') ? $(this).attr('data-swatches').split('|') : [],
        change: function(hex, opacity) {
          var log;
          try {
            log = hex ? hex : 'transparent';
            if( opacity ) log += ', ' + opacity;
            console.log(log);
          } catch(e) {}
        },
        theme: 'default'
      });

    });

  });
