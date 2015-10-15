<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OTIS - M+D Essentials</title>
    <link rel="stylesheet" href="{$ThemeDir}/css/app.css" />
    <script src="{$ThemeDir}bower_components/modernizr/modernizr.js"></script>
  </head>
  <body>

  <div class="bg-container">
    <header>
      <div class="row">
        <div class="medium-4 columns">
          <a href="#" class="button round">Launch OTIS</a>
        </div>
        <div class="medium-4 columns">
          <div class="logo-container text-center">
            <img src="{$ThemeDir}/images/md_color.png" />
          </div>
        </div>
        <div class="medium-4 columns text-right">
        <a href="#" class="button success round">View schedules</a>
        </div>
      </div>
    </header>
      
    <div class="content-container">
      <div class="row">
        <div class="large-12 columns">

          <section>
          <% loop $Categories %> 
            <h1>$Title</h1>
              <ul class="large-block-grid-3">
              <% loop $Services %>
                <% include ServiceCard %>
              <% end_loop %>


              </ul>
            <% end_loop %> 
            </section>
            
        </div>
      </div>
    </div>

    </div>
    <script type="text/javascript">
    (function(d) {
      var tkTimeout=3000;
      if(window.sessionStorage){if(sessionStorage.getItem('useTypekit')==='false'){tkTimeout=0;}}
      var config = {
        kitId: 'ivn3muh',
        scriptTimeout: tkTimeout
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+"wf-inactive";if(window.sessionStorage){sessionStorage.setItem("useTypekit","false")}},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+="wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
    </script>
    <script src="{$ThemeDir}/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="{$ThemeDir}/bower_components/foundation/js/foundation.min.js"></script>
    <script src="{$ThemeDir}/js/app.js"></script>
  </body>
</html>

