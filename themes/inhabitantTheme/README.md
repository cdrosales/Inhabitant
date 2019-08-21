## Inhabitant Website

A camping website where the theme is made from scratch via wordpress, that showcases camping products, blogs and latest adventures from the admin.

##Technology Used

1. PHP 
2. JQuery
3. Sass
4. Css
5. HTML
5. Yarn
6. Gulp
7. Wordpress
8. MAMP

## Prerequisites

1. Gulp 
2. MAMP
3. Wordpress.org Account

## Installation

1. Download wordpress files and place them in the folder you will be creating in htdocs
https://wordpress.org/download/

2. MAMP/htdocs/ -- create a new folder for theme

3. Start MAMP - PHP my admin and create a database (utf8_general_ci)

4. Link database with wordpress via wp-config-sample.php
change database name, username and pass to 'root'

5. Change wp-config-sample.php to wp-config.php

6. Navigate to your website via MAMP

7. Create a stylesheet header (written in the comments, the names and description of the theme will appear on wordpress)


Command Line

1. navigate to the Inhabitant theme directory

2. -- yarn install.

3. Run Gulp 


##Takeaways 

1. Understand the layout first -- similar buttons, styles, layouts, headings, etc. Organization is key and use consistent class names instead of multiple classes with the same style/layout. 

Ex. There is a white button with a green hover style that is shown on multiple pages-- create one style for one white button and call it on the other pages, if it needs to be tweaked, create a div around it.

2. Use sections with unique class names would be easier.Also helps with th total grid layout.

3. Create better consistent class names -- this will help with the reusuable classes.

4. Creating your own check list per page(ex. Need to add, need to fix, etc.)

5. Understand the Wordpress Hierarchy

6. Query Monitor plugin helps a lot with knowing exactly what php file you are working on.

7. Sass folder structure (7-1 for bigger projects), helps with keeping everything organized.

8. Google is key for knowing wordpress functions.


## Author

Cara Denise Rosales

## License

This is free and unencumbered software released into the public domain.

Anyone is free to copy, modify, publish, use, compile, sell, or
distribute this software, either in source code form or as a compiled
binary, for any purpose, commercial or non-commercial, and by any
means.

In jurisdictions that recognize copyright laws, the author or authors
of this software dedicate any and all copyright interest in the
software to the public domain. We make this dedication for the benefit
of the public at large and to the detriment of our heirs and
successors. We intend this dedication to be an overt act of
relinquishment in perpetuity of all present and future rights to this
software under copyright law.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM, DAMAGES OR
OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.

For more information, please refer to <http://unlicense.org>