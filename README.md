# VideoTube
A PHP YouTube clone website.
https://www.udemy.com/course/youtube-clone/

# Setup
| 7.3.21 | 5.7.31
|:---:|:---:|
<img src="reference/php_icon.png" width="64"/> | <img src="reference/mysql_icon.png" width="64"/>

#### Step1 - import sql file
```
cd reference
mysql -u [your_db_username] -p < videotube.sql
```

#### Step2 - setup config file
```
cp includes/config-example.php config.php

# config.php (example)
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'videotube');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
```

# Preview
  
![preview1](reference/preview/VideoTube-1.jpg)

![preview2](reference/preview/VideoTube-2.jpg)

![preview3](reference/preview/VideoTube-3.jpg)

![preview4](reference/preview/VideoTube-4.jpg)

![preview5](reference/preview/VideoTube-5.jpg)

![preview6](reference/preview/VideoTube-6.jpg)
