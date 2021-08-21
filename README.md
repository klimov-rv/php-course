# php-course
Забыть раз и навсегда про vim и другие зубодробительные редакторы коммит-сообщений:

`$ git config core.editor notepad`

Настройки xdebug для OpenServer php.ini из видео 
```
zend_extension = "%sprogdir%/modules/php/%phpdriver%/ext/php_xdebug.dll"
xdebug.default_enable = 1
xdebug.profiler_enable_trigger = 1
xdebug.remote_enable = 1
xdebug.remote_port = 9000

xdebug.overload_var_dump = 1
```