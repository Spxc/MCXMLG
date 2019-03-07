# MCXMLG
Google Merchant Center XML feed generator using php and mysql.

# SETUP YOUR MYSQL TABLE
Add the columns as shown below, if you dont already have a table with products.

![MySQL Table setup](http://instebo.one/projects/capi/7aA2DuKx5g8.png)

Once this have been, upload the index.php and "conf" folder to your website. Preferably in a folder called "feed".

After the setup have been completed, including changing the MySql connection data, you'll have to login into Google Merchant Center.

1. Login
2. Click on "Products"
3. Click on "Feeds"
4. Click the "blue button with a + icon in it"
5. Name the feed and select country
6. Click "Continue"
7. Select the "Scheduled fetch" option
8. Click "Continue"
9. Place the url to your feed folder under "File URL"
9.1. It will look something like this: http://www.domain.com/feed/
10. Choose upload schedule
11. Click "Continue"
12. Wait a couple of minutes and click "Fetch" under the correct feed

Everytime Merchant Center is doing a scheduled upload, the php (xml) file will give the current state of your products pulled from your MySql database.

The reason for this "lib" is simply that some users dosen't have access or knowledge on how to create ContentAPI feeds, using Google Developer. This is a simple and lightweight alternative.
