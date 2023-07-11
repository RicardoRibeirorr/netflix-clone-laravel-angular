import { Component, OnInit } from '@angular/core';
import { iMedia, iSeason, iVideo } from 'src/app/core/interfaces/iMedia.interface';
import { ModelController } from './../../../core/controllers/model.controller';
import { MediaService } from 'src/app/core/services/media.service';

declare var $:any;
@Component({
  selector: 'app-modal-media-show',
  templateUrl: './modal-media-show.component.html',
  styleUrls: ['./modal-media-show.component.scss']
})
export class ModalMediaShowComponent implements OnInit {
  // Data Variables
  item:iMedia|null=null;

  // Control Variables
  mediaLoaded:boolean = false;
  selectedSeason:number=0;
  selectedEpisode:number=0;

  constructor(private modelController:ModelController, private mediaService:MediaService) { }

  ngOnInit(): void {
      this.modelController.getActiveItem().subscribe((i:any)=>{
        this.item = i;
        if(!this.item) return;

        this.mediaLoaded = false;
        this.mediaService.httpShow(this.item.id).subscribe((b:any)=>{
          this.item = b;
          this.mediaLoaded = true;

          if(this.item && this.item.type === 'SERIE'){
            if(this.item.base_season_id) this.selectedSeason = this.item.base_season_id;
            if(this.item.base_episode_id) this.selectedEpisode = this.item.base_episode_id;
          }
        });

        this.changeModelStatus();
      });
  }

  changeModelStatus(){
    if(this.item){
      setTimeout(()=>{
        if(this.item)
        $('#modal-media-show-'+this.item.id).modal('show');
      },200);
    }
  }

  onHandleSeasonChange($event:any){
    debugger
    this.selectedSeason = $event.target.value;
  }

  getVideosSeason():Array<iVideo>|[]{
    if(!this.item || !this.item.seasons) return [];

    // Get season videos
    let season:any = this.item.seasons.find((i:iSeason)=>i.season == this.selectedSeason);
    if(!season || !season.videos) return [];
    let videos:Array<any>|undefined = season.videos;
    if(!videos || videos?.length<=0) return [];

    // Sort by episode
    return videos.sort((a:iVideo, b:iVideo) => {
      if(a && b && a.episode && b.episode) return (parseInt(String(a?.episode)) > parseInt(String(b?.episode))) ? 1 : -1;
      return -1;
    })
  }
}
