# Tax Calculator

```
docker build -t tax-calculator .
docker run -d -p 8080:80 --name tax-calculator -v "$PWD":/var/www/html php:7.2-apache
```
