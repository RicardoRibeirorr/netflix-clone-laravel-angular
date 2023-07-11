import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { LoginComponent } from './login/login.component';
import { LogoutComponent } from './logout/logout.component';
import { GuestGuard } from 'src/app/core/guards/guest.guard';
import { AuthGuard } from 'src/app/core/guards/auth.guard';

const routes: Routes = [
  {path:'login', component:LoginComponent, canActivate: [GuestGuard]},
  {path:'logout', component:LogoutComponent},
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class AuthRoutingModule { }
