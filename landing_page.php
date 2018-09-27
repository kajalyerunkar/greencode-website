<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Title -->
    <title>Greencode Technologies</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
       <link rel="stylesheet" href="css/style.css">
    <!-- Core Stylesheet -->
    
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <<!-- link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/custom-icon.css">
      <link rel="stylesheet" href="css/classy-nav.min.css">
      <link rel="stylesheet" href="css/ihover.min.css"> -->
     <link rel="stylesheet" media="all" href="https://public-assets.envato-static.com/assets/market/pages/preview/index-004d35cdd5d555cdd3e956d1b916825642de06529f0fe91fd9f390813761d2fc.css" />
        
</head>

<body>
    <div class="warpper clearfix">
        <!-- Animation -->
        <div class="shapes-bg"></div>

        <section id="hero" class="hero-section">
    <div class="hero-layer main-gradient"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-logo">
                    <img src="http://www.skilltechwebdesign.com/htmlthemes/particle/assets/images/hero-logo.png" alt="logo">
                    <div id="particles-js"><canvas class="particles-js-canvas-el" width="1187" height="350" style="width: 100%; height: 100%;"></canvas></div>
                </div>
                <div class="typed-text">
                    <span class="skilltechtypetext">Coolest Modern HTML Theme</span><span class="typed-cursor">|</span>
                </div>
            </div>
        </div>
    </div>
</section>
    </div>
    
<script>
// GA: universal analytics link wrapper
(function(){
    window._envTrkrs = [["m", "UA-11834194-7"]];

    var debug = false;
    var MAX_RETRIES = 10;

    /*
       The script needs to wait until the Analytics script
       has been downloaded from Google before initializing
    */
    var waitForAnalytics = function(){
        this.count = this.count || 0;

        if (window.ga && ga.getByName) {
            e.init();
        } else {
            if (count < MAX_RETRIES) { setTimeout(waitForAnalytics, 250); }
            count++;
        }
    };

    var e = {
        _envArray: [],
        _envTrkrs: (window._envTrkrsCust && window._envTrkrsCust.length) ? window._envTrkrs.concat(window._envTrkrsCust) : window._envTrkrs,
        init: function() {
            for (var i=0; i < _envTrkrs.length; i++) {
              if(!ga.getByName(_envTrkrs[i][0])) {
                ga("create", _envTrkrs[i][1], "auto", {name: _envTrkrs[i][0], allowLinker: true});
              }
            }

            document.addEventListener('DOMContentLoaded', function(){
                e.wrapperInit();
            });

            if (debug) {console.log('Initiated');}
        },
        wrapperInit: function() {
            if (typeof window._envIsRunning != 'undefined' || window._envIsRunning == true) {
                return
            }
            window._envIsRunning = true;

            if (document.addEventListener) {
                document.addEventListener('click', function(event){
                    var target = event.target;
                    if (target && target.tagName === 'A') {
                        e._envLinksTracker(event);
                    }
                });
            }
        },
        isInArray: function(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = new RegExp(t[n], 'i');
                if (r.test(e)) {
                    return n
                }
            }
            return -1
        },
        _envTrackevent: function(e, t, n, r) {
            for (var i = 0; i < this._envTrkrs.length; i++) {
                var s = this._envTrkrs[i][0].length == 0 ? '' : this._envTrkrs[i][0] + '.';
                r.length == 0 ? ga(s + 'send', 'event', e, t, n) : ga(s + 'send', 'event', e, t, n, r)
            }
        },
        _envTrackpageview: function(e, t) {
            t = t.charAt(0) == '/' ? t : '/' + t;
            for (var n = 0; n < this._envTrkrs.length; n++) {
                var r = this._envTrkrs[n][0].length == 0 ? '' : this._envTrkrs[n][0] + '.';
                ga(r + 'send', 'pageview', e + t);
            }
        },
        _envLinksTracker: function(t) {
            var r = false;
            var i = {
                outbound: {
                    run: true,
                    useEvent: true
                },
                download: {
                    run: true,
                    useEvent: true,
                    reg: ''
                },
                self: {
                    run: false,
                    useEvent: true
                },
                mail: {
                    run: true,
                    useEvent: true
                },
                ext: /\.(doc.?|xls.?|ppt.?|exe|zip|rar|gz|tar|tgz|dmg|csv|pdf|xpi|txt|mp3)$/i
            };
            var s = t.srcElement ? t.srcElement : this;
            if (t.srcElement) {
                r = true
            }
            while (s.tagName != 'A') {
                s = s.parentNode
            }
            if (s.href == undefined || s.href == null) {
                return true
            }
            var o = s.href;
            if (o.length == 0) return;
            var u = s.hostname.toLowerCase();
            var a = s.pathname;
            if (a.length == 0) {
                a = '/'
            } else if (a.substr(0, 1) != '/') {
                a = '/' + a
            }
            var f = s.protocol;
            var l = s.search;
            var c = location.hostname;
            c = c.replace(/^www\./i, '').toLowerCase();
            u = u.replace(/^www\./i, '').toLowerCase();
            if (o.match(/^#/)) {
                if (i.self.run) {
                    i.self.useEvent ? e._envTrackevent('self', 'click - ' + c, o, '') : e._envTrackpageview('/virtual/self', '/' + o);
                    return true
                }
            } else if (f.match(/^mailto:/i)) {
                if (i.mail.run) {
                    o = o.replace(/^mailto:/i, '');
                    i.mail.useEvent ? e._envTrackevent('mailto', 'click - ' + c, o, '') : e._envTrackpageview('/virtual/mailto', o);
                    return true
                }
            } else if ((new RegExp(i.ext)).test(a)) {
                if (i.download.run) {
                    o = o.replace(/^https?:\/\//i, '');
                    i.download.useEvent ? e._envTrackevent('download', 'click - ' + c, o, '') : e._envTrackpageview('/virtual/download', o);
                    return true
                }
            } else if (u == undefined || u.length == 0 || f.match(/^javascript:/i)) {
                return
            } else if ((new RegExp(c + '$', 'i')).test(u) || (new RegExp(u + '$', 'i')).test(c)) {
                if (i.download.run && i.download.reg.length != 0) {
                    if ((new RegExp(i.download.reg, 'i')).test(a + l)) {
                        o = o.replace(/^https?:\/\//i, '');
                        i.download.useEvent ? e._envTrackevent('download', 'click - ' + c, o, '') : e._envTrackpageview('/virtual/download', o);
                        return true
                    }
                }
            } else if (u != c) {
                if (e.isInArray(u, e._envArray) == -1) {
                    if (i.outbound.run) {
                        i.outbound.useEvent ? e._envTrackevent('outbound', 'click - ' + c, u + a + l, '') : e._envTrackpageview('/virtual/outbound', u + a);
                        return true
                    }
                } else if (e.isInArray(u, e._envArray) != -1) {
                    var h = s.target;
                    if (h != null && h == '_blank') {
                        if ((new RegExp(/_utma=/)).test(l)) {
                            return true
                        }
                        var p = e._envTrkrs[0][0].length == 0 ? '' : _envTrkrs[0][0] + '.';
                        return true
                    } else {
                        return false
                    }
                }
            }
        }
    };

    waitForAnalytics();
})()
</script>




<script>
  // Set New Relic custom attributes
  (function () {
    if (typeof newrelic !== 'undefined') {
      newrelic.setCustomAttribute('pageType', 'other')
    }
  })()
</script>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-585RXMV');</script>
        

   
   <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <!-- <script src="js/plugins/plugins.js"></script> -->
    <!-- Active js -->
    <!-- <script src="js/active.js"></script> -->
    <!-- <script type="text/javascript">
      $('#demo16').trigger('startRumble');
    </script> -->

    <!-- <script src="js/jquery.min.js"></script> -->
    <script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/jquery.jrumble.1.3.js"></script>
    <script type="https://www.eliteinfoworld.com/wp-includes/js/jquery/ui/core.min.js"></script>
    <script type="text/javascript" src="https://www.eliteinfoworld.com/wp-content/themes/eliteinfo/js/common.js"></script>
    <script type="text/javascript" src="https://www.eliteinfoworld.com/wp-content/themes/eliteinfo/js/wow.js"></script>
    <script type="text/javascript" src="https://www.eliteinfoworld.com/wp-content/themes/eliteinfo/js/script.js"></script>
    <script type="text/javascript" src="https://www.eliteinfoworld.com/wp-content/themes/eliteinfo/js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="https://www.eliteinfoworld.com/wp-content/themes/eliteinfo/js/jquery.masonry.min.js"></script>
   <!--  <script type="text/javascript" src="https://www.eliteinfoworld.com/wp-content/themes/eliteinfo/js/sketch.js"></script> -->
     <script type="text/javascript" src="https://static1.clutch.co/api/widget.js"></script>


</body>

</html>