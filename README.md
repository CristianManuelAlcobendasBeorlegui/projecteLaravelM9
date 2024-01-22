# M.09 - UF2 - Projecte

## Membres de l'equip
- Cristian Manuel Alcobendas Beorlegui
- Yassine El Bakali

## Descripció
Els usuaris que s'hi trobin connectats podrán veure els destins que tenen per les seves vacances.

## Instal·lació

### 1r pas: Instal·la composer
```
sudo apt install composer -y
```

### 2n Pas: Clonar el repositori
```
git clone https://github.com/CristianManuelAlcobendasBeorlegui/projecteLaravelM9
```

### 3r pas: Instal·lar extensions XML i CURL de PHP
```
sudo apt install php-xml -y
sudo apt install php-curl -y
```

### 4t pas: Instal·lar les dependències del projecte
```
composer update
```

### 5è pas: Crear una còpia del fitxer .env.example
```
cp .env.example .env
```

### 6è pas: Canviar variables d'entorn .env i deixar-les amb els següents valors:
```
DB_HOST=mysql
DB_USERNAME=sail
DB_PASSWORD=password
```

### 7è pas: Afegeix al teu usuari al grup DOCKER
```
sudo usermod -aG docker $USER
sudo reboot
```

### 8è pas: Iniciar els contenidors
```
./vendor/bin/sail up -d
```

### 9è pas: Instal·la i executa NPM
```
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```

### 10è pas: En un altre consola executa les migracions i els seeders
```
./vendor/bin/sail artisan migrate:refresh --seed
```

### 11è pas: Registrarse
**URL:** [http://localhost/register](http://localhost/register)

### 12è pas: Veure les destinacions possibles
**URL:** [http://localhost/destinacions](http://localhost/destinacions)
