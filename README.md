# cw-base-theme
WordPress Base theme using Tailwind.css

Instructions for Developing a website using our base theme for WordPress

1. Download and install Local for WordPress local development: https://localwp.com/
2. Create new install named after the project we are working on.
Website Name: **Name Here **
Theme Folder Name: ** Name Here **
3. Remove ‘Just Another WordPress Site’ from Settings > General in Dashboard
4. Make sure the site is Named Properly in the Title of Settings > General
5. Obtain base theme from Github (You have this here already)
6. Rename ‘cw-base-theme’ folder to Theme Folder Name above
7. Create screenshot.png from logo and replace current file in theme directory
8. Open style.css and rename to project name where applicable
9. Open Tailwind.css and apply colors from design comp starting on line #20. Use only color1, color2, color3, Not more than that. (Only primary colors. Should only need to add between 1 and 3 colors)
10. Obtain fonts from Jason (Either files or Header links)
11. Add font names in Tailwind.css on line #4
12. If fonts are called in CSS go to assets/whitelist/typography.css and set font paths
13. Open webpack.config.js and set local development URL on line #142
14. Open console and navigate to theme root. Install dependencies. (‘npm install’)
15. Start start in Local (Click ‘start’ upper right corner)
16. Start WP admin
17. Add new user: username: completeweb email: jason@mycompleteweb.net (Admin level, no password set)
18. Add new user: developer password: nV6kFjqm59vZ (Your Team can use this login)
19. Add Needed WordPress pages from sitemap
20. Create Homepage page and set this page as the static landing page under Settings > Reading
21. Create Main Menu for site in WordPress admin in Appearance > Menus, assign to Main Menu at bottom
22. Install the following plugins: 
23. Safe SVG (This must be installed to be able to upload and sanitize SVGs)
24. Editor Full Width Gutenberg
25. Auto Hide Admin Bar
26. FancyBox for WordPress
27. Imsanity
28. Ultimate Addons for Gutenberg
29. Yoast SEO
30. Quform for contact forms. Download here -> https://www.dropbox.com/s/4k6wedy4pgx9efj/quform.zip?dl=0
31. Add SVG Logo in Appearance > Customize > Site Identity
32. Add Favicon in Appearance > Customize > Site Identity ( Create Favicon based on Graphic in logo 250px x 250px named favicon.png) 
33. Start the local NPM host in console: ‘npm run start’
34. Build out Header based on design in file components/component-header.php
35. Build out Footer based on design in file components/component-footer.php
36. Build out rest of homepage design using the default WordPress page builder and the add-on Ultimate Addons for Gutenberg. Try to build out the page without using any custom css. Use Tailwind.css classes if needed. 
37. From here we will need to publish to the hosting either with WP-Engine or Flywheel. Message for instructions.


NOTES:

1. Do not use PNG for design elements. SVG for all design elements
2. Do not upload images as an SVG. Images MUST be PNG or JPG
3. Do not write CSS in the theme style.css file. Please use the whitelist/custom.css and other stylesheets that have to do with the section you are editing
4. Do not use !important
5. Do not enter text in CAPS. Use CSS to uppercase please
6. Do not use floats. Please use flexbox
7. Do not write css specific to a WordPress page body class. Example: .page-id-234 
8. Do not add scripts references in header.php use functions.php

Instructions for Pushing Local to Live


1. Git repo provided by Jason
2. Push theme directory only to Git
3.DONE Download WP-Migrate Pro + Migrate Pro Media Files (2 plugins) here: https://www.dropbox.com/sh/i1uk1p8yfgjkwwe/AADl0sSboRrfmzjoi5BmTNPoa?dl=0
4.DONE Install the 2 plugins to local
5.DONE Add license code: 30866256-ce6f-4994-b23c-1b6ce48533f6
6.DONE Enable PUSH in settings
7. Production push address -> https://maritimepools.wpengine.com lqRy6zyqHTFz40MTD8GgeMUtCCvF24n18qDZ8hVm
8. Add address and then check off “Media Files” under PUSH migrate
9. Save the PUSH and label it for future use
10. Push database
11. Upload Theme Files, Plugins, and Uploads to:

SFTP:
maritimepools.sftp.wpengine.com
maritimepools-developer
nV6kFjqm59vZ
port: 2222

WP-Admin:
Username: developer
PW: nV6kFjqm59vZ


Push all theme changes to GIT

Don't be afraid to ask questions to Jason (jason@mycompleteweb.net)

