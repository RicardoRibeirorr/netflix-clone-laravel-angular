import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { MediaLatestComponent } from './media-latest/media-latest.component';
import { MediaSearchComponent } from './media-search/media-search.component';
import { MediaFavoriteComponent } from './media-favorite/media-favorite.component';
import { MediaHomeComponent } from './media-home/media-home.component';
import { AuthGuard } from 'src/app/core/guards/auth.guard';

const routes: Routes = [
  { path: '', component:MediaHomeComponent, pathMatch: 'full', canActivate: [AuthGuard]},// canActivate: [AuthGuard]
  { path: 'latest', component: MediaLatestComponent, canActivate: [AuthGuard]},
  { path: 'favorite', component: MediaFavoriteComponent, canActivate: [AuthGuard]},
  { path: 'search', component: MediaSearchComponent, canActivate: [AuthGuard]},
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class MediaRoutingModule { }
