
import { Component, OnInit } from '@angular/core';
import { iMedia } from 'src/app/core/interfaces/iMedia.interface';
import { MediaService } from 'src/app/core/services/media.service';


@Component({
  templateUrl: './media-latest.component.html',
  styleUrls: ['./media-latest.component.scss']
})
export class MediaLatestComponent implements OnInit {
  // Data request
  latestData:Array<iMedia>|[]=[];
  mediaRequest:any;

  // Control Variables
  latestLoaded:boolean=false;
  moreLatestLoaded:boolean=true;
  
  constructor(private mediaService:MediaService) { }

  ngOnInit(): void {
    // latest
    this.mediaService.httpIndexLatest().subscribe((i:any)=>{
      if(i){
        this.mediaRequest = i;
        this.latestData = i.data;
      }
      this.latestLoaded=true;
    })
  }


  onScrollingFinished(){
    if(this.moreLatestLoaded && this.mediaRequest && this.mediaRequest.next_page_url){
      this.moreLatestLoaded = false;
      this.mediaService.httpIndexPaginate(this.mediaRequest.next_page_url).subscribe((i:any)=>{
        this.mediaRequest = i;
        this.latestData = this.latestData.concat(i.data);
        this.moreLatestLoaded = true;
      });
    }
  }
}