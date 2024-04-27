<h1 align="center"> PROJECT BACKEND LARAVEL: GAMELOBBY </h1>

<p align="center">
  <img src="./public/img/title_Readme.gif" alt="Demostración de funcionalidad">
</p>


## Table of Contents :file_folder:

1. [Description :classical_building:](#description-classical_building)
2. [Stack :gear:](#stack-gear)
3. [Project :open_book:](#Project-open_book)
4. [Authors :wave:](#author-wave)

---

## Description :classical_building:

Welcome to GameLobby, the ultimate hub for gamers to unite and play! 🎮 Dive into our dynamic social network tailored for gaming fans. Create custom gaming rooms linked to your favorite titles and spark conversations that evolve into epic multiplayer battles. Whether you're strategizing for the next raid or sharing tips for the latest release, GameLobby is your virtual playground for gaming greatness. Level up your social gaming experience today!

---

## Stack :gear:

<div align="center">
<img src= "https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white"/>
<img src= "https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
<img src= "https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white"/>
<img src= "https://img.shields.io/badge/Docker-2CA5E0?style=for-the-badge&logo=docker&logoColor=white"/>
<img src= "https://img.shields.io/badge/GIT-E44C30?style=for-the-badge&logo=git&logoColor=white"/>
</div>

---

## Project :open_book:


### 1 - Local Installation:

- Clone repository.
- Install all the dependencies on the project
```bash
  composer install
```
- Fill .env with data on .env.sample, specifically the variables related with DB.
- Open docker container and MySql Workbench that you have created for the project with the data given into .env
- Create and fill the tables
```bash
php artisan migrate --seed
```
- Launch the api for using the methods 
```bash
composer artisan serve
```

### 2 - Info to log

- Super_admin:

```json

  _id: 1,
  name: "",
  email: "",
  password: "admin1234",
  role: "super_admin"

```

### 2 - Enpoints:

1. Register and Login:

- Register:

```
localhost:8000/api/register
```

<image src="./public/img/register.png" alt="register">

- Login:

```
localhost:8000/api/login
```

<image src="./public/img/login.png" alt="login">


2. User:

- Get all users:

```
localhost:8000/api/users
```

<image src="./public/img/getallusers.png" alt="GetAllUsers">

- Get profile:

```
localhost:8000/api/users/profile
```

<image src="./public/img/getuserprofile.png" alt="GetProfile">

- Delete user :

<image src="" alt="">


3. Games:

- Get all games:

```
localhost:8000/api/games
```

<image src="./public/img/getallgames.png" alt="GetAllGames">

- Post game:

```
localhost:8000/api/games
```

<image src="./public/img/postgame.png" alt="PostGame">

- Put game:

```
localhost:8000/api/games/{id}
```

<image src="./public/img/putgame.png" alt="PutGame">

- Delete game:

```
localhost:8000/api/games/{id}
```

<image src="./public/img/deletegame.png" alt="DeleteGame">


4. Rooms:

- Get all rooms:

```
localhost:8000/api/rooms
```

<image src="./public/img/getallrooms.png" alt="GetAllRooms">

- Post room:

```
localhost:8000/api/rooms
```

<image src="./public/img/postroom.png" alt="PostRoom">

- Put room:

```
localhost:8000/api/rooms/{id}
```

<image src="./public/img/putroom.png" alt="">

- Delete room:

```
localhost:8000/api/rooms/{id}
```

<image src="./public/img/deleteroom.png" alt="DeleteRoom">


5. Messages:

- Get all messages: 

<image src="" alt="">

- Post message:

<image src="" alt="">

- Put message:

<image src="" alt="">

- Delete message:

<image src="" alt="">


6. User-Room:

- Get user-room:

<image src="" alt="">

- Post user-room:

<image src="" alt="">

- Delete user-room: 

<image src="" alt="">

---

## Authors :wave:

<p align="center">
  <img src="./public/img/team_Readme.gif" alt="Demostración de funcionalidad">
</p>

<div style="display: flex; justify-content: space-around;">
  <div style="display: flex; flex-direction: column; align-items: center">
    <img src="https://github.com/SergioTorresGarcia.png" width="60px;"/>
    <br>
    <a href="https://github.com/SergioTorresGarcia">Sergio Torres</a>
  </div>
  <div style="display: flex; flex-direction: column; align-items: center">
    <img src="https://github.com/MartaGBayona.png" width="60px;"/>
    <br>
    <a href="https://github.com/MartaGBayona">Marta Gimeno</a>
  </div>
  <div style="display: flex; flex-direction: column; align-items: center">
    <img src="https://github.com/CariblaGIT.png" width="60px;"/>
    <br>
    <a href="https://github.com/CariblaGIT">Carlos Ibañez</a>
  </div>
  <div style="display: flex; flex-direction: column; align-items: center">
    <img src="https://github.com/jluisferrer.png" width="60px;"/>
    <br>
    <a href="https://github.com/jluisferrer">Jose Ferrer</a>
  </div>
</div>

---

<div align="center">
<a href="#table-of-contents-file_folder">🔼 Back to top 🔼</a>
</div>