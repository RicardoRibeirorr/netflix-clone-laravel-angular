import {
  Component,
  OnInit
} from '@angular/core';
import {
  Router,
  ActivatedRoute
} from '@angular/router';
import {
  FormGroup,
  FormControl,
  Validators,
  FormBuilder
} from '@angular/forms';
import { UserService } from 'src/app/core/services/user.service';


@Component({
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent implements OnInit {

  formGroup!: FormGroup;
  submitted = false;
  returnUrl: string = "";
  loading = false;

  constructor(private router: Router, private route: ActivatedRoute, 
              private formBuilder: FormBuilder, private userService: UserService) {}

  get f() {
    return this.formGroup.controls;
  }

  onSubmit(): void {
    this.submitted = true;
    this.loading = true;

    // stop here if form is invalid
    if (this.formGroup.invalid) {
      this.loading = false;
      return;
    }

    this.userService.login(this.f['email'].value, this.f['password'].value)
      // .pipe(first())
      .subscribe(
        () => {
          this.router.navigate(['/browse']).then(() => {
            window.location.reload();
          });
        });
  }

  ngOnInit() {
    this.formGroup = this.formBuilder.group({
      email: ['', [Validators.required, Validators.email]],
      password: ['', [Validators.required, Validators.minLength(6)]]
    });

    // get return url from route parameters or default to '/'
    this.returnUrl = this.route.snapshot.queryParams['returnUrl'] || '/';
  }

}