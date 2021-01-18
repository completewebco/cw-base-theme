# cw-base-theme
WordPress Base theme using Tailwind.css

Instructions for Developing a website using our base theme for WordPress


1. Download and install Local for WordPress local development: https://localwp.com/
2. Create new install named after the project we are working on.
Website Name: Dynamic Psychotherapy
Theme Folder Name: dynamic-psychotherapy
3. Remove ‘Just Another WordPress Site’ from Settings > General in Dashboard
4. Make sure the site is Named Properly in the Title of Settings > General
5. Obtain base theme from Github (You have this here already)
6. Rename ‘cw-base-theme’ folder to Theme Folder Name above
7. Create screenshot.png from logo and replace current file in theme directory
8. Open style.css and rename to project name where applicable
9. Open Tailwind.css and apply colors from design comp starting on line #20
10. Obtain fonts from Jason (Either files or Header links)
11. Add font names in Tailwind.css on line #4
12. If fonts are called in CSS go to assets/whitelist/typography.css and set font paths
13. Open webpack.config.js and set local development URL on line #142
14. Open console and navigate to theme root. Install dependencies. (‘npm install’)
15. Start start in Local (Click ‘start’ upper right corner)
16. Start WP admin
17. Add new user: username: completeweb email: jason@mycompleteweb.net (Admin level, no password set)
18. Add Needed WordPress pages from sitemap
19. Create Homepage page and set this page as the static landing page under Settings > Reading
20. Create Main Menu for site in WordPress admin in Appearance > Menus, assign to Main Menu at bottom
21. Add SVG Logo in Appearance > Customize > Site Identity
22. Add Favicon in Appearance > Customize > Site Identity ( Create Favicon based on Graphic in logo 250px x 250px named favicon.png) 
23. Install the following plugins: 
24. Editor Full Width Gutenberg
25. Auto Hide Admin Bar
26. FancyBox for WordPress
27. Imsanity
28. Ultimate Addons for Gutenberg
29. Yoast SEO


30. Start the local NPM host in console: ‘npm run start’
31. Build out Header based on design in file components/component-header.php
32. Build out Footer based on design in file components/component-footer.php
33. Build out rest of homepage design using the default WordPress page builder and the add-on Ultimate Addons for Gutenberg. Try to build out the page without using any custom css. Use Tailwind.css classes if needed. 
34. From here we will need to publish to the hosting either with WP-Engine or Flywheel. Message for instructions.


NOTES:


1. Do not use PNG for design elements. SVG for all design elements
2. Do not create new custom use classes in Tailwind.js other than what is already there. Use custom.css for cusotm css and make sure to try to stick to the classes available.



Instructions for Pushing Local to Live


1. Git repo provided  by Jason
2. Push theme directory only to Git
3. Download WP-Migrate Pro + Migrate Pro Media Files (2 plugins) here: https://www.dropbox.com/sh/i1uk1p8yfgjkwwe/AADl0sSboRrfmzjoi5BmTNPoa?dl=0
4. Install the 2 plugins to local
5. Add license code: 30866256-ce6f-4994-b23c-1b6ce48533f6
6. Enable PUSH in settings
7. Obtain Production push address from Jason 
8. Add address and then check off “Media Files” under PUSH migrate
9. Save the PUSH and label it for future use
10. Push database and files.


Moving forward any changes made to DB can be easily pushed to production
Any changes to theme files can be added to Git Repository
