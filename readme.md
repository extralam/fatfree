
**A powerful yet easy-to-use PHP micro-framework designed to help you build dynamic and robust Web applications - fast!**

Condensed in a single ~65KB file, F3 (as we fondly call it) gives you solid foundation, a mature code base, and a no-nonsense approach to writing Web applications. Under the hood is an easy-to-use Web development tool kit, a high-performance URL routing and cache engine, built-in code highlighting, and support for multilingual applications. It's lightweight, easy-to-use, and fast. Most of all, it doesn't get in your way.

Whether you're a novice or an expert PHP programmer, F3 will get you up and running in no time. No unnecessary and painstaking installation procedures. No complex configuration required. No convoluted directory structures. There's no better time to start developing Web applications the easy way than right now!

F3 supports both SQL and NoSQL databases off-the-shelf: MySQL, SQLite, MSSQL/Sybase, PostgreSQL, DB2, and MongoDB. It also comes with powerful object-relational mappers for data abstraction and modeling that are just as lightweight as the framework. No configuration needed.

That's not all. F3 is packaged with other optional plug-ins that extend its capabilities:-

* Fast and clean template engine,
* Unit testing toolkit,
* Database-managed sessions with automatic CSRF protection,
* Markdown-to-HTML converter,
* Atom/RSS feed reader,
* Image processor,
* Geodata handler,
* Google static maps,
* On-the-fly Javascript/CSS compressor,
* OpenID (consumer),
* Custom logger,
* Basket/Shopping cart,
* Pingback server/consumer,
* Unicode-aware string functions,
* SMTP over SSL/TLS,
* Tools for communicating with other servers,
* And more in a tiny supercharged package!

Unlike other frameworks, F3 aims to be usable - not usual.

The philosophy behind the framework and its approach to software architecture is towards minimalism in structural components, avoiding application complexity and striking a balance between code elegance, application performance and programmer productivity.

For Detail please check https://github.com/bcosca/fatfree

### Base Structure

- app 
-- configs 
-- controllers
-- dict
-- models
-- views
- conf/nginx (docker's things)
- docker (plz check richarvey/nginx-php-fpm:latest)
- lib (fatfree framework core)
- public_html (public folder /var/www)
- scripts (docker's things)
 

### Legal notice

By making a donation to this project you signify that you acknowledged, understood, accepted, and agreed to the terms and conditions contained in this notice. Your donation to the Fat-Free Framework project is voluntary and is not a fee for any services, goods, or advantages, and making a donation to the project does not entitle you to any services, goods, or advantages. We have the right to use the money you donate to the Fat-Free Framework project in any lawful way and for any lawful purpose we see fit and we are not obligated to disclose the way and purpose to any party unless required by applicable law. Although Fat-Free Framework is free software, to our best knowledge this project does not have any tax-exempt status. The Fat-Free Framework project is neither a registered non-profit corporation nor a registered charity in any country. Your donation may or may not be tax-deductible; please consult this with your tax advisor. We will not publish/disclose your name and e-mail address without your consent, unless required by applicable law. Your donation is non-refundable.

**Copyright (c) 2009-2014 F3::Factory/Bong Cosca &lt;bong&#46;cosca&#64;yahoo&#46;com&gt;**
