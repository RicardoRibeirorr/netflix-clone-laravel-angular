import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AuthGuard } from 'src/app/core/guards/auth.guard';
import { GuestGuard } from 'src/app/core/guards/guest.guard';
import { PlayerComponent } from './player/player.component';

const routes: Routes = [
  { path: 'watch', component:PlayerComponent}, // canActivate: [GuestGuard]
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class ApplicationRoutingModule { }
