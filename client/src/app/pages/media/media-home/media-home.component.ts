import { Component, OnInit } from '@angular/core';
import { MediaService } from './../../../core/services/media.service';
import { iMedia } from 'src/app/core/interfaces/iMedia.interface';
import { ModelController } from './../../../core/controllers/model.controller';

@Component({
  templateUrl: './media-home.component.html',
  styleUrls: ['./media-home.component.scss']
})
export class MediaHomeComponent implements OnInit {
  // Data request
  topData:iMedia|null=null;
  watchedData:Array<iMedia>|[]=[];
  latestData:Array<iMedia>|[]=[];
  hotData:Array<iMedia>|[]=[];
  similarData:Array<iMedia>|[]=[];

  // Control Variables
  topLoaded:boolean=false
  watchedLoaded:boolean=false
  latestLoaded:boolean=false
  hotLoaded:boolean=false
  similarLoaded:boolean=false
  
  constructor(private mediaService:MediaService, private modelController:ModelController) { }

  ngOnInit(): void {
    // Top show
    this.mediaService.httpShowTop().subscribe((i:any)=>{
      debugger
      if(i)this.topData = i;
      this.topLoaded=true;
    })

    // Watched
    this.mediaService.httpIndexWatched().subscribe((i:any)=>{
      if(i)this.watchedData = i.data;
      this.watchedLoaded=true;
    })

    // Latest
    this.mediaService.httpIndexLatest().subscribe((i:any)=>{
      if(i)this.latestData = i.data;
      this.latestLoaded=true;
    })

    // Hot
    this.mediaService.httpIndexHot().subscribe((i:any)=>{
      if(i)this.hotData = i.data;
      this.hotLoaded=true;
    })

    // Similar
    this.mediaService.httpIndexSimilar().subscribe((i:any)=>{
      if(i)this.similarData = i.data;
      this.similarLoaded=true;
    })
  }

  onHandleInfoTop(){
    if(this.topData)
     this.modelController.setModelItem(this.topData);
  }


}
