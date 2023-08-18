# Task description for this Code Review: 

As a Full Stack Web Developer you got your first full-stack project, the Big Library web application. The customer wants you to create a big list of all media available in the library (books, CDs, DVDs) and make it available over the web.

The information that you will need to have in your DataBase is:

- title, image (HTTP link to an image* or file name only), ISBN code, short_description, type (book, CD, DVD), author_ first_name, author_last_name, publisher_ name, publisher_address, publish_date.

Feel free to choose if you would like to use:

- file uploader as in prework
- image name only and the images are already all available in a folder. You only need to make the reference in the DB.
- link from the internet as https://cdn.pixabay.com/photo/2016/09/10/17/18/book-1659717_1280.jpg

## For this CodeReview, the following criteria will be graded:

- Create a database and name it: BE19_CR4_YourName_BigLibrary. **Only one table is required for this CodeReview! **
- Add test data: at least 10 entries
- Display List of Media: Fetch the media data from your database and display it on the browser.
- User-Friendly GUI: Create web-pages with a nice design using the Bootstrap framework or just HTML/CSS/JavaScript.
- Create form for Media. A user should be able to insert data into the database over the front-end form.
- Update form for Media: Create a form for updating the information from the Media that will be triggered by an Edit button.
- Delete Media: A user should be able to delete Media from the database by clicking on the Delete button.
- You should create a button - "Show details", that will be displayed together with every Media shown on the list. Once that button is clicked, all details regarding that specific Media (title, author, ISBN, short_description, and status (available or reserved) will be displayed on a new web page. In order to do that, a new file: details.php must be used.
- Create a new file and name it publisher.php. When clicking on the Publisher's name on the index.html it should link the user to publisher.php and bring all Media published by that specific publisher only.

