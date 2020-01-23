# elliott.school

The class website for elliott.school.

## Running this website

Use MAMP to run an Apache server on a local port. Create a .htaccess file with the following rewrite to cover .php file endings.

```
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^([^\.]+)$ $1.php [NC,L]
```