
		  // BACKGROUND VIDEO
          function homeVid()  {
            var vid = document.getElementById('videos-src');
            if(vid) {
                $('body').addClass('fade-video-out');
    
                // melange le tableau
                function randomInt(mini, maxi) {
                    var nb = mini + (maxi+1-mini)*Math.random();
                    return Math.floor(nb);
                }
                 
                Array.prototype.shuffle = function(n) {
                    if(!n)
                        n = this.length;
                    if(n > 1) {
                        var i = randomInt(0, n-1);
                        var tmp = this[i];
                        this[i] = this[n-1];
                        this[n-1] = tmp;
                        this.shuffle(n-1);
                     }
                }
    
                // cree tableau
                var videoSrc = $('.video-clip-src').data('src');
                var playlist = videoSrc.split(', ');
    
    
                // mélange le tableau
                playlist.shuffle();     
    
                // $('#list').prepend(playlist.join());
    
                var i = 0;
    
                    vid = document.getElementById('video-clip');
                    // var source = vid.getElementsByTagName('source');
                    var source = document.createElement('source');
                    vid.appendChild(source);
                    // vid.src = playlist[i];
                    source.setAttribute('type', 'video/mp4');
                    source.setAttribute('src', playlist[i]);
                    vid.play();
    
                    vid2 = document.getElementById('video-clip-2');
                    // var source = vid.getElementsByTagName('source');
                    var source2 = document.createElement('source');
                    vid2.appendChild(source2);
                    // vid.src = playlist[i];
                    source2.setAttribute('type', 'video/mp4');
                    source2.setAttribute('src', playlist[i+1]);
                    // vid2.pause();
    
                $('body').removeClass('fade-video-out').addClass('fade-video-in');
                 
                // fade fin de video
                var u = true;
                $('#video-clip').on('timeupdate', function(event) {  
                    var timeFromVideoEnd = 2;  
                    var current = Math.round(event.target.currentTime);  
                    var total = Math.round(event.target.duration);  
                    var calc = total - current;
    
                    if ( (calc < timeFromVideoEnd) && u == true ) {    
    
                        u = false;
    
                        $(this).addClass('fade-out');
    
                        i++;
                        if (i == playlist.length) {    
                        i = 0;
                        }
                        if(i == 1) {
                            vid2.play();
                        }
                        else {
                            source2.setAttribute('src', playlist[i]);
                             vid2.load();
                            vid2.play(); 
                        }
    
                        setTimeout(function() {
                            $(this).addClass('zindex');
                        }, 1000);
                        setTimeout(function() {
                            $('#video-clip-2').removeClass('fade-out');
                        }, 500);
    
    
                    }
                })
                .on('ended',function(){
                    u = true;
                });
    
                var u2 = true;
                $('#video-clip-2').on('timeupdate', function(event) {  
    
                    var timeFromVideoEnd = 2;  
                    var current = Math.round(event.target.currentTime);  
                    var total = Math.round(event.target.duration);  
                    var calc = total - current;
    
                    if ( (calc < timeFromVideoEnd) && u2 == true ) {    
    
                        u2 = false;
    
                        $(this).addClass('fade-out');
    
                        i++;
                        if (i == playlist.length) {    
                        i = 0;
                        }
                        if(i == 1) {
                            vid.play();
                        }
                        else {
                            source.setAttribute('src', playlist[i]);
                             vid.load();
                            vid.play(); 
                        }
    
                        setTimeout(function() {
                            $(this).addClass('zindex');
                        }, 1000);
                        setTimeout(function() {
                            $('#video-clip').removeClass('fade-out');
                        }, 500);
                    }
                }).on('ended',function(){
                    u2 = true;
                });
    
            }
        }
        homeVid();
        // END HOME