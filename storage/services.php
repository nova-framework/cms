<?php

return array (
  'providers' => 
  array (
    0 => 'Nova\\Auth\\AuthServiceProvider',
    1 => 'Nova\\Cache\\CacheServiceProvider',
    2 => 'Nova\\Routing\\RoutingServiceProvider',
    3 => 'Nova\\Cookie\\CookieServiceProvider',
    4 => 'Nova\\Module\\ModuleServiceProvider',
    5 => 'Nova\\Database\\DatabaseServiceProvider',
    6 => 'Nova\\Encryption\\EncryptionServiceProvider',
    7 => 'Nova\\Filesystem\\FilesystemServiceProvider',
    8 => 'Nova\\Hashing\\HashServiceProvider',
    9 => 'Nova\\Log\\LogServiceProvider',
    10 => 'Nova\\Mail\\MailServiceProvider',
    11 => 'Nova\\Pagination\\PaginationServiceProvider',
    12 => 'Nova\\Redis\\RedisServiceProvider',
    13 => 'Nova\\Auth\\Reminders\\ReminderServiceProvider',
    14 => 'Nova\\Session\\SessionServiceProvider',
    15 => 'Nova\\Language\\LanguageServiceProvider',
    16 => 'Nova\\Validation\\ValidationServiceProvider',
    17 => 'Nova\\Html\\HtmlServiceProvider',
    18 => 'Nova\\View\\ViewServiceProvider',
    19 => 'Nova\\Cron\\CronServiceProvider',
    20 => 'Nova\\Auth\\Reminders\\ConsoleServiceProvider',
    21 => 'Nova\\Cache\\ConsoleServiceProvider',
    22 => 'Nova\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    23 => 'Nova\\Foundation\\Providers\\ForgeServiceProvider',
    24 => 'Nova\\Module\\Providers\\ConsoleServiceProvider',
    25 => 'Nova\\Module\\Providers\\GeneratorServiceProvider',
    26 => 'Nova\\Routing\\Providers\\ConsoleServiceProvider',
    27 => 'App\\Providers\\AppServiceProvider',
    28 => 'App\\Providers\\EventServiceProvider',
    29 => 'App\\Providers\\RouteServiceProvider',
  ),
  'eager' => 
  array (
    0 => 'Nova\\Routing\\RoutingServiceProvider',
    1 => 'Nova\\Cookie\\CookieServiceProvider',
    2 => 'Nova\\Module\\ModuleServiceProvider',
    3 => 'Nova\\Database\\DatabaseServiceProvider',
    4 => 'Nova\\Encryption\\EncryptionServiceProvider',
    5 => 'Nova\\Filesystem\\FilesystemServiceProvider',
    6 => 'Nova\\Session\\SessionServiceProvider',
    7 => 'App\\Providers\\AppServiceProvider',
    8 => 'App\\Providers\\EventServiceProvider',
    9 => 'App\\Providers\\RouteServiceProvider',
  ),
  'deferred' => 
  array (
    'auth' => 'Nova\\Auth\\AuthServiceProvider',
    'cache' => 'Nova\\Cache\\CacheServiceProvider',
    'cache.store' => 'Nova\\Cache\\CacheServiceProvider',
    'memcached.connector' => 'Nova\\Cache\\CacheServiceProvider',
    'hash' => 'Nova\\Hashing\\HashServiceProvider',
    'log' => 'Nova\\Log\\LogServiceProvider',
    'Psr\\Log\\LoggerInterface' => 'Nova\\Log\\LogServiceProvider',
    'mailer' => 'Nova\\Mail\\MailServiceProvider',
    'swift.mailer' => 'Nova\\Mail\\MailServiceProvider',
    'swift.transport' => 'Nova\\Mail\\MailServiceProvider',
    'paginator' => 'Nova\\Pagination\\PaginationServiceProvider',
    'redis' => 'Nova\\Redis\\RedisServiceProvider',
    'auth.reminder' => 'Nova\\Auth\\Reminders\\ReminderServiceProvider',
    'auth.reminder.repository' => 'Nova\\Auth\\Reminders\\ReminderServiceProvider',
    'language' => 'Nova\\Language\\LanguageServiceProvider',
    'validator' => 'Nova\\Validation\\ValidationServiceProvider',
    'html' => 'Nova\\Html\\HtmlServiceProvider',
    'form' => 'Nova\\Html\\HtmlServiceProvider',
    'view' => 'Nova\\View\\ViewServiceProvider',
    'view.finder' => 'Nova\\View\\ViewServiceProvider',
    'view.engine.resolver' => 'Nova\\View\\ViewServiceProvider',
    'template' => 'Nova\\View\\ViewServiceProvider',
    'template.compiler' => 'Nova\\View\\ViewServiceProvider',
    'cron' => 'Nova\\Cron\\CronServiceProvider',
    'command.auth.reminders.clear' => 'Nova\\Auth\\Reminders\\ConsoleServiceProvider',
    'command.cache.clear' => 'Nova\\Cache\\ConsoleServiceProvider',
    'composer' => 'Nova\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'forge' => 'Nova\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.console.make' => 'Nova\\Foundation\\Providers\\ForgeServiceProvider',
    'command.down' => 'Nova\\Foundation\\Providers\\ForgeServiceProvider',
    'command.environment' => 'Nova\\Foundation\\Providers\\ForgeServiceProvider',
    'command.key.generate' => 'Nova\\Foundation\\Providers\\ForgeServiceProvider',
    'command.model.make' => 'Nova\\Foundation\\Providers\\ForgeServiceProvider',
    'command.optimize' => 'Nova\\Foundation\\Providers\\ForgeServiceProvider',
    'command.provider.make' => 'Nova\\Foundation\\Providers\\ForgeServiceProvider',
    'command.route.list' => 'Nova\\Foundation\\Providers\\ForgeServiceProvider',
    'command.serve' => 'Nova\\Foundation\\Providers\\ForgeServiceProvider',
    'command.up' => 'Nova\\Foundation\\Providers\\ForgeServiceProvider',
    'command.view.clear' => 'Nova\\Foundation\\Providers\\ForgeServiceProvider',
    'command.controller.make' => 'Nova\\Routing\\Providers\\ConsoleServiceProvider',
  ),
  'when' => 
  array (
    'Nova\\Auth\\AuthServiceProvider' => 
    array (
    ),
    'Nova\\Cache\\CacheServiceProvider' => 
    array (
    ),
    'Nova\\Hashing\\HashServiceProvider' => 
    array (
    ),
    'Nova\\Log\\LogServiceProvider' => 
    array (
    ),
    'Nova\\Mail\\MailServiceProvider' => 
    array (
    ),
    'Nova\\Pagination\\PaginationServiceProvider' => 
    array (
    ),
    'Nova\\Redis\\RedisServiceProvider' => 
    array (
    ),
    'Nova\\Auth\\Reminders\\ReminderServiceProvider' => 
    array (
    ),
    'Nova\\Language\\LanguageServiceProvider' => 
    array (
    ),
    'Nova\\Validation\\ValidationServiceProvider' => 
    array (
    ),
    'Nova\\Html\\HtmlServiceProvider' => 
    array (
    ),
    'Nova\\View\\ViewServiceProvider' => 
    array (
    ),
    'Nova\\Cron\\CronServiceProvider' => 
    array (
    ),
    'Nova\\Auth\\Reminders\\ConsoleServiceProvider' => 
    array (
    ),
    'Nova\\Cache\\ConsoleServiceProvider' => 
    array (
    ),
    'Nova\\Foundation\\Providers\\ConsoleSupportServiceProvider' => 
    array (
    ),
    'Nova\\Foundation\\Providers\\ForgeServiceProvider' => 
    array (
    ),
    'Nova\\Module\\Providers\\ConsoleServiceProvider' => 
    array (
    ),
    'Nova\\Module\\Providers\\GeneratorServiceProvider' => 
    array (
    ),
    'Nova\\Routing\\Providers\\ConsoleServiceProvider' => 
    array (
    ),
  ),
);
