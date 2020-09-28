# Wage Calculator

For CIT4034 Lab Exercise - Class Exercise: Forms, POST, Double-Scripting


## Instructions
```
docker build -t wage-calculator .
docker run -d -p 8080:80 --name wage-calculator -v "$PWD":/var/www/html php:7.2-apache //mac
docker run -d -p 8080:80 --name wage-calculator -v "%cd%":/var/www/html php:7.2-apache //windows
```

<p align="center">
    <img src="https://user-images.githubusercontent.com/9423525/94387818-44804800-0119-11eb-8c8e-a06f65316789.png" /> 
</p>