<p align="center">
  <img alt="NetflixClone" title="NetflixClone" src="/__showcase/netflix_logo.png" width="400px" />
</p>

<h3 align = "center" fontSize="60px">
  Clone of the streaming platform <a href="https://www.netflix.com/">Netflix</a>. Fully functional frontend & backend, movies and series, video player, lazy-loading and scroll loading, and more...!
  This repository was created for learning purposes and you use it at your own risk. I am not responsible for any illegality.
</h3>

<p align="center">
  <img alt="application interface" src="/__showcase/home.png" width="100%">
</p>

## :rocket: Tecnologies

-  [Angular2](https://angular.io/)
-  [Laravel 8](https://laravel.com/docs/8.x/releases)
-  [FontAwesome Free](https://fontawesome.com/)
-  [Bootstrap](https://getbootstrap.com/)

## 💻 About

Recreate the complete Netflix platform. Laravel as backend API and Angular as client frontend. Code to extract episodes from web pages (animefire.net) is also available in the "scrapper" folder. Note: I am not responsible for any illegality, this repository is only for testing skills.
All data from catalogs like title, description, cover, background photo and rating were extracted using the [API TMDb](https://www.themoviedb.org/documentation/api).

### Funcionalities

- [x] **Authentication**: Login; Token, guards, middleware.

- [x] **Data Request**: Data return with lazy-loading, pagination with scroll and button. Includes: search, movies, series, latest, top, continue watching. "Favorites" is still in development.

- [x] **Player**: Includes all controls (i.e. back, pause, volume, +10sec, -10sec, next episode and fullscreen). Button of next episode and automatic episode passage after 6sec. Passage of episodes between seasons is included.

- [ ] **Dashboard**: Currently, all content will have to be added either through seeds or directly into the database.


## :muscle: Showcase
  <img alt="application interface" src="/__showcase/home.png" width="50%" style="min-width:500px">
  <img alt="application interface" src="/__showcase/home_menu.png" width="50%" style="min-width:500px">
  <img alt="application interface" src="/__showcase/player.png" width="50%" style="min-width:500px">
  <img alt="application interface" src="/__showcase/modal_media.png" width="50%" style="min-width:500px">
  <img alt="application interface" src="/__showcase/lazy_loading.png" width="50%" style="min-width:500px">
  <img alt="application interface" src="/__showcase/login.png" width="50%" style="min-width:500px">



## 📥 Installation and execution

Make a clone of this repository and access the directory.
For the development environment, you should have 2 prompt/vscode windows open, for each environment (backend & frontend)

#### Frontend
Access the "client" directory
```bash
cd client
```

Install packages
```bash
npm install
```

Serve the application
```bash
ng serve
```

Note: In case you running errors about the "hash" like i do, use the following command and then serve:
```bash
$env:NODE_OPTIONS="--openssl-legacy-provider"

ng serve
```


#### Backend
Acess the "server" directory
```bash
cd server
```


Rename the ".env.example" to ".env"
```bash
Rename:
.env.example    ->   .env
```


Install packages de composer
```bash
composer install
```

Generate app key & create storage link
```bash
php artisan key:generate

php artisan storage:link
```

Migrate the database & seed(base seeds added)
```bash
php artisan migrate:fresh --seed
```

Run backend
```bash
php artisan serve
```

## 📥 Test Startup
If you ran the seeds, there should be 1 user available and some series and movies. Have fun, Good hacking!
```bash
email:RicardoRibeiroRR@github.com
pass:password
```
Note: The password is "password". I'm very original when it comes to this xD



## :muscle: Contribute

`fork` and clone the project from your user.

```bash
# Cloning project
$ git clone https://github.com/YOUR-USERNAME/netflix-clone-laravel-angular.git

# Creating a branch
$ git branch my-change

# Accessing the new branch
$ git checkout -bmy-change

# Adding the changed files
$ git add .

# Creating commit and message
$ git commit -m "Correction...."

# Sending changes to the branch
$ git push origin my-change
```
You should navigate to your forked repository and click the *New pull request* button on the left side of the page.

## 📝 Licença
This project is licensed under the MIT license. See the [LICENSE](LICENSE.md) file for more details.
