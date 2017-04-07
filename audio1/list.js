function _(id){return document.getElementById(id);}
function _addClass(el, className) {
	el.className += " " + className;
	return el;
}

function _removeClass(el, className) {
	el.className = el.className.split(" ").filter(function (item) {
		if (item != className)
			return true;
	}).join(" ");
	return el;
}

function _isClass(el, className) {
	var a = el.className.split(" ").filter(function (item) {
		if (item == className)
			return true;
		else
			return false;
	});
	if (a.length >= 1)
		return true;
	else
		return false;
}

function _toggleClass(el, className) {
	if (_isClass(el, className))
		_removeClass(el, className);
	else
		_addClass(el, className);
}


function audioApp(tracks){
					var audio = new Audio();
					var audio_folder = "";
					var audio_ext = ".mp3";
					var audio_index = 1;
					var is_playing = false;
					var playingtrack;
					var trackbox = _("trackbox");
               var tracksE2 = (tracks != undefined || tracks != null)? tracks : [["No Music files", ""]];


	var audio, playbtn, mutebtn, seekslider, volumeslider, seeking=false, seekto, curtimetext, durtimetext, playlist_status, dir, ext, agent;
	dir = "", seekTo = -1, prevTrack = 0;
	var revers = false;
	var playlist_index = 0;
	ext = ".mp3";
    agent = navigator.userAgent.toLowerCase();
    if(agent.indexOf('firefox') != -1 || agent.indexOf('opera') != -1) {
        ext = ".ogg";
    }
	// Set object references
	playbtn = document.getElementById("playpausebtn");
	playbtn.style.background = "url(images/player_play.svg) no-repeat center top";
	nextbtn = document.getElementById("playnextbtn");
		if(nextbtn.addEventListener){
			nextbtn.addEventListener("click", playNext, false);
		} else {
			nextbtn.attachEvent('onclick', playNext);
		}	
	backbtn = document.getElementById("playbackbtn");
		if(backbtn.addEventListener){
			backbtn.addEventListener("click", playBack, false);
		} else {
			backbtn.attachEvent('onclick', playBack);
		}		
	mutebtn = document.getElementById("mutebtn");
	seekslider = document.getElementById('seekslider');
	reversebtn = document.getElementById("playreversebtn");
	volumeslider = document.getElementById("volumeslider");
	curtimetext = document.getElementById("curtimetext");
	durtimetext = document.getElementById("durtimetext");
	playlist_status = document.getElementById("playlist_status");	

// //Remove Event Handing

// 	playbtn.removeEventListener("click");
// 	reversebtn.removeEventListener("click");
// 	mutebtn.removeEventListener("click");
// 	seekslider.removeEventListener("click");
// 	seekslider.removeEventListener("mousedown");
// 	seekslider.removeEventListener("mousemove");
// 	seekslider.removeEventListener("mouseup");
// 	volumeslider.removeEventListener("mousemove");
// 	audio.removeEventListener("timeupdate");
// 	audio.removeEventListener("ended");

// Add Event Handling
	playbtn.addEventListener("click",playPause);
	reversebtn.addEventListener("click", playReverse);
	mutebtn.addEventListener("click", mute);
	seekslider.addEventListener("click", function(event){ seekClick(event);});
	seekslider.addEventListener("mousedown", function(event){ seeking=true; seek(event); });
	seekslider.addEventListener("mousemove", function(event){ seek(event);  });
	seekslider.addEventListener("mouseup", function(){ seeking=false; });
	volumeslider.addEventListener("mousemove", setvolume);
	audio.addEventListener("timeupdate", function(){ seektimeupdate(); });
	audio.addEventListener("ended", function(event){ switchTrack();});	
	// Functions


	function SwitchTrack(event){
						// _toggleClass(event.target.firstChild, "count__play");


						if (playingtrack != event.target.id) {
							_removeClass(document.getElementById(prevTrack).firstChild, "count__play");
							_addClass(event.target.firstChild, "count__play");
							console.log(prevTrack);
							prevTrack = event.target.id;

						} else {
							// _removeClass(event.target.firstChild, "count__play");
							// _addClass(event.target.firstChild, "count__pause");
						}

						if(is_playing){
						    if(playingtrack != event.target.id){
							    is_playing = true;
								//_(playingtrack).style.background = "url(images/player_play.svg) no-repeat center top";
							    // event.target.style.background = "url(images/player_pause.svg) no-repeat center top";
							    
							    audio.src = audio_folder+ tracksE2[event.target.id][1] +audio_ext;
					            audio.play();
							} else {
							    audio.pause();
							    is_playing = false;
							    
								// event.target.style.background = "url(images/player_play.svg) no-repeat center top";
							}
						} else {
							is_playing = true;
							// event.target.style.background = "url(images/player_pause.svg) no-repeat center top";
							if(playingtrack != event.target.id){
								audio.src = audio_folder+tracksE2[event.target.id][1]+audio_ext;
							}
					        audio.play();
						}
						playlist_status.innerHTML = tracksE2[event.target.id][0];
						playingtrack = event.target.id;
		}

	trackbox.innerHTML = "";


	for(var i = 0; i < tracksE2.length; i++) {
					var tb = document.createElement("div");
					// var pb = document.createElement("button");
					var tn = document.createElement("div");
					tb.className = "trackbar";
					// pb.className = "playbutton";
					tn.className = "trackname";
					tn.innerHTML = "<div class='count'> <span>"+audio_index+".</span></div> "+tracksE2[i][0];
					tn.id = i;
					tn.addEventListener("click", SwitchTrack);
					// tb.appendChild(pb);
					tb.appendChild(tn);
					trackbox.appendChild(tb);
					audio_index++;
	
	}

	audio.addEventListener("ended",function(){
				// _(playingtrack).style.background = "url(images/player_play.svg) no-repeat center top";
				playingtrack = "";
				is_playing = false;
			});

// Audio Object	
	audio.src = dir+tracksE2[0][1]+ext;
	audio.loop = false;
	audio.pause();
	playlist_status.innerHTML = tracksE2[0][0];

		var audio_count = 1;
	function playNext(){
		audio_count++;
		if (audio_count == tracksE2.length) audio_count = 0;

		// playlist_status.innerHTML = tracks[track][audio_count];
		playlist_status.innerHTML = tracksE2[audio_count][0];

		audio.src = dir+tracksE2[audio_count][1]+ext;
	   audio.play();
	}
	function playBack(){
		audio_count--;
		if (audio_count == -1) audio_count = tracksE2.length - 1;
		playlist_status.innerHTML = tracksE2[audio_count][0];
		audio.src = dir+tracksE2[audio_count][1]+ext;
	   audio.play();
	}	
	function playReverse(){
		if(!revers){
			revers = true;
			console.log('on')
		} else{
			revers = false;
			console.log('off')
		}
	}
	function switchTrack(){		

		if (!revers){
			console.log(tracksE2[playlist_index][0])
			if(playlist_index == (tracksE2.length - 1)){
				playlist_index = 0;
			} else {
		    playlist_index++;	
			}
		} else {
			console.log(playlist_index)
		}
		playlist_status.innerHTML = tracksE2[playlist_index][0];
		audio.src = dir+tracksE2[playlist_index][1]+ext;
	   audio.play();
	}


	function playPause(){
		if(audio.paused){
		    audio.play();
		    playbtn.style.background = "url(images/player_pause.svg) no-repeat center top";
	    } else {
		    audio.pause();
		    playbtn.style.background = "url(images/player_play.svg) no-repeat center top";
	    }
	}
	function mute(){
		if(audio.muted){
		    audio.muted = false;
		    mutebtn.style.background = "url(images/player_volume.svg) no-repeat center top";
	    } else {
		    audio.muted = true;
		    mutebtn.style.background = "url(images/player_mute.svg) no-repeat center top";
	    }
	}

	function seek(event){
		console.log(seekslider.value)
		if(seeking){
			
			seekTo = audio.duration * (seekslider.value / 100);
			
		}
	}

	function seekClick(event) {
		seekTo = audio.duration * (seekslider.value / 100);
	}

	function setvolume(){
	    audio.volume = volumeslider.value / 100;
    }
	function seektimeupdate(){
		if (seekTo < 0) {
			seekslider.value = audio.currentTime * (100 / audio.duration);
		} else {
			seekslider.value = seekTo;
			audio.currentTime = seekTo;
			seekTo = -1;
		}
		
		var curmins = Math.floor(audio.currentTime / 60);
	    var cursecs = Math.floor(audio.currentTime - curmins * 60);
	    var durmins = Math.floor(audio.duration / 60);
	    var dursecs = Math.floor(audio.duration - durmins * 60);
		if(cursecs < 10){ cursecs = "0"+cursecs; }
	    if(dursecs < 10){ dursecs = "0"+dursecs; }
	    if(curmins < 10){ curmins = "0"+curmins; }
	    if(durmins < 10){ durmins = "0"+durmins; }
		curtimetext.innerHTML = curmins+":"+cursecs;
	    durtimetext.innerHTML = durmins+":"+dursecs;
	}


}
// window.addEventListener("load", audioApp);

function albumSwitch (album, tracks) {
	audioApp(tracks[album]);
	console.log(tracks, album);




}



