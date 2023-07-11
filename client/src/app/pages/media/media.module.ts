import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { MediaRoutingModule } from './media-routing.module';
import { MediaFavoriteComponent } from './media-favorite/media-favorite.component';
import { MediaSearchComponent } from './media-search/media-search.component';
import { MediaLatestComponent } from './media-latest/media-latest.component';
import { MediaHomeComponent } from './media-home/media-home.component';
import { SharedModule } from 'src/app/components/shared.module';
import { ScrollTrackerDirective } from 'src/app/core/directives/scroll-tracker.directive';


@NgModule({
  declarations: [
    MediaFavoriteComponent,
    MediaSearchComponent,
    MediaLatestComponent,
    MediaHomeComponent,
    ScrollTrackerDirective
  ],
  imports: [
    SharedModule,
    CommonModule,
    MediaRoutingModule
  ]
})
export class MediaModule { }
