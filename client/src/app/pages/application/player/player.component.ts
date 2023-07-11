import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { iMedia, iVideo } from 'src/app/core/interfaces/iMedia.interface';
import { VideoService } from './../../../core/services/video.service';
import { Location } from '@angular/common';

@Component({
  templateUrl: './player.component.html',
  styleUrls: ['./player.component.scss']
})
export class PlayerComponent implements OnInit {
  videoData: iVideo | null = null;
  mediaData: iMedia | null = null;

  // Control variables
  showNavigationControls:boolean=false;
  timeNextEpisodeStarted:boolean=false;
  showErroVideo:boolean=false;

  // HtmlElements
  video: any;
  controlsTimeout: any;
  controlsContainer: any;
  videoContainer: any;
  playPauseButton: any;
  rewindButton: any;
  fastForwardButton: any;
  volumeButton: any;
  fullScreenButton: any;
  playButton: any;
  pauseButton: any;
  fullVolumeButton: any;
  mutedButton: any;
  maximizeButton: any;
  minimizeButton: any;

  constructor(private route: ActivatedRoute, private videoService: VideoService, private router:Router, private location: Location) {}

  ngOnInit(): void {
    this.initializeVariables();

    this.route.queryParams.subscribe(params => {
        console.log(params); // { orderby: "price" }
        const mediaId = params.media || null;
        const videoId = params.video || null;

        if (videoId){
          this.videoService.httpWatch(videoId).subscribe((i: iVideo | null) => {
            if (!i || !i.media) return;
            this.mediaData = i.media;
            if(this.mediaData){
              this.showNavigationControls = false;
              this.timeNextEpisodeStarted = false;
              this.videoData = i;
              this.displayControls();
              this.playPause()
              this.toggleFullScreen();
            } 
            else{
              this.showErroVideo = true;
              return;
            }
          })
        }else if(mediaId){
          this.videoService.httpWatchMedia(mediaId).subscribe((i: iVideo | null) => {
            if (!i || !i.media) return;
            this.mediaData = i.media;
            if(this.mediaData){
              this.showNavigationControls = false;
              this.timeNextEpisodeStarted = false;
              this.videoData = i;
              this.displayControls();
              this.playPause()
              this.toggleFullScreen();
            } 
            else{
              this.showErroVideo = true;
              return;
            }
          })
        }


      });
  }


  initializeVariables(){

    this.videoContainer = document.querySelector('.video-container');
    this.video = document.querySelector('.video-container video');

    this.controlsContainer = document.querySelector('.video-container .controls-container');

    this.playPauseButton = document.querySelector('.video-container .controls button.play-pause');
    this.rewindButton = document.querySelector('.video-container .controls button.rewind');
    this.fastForwardButton = document.querySelector('.video-container .controls button.fast-forward');
    this.volumeButton = document.querySelector('.video-container .controls button.volume');
    this.fullScreenButton = document.querySelector('.video-container .controls button.full-screen');
    this.playButton = this.playPauseButton.querySelector('.playing');
    this.pauseButton = this.playPauseButton.querySelector('.paused');
    this.fullVolumeButton = this.volumeButton.querySelector('.full-volume');
    this.mutedButton = this.volumeButton.querySelector('.muted');
    this.maximizeButton = this.fullScreenButton.querySelector('.maximize');
    this.minimizeButton = this.fullScreenButton.querySelector('.minimize');


    const progressBar: any = document.querySelector('.video-container .progress-controls .progress-bar');
    const watchedBar: any = document.querySelector('.video-container .progress-controls .progress-bar .watched-bar');
    const timeLeft: any = document.querySelector('.video-container .progress-controls .time-remaining');

    this.controlsContainer.style.opacity = '0';
    watchedBar.style.width = '0px';
    this.pauseButton.style.display = 'none';
    this.minimizeButton.style.display = 'none';

    document.addEventListener('fullscreenchange', () => {
      if (!document.fullscreenElement) {
        this.maximizeButton.style.display = '';
        this.minimizeButton.style.display = 'none';
      } else {
        this.maximizeButton.style.display = 'none';
        this.minimizeButton.style.display = '';
      }
    });

    document.addEventListener('keyup', (event) => {
      if (event.code === 'Space') {
        this.playPause();
      }

      if (event.code === 'KeyM') {
        this.toggleMute();
      }

      if (event.code === 'KeyF') {
        this.toggleFullScreen();
      }

      this.displayControls();
    });

    document.addEventListener('mousemove', () => {
      this.displayControls();
    });

    this.video.addEventListener('timeupdate', () => {
      watchedBar.style.width = ((this.video.currentTime / this.video.duration) * 100) + '%';
      // TODO: calculate hours as well...
      const totalSecondsRemaining = this.video.duration - this.video.currentTime;
      // THANK YOU: BEGANOVICH
      const time = new Date();
      time.setSeconds(totalSecondsRemaining);
      let hours = null;

      if (totalSecondsRemaining >= 3600) {
        hours = (time.getHours().toString()).padStart(2, '0');
      }
      if(totalSecondsRemaining <= 86 && !this.timeNextEpisodeStarted){
        this.timeToNextEpisode();
      }

      let minutes = (time.getMinutes().toString()).padStart(2, '0');
      let seconds = (time.getSeconds().toString()).padStart(2, '0');

      timeLeft.textContent = `${hours ? hours : '00'}:${minutes}:${seconds}`;
    });
  }

  onHandlerNavigateBack(): void {
    this.timeNextEpisodeStarted = false;
    this.router.navigateByUrl('/browse');
  }

  onHandleNextEpisode(){
    if(this.videoData)
      this.router.navigateByUrl("/watch?video="+this.videoData.next_episode_id).then(() => {
        window.location.reload();
      });
  }

  timeToNextEpisode(){
    if(!this.videoData) return;
    if(this.videoData.next_episode_id){
      this.showNavigationControls = true;
      this.timeNextEpisodeStarted = true;
      setTimeout(()=>{
        if(this.timeNextEpisodeStarted)
          this.onHandleNextEpisode();
      },6000);
    }else{
      //TODO: Show more options OF MEDIA
    }
  }
  

  onHandlerProgressBar(event: any){
    const pos = (event.pageX - (event.target.offsetLeft + event.target.offsetParent.offsetLeft)) / event.target.offsetWidth;
    this.video.currentTime = pos * this.video.duration;
  }

  rewind():void{
    this.video.currentTime -= 10;
  }
  forward():void{
    this.video.currentTime += 10;
  }

  displayControls(): void {
    this.controlsContainer.style.opacity = '1';
    document.body.style.cursor = 'initial';
    if (this.controlsTimeout) {
      clearTimeout(this.controlsTimeout);
    }
    this.controlsTimeout = setTimeout(() => {
      this.controlsContainer.style.opacity = '0';
      document.body.style.cursor = 'none';
    }, 5000);
  }


  playPause(): void {
    if (this.video.paused) {
      this.video.play();
      this.playButton.style.display = 'none';
      this.pauseButton.style.display = '';
    } else {
      this.video.pause();
      this.playButton.style.display = '';
      this.pauseButton.style.display = 'none';
    }
  }


  toggleMute(): void {
    this.video.muted = !this.video.muted;
    if (this.video.muted) {
      this.fullVolumeButton.style.display = 'none';
      this.mutedButton.style.display = '';
    } else {
      this.fullVolumeButton.style.display = '';
      this.mutedButton.style.display = 'none';
    }
  }

  toggleFullScreen(): void {
    if (!document.fullscreenElement) {
      this.videoContainer.requestFullscreen();
    } else {
      document.exitFullscreen();
    }
  }
}
