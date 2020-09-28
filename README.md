# Wage Calculator

For CIT4034 Lab Exercise - Class Exercise: Forms, POST, Double-Scripting

```
docker build -t wage-calculator .
docker run -d -p 8080:80 --name wage-calculator -v "$PWD":/var/www/html php:7.2-apache //mac
docker run -d -p 8080:80 --name wage-calculator -v "%cd%":/var/www/html php:7.2-apache //windows
```
