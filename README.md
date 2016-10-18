```
    __   ____  _        ___  ____   ___     ____  ____       ___ ___   ___   ___    __ __  _        ___ 
   /  ] /    || |      /  _]|    \ |   \   /    ||    \     |   |   | /   \ |   \  |  |  || |      /  _]
  /  / |  o  || |     /  [_ |  _  ||    \ |  o  ||  D  )    | _   _ ||     ||    \ |  |  || |     /  [_ 
 /  /  |     || |___ |    _]|  |  ||  D  ||     ||    /     |  \_/  ||  O  ||  D  ||  |  || |___ |    _]
/   \_ |  _  ||     ||   [_ |  |  ||     ||  _  ||    \     |   |   ||     ||     ||  :  ||     ||   [_ 
\     ||  |  ||     ||     ||  |  ||     ||  |  ||  .  \    |   |   ||     ||     ||     ||     ||     |
 \____||__|__||_____||_____||__|__||_____||__|__||__|\_|    |___|___| \___/ |_____| \__,_||_____||_____|
  Calendar layout for PyroCMS 3 CP Table Builder                                                                         

```
> Manage time or it will take over your life. Fight back with timely organized events/actions nicely presented in a Calendar format.

![Calendar](https://github.com/websemantics/calendar-module/raw/master/docs/calendar.gif "Calendar")

## Getting Started

This module demonstrates a Calendar view for the [TableBuilder](http://pyrocms.com/documentation/streams-platform/v1.1#ui/tables). It is work in progress so expect things to change radically.

To install,

1- Clone this repo inside your project at `app/addons/default/websemantics/calendar-module`,

```bash
git clone https://github.com/websemantics/calendar-module
```

2- Install the module

```bash
php artisan module:install websemantics.module.calendar-module
```

## Events Stream

The Events stream and its [entity classes](https://github.com/websemantics/builder-extension#stream-entities) were auto-generated by the [Builder](https://github.com/websemantics/builder-extension) extension.

The stream fields and migration files were created using the following artisan command,

```bash
php make:stream 'events:tc(title),title,start:t(anomaly.field_type.datetime),end:t(anomaly.field_type.datetime)' websemantics.module.todo
```

## License

[MIT license](http://opensource.org/licenses/mit-license.php)
Copyright (c) Web Semantics, Inc.