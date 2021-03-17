# VideoTube
A YouTube clone PHP website. (without framework)

# Setup
| 7.3.21 | 5.7.31
|:---:|:---:|
<img src="reference/php_icon.png" width="64"/> | <img src="reference/mysql_icon.png" width="64"/>

#### Import database
```
// default_filepath: "VideoTube/reference/videotube.sql"
mysql -u [your_mysql_username] -p < [file_path]
```

#### Setting config
```
// default_config_path: "VideoTube/includes/config.php"
$con = new PDO("mysql:dbname=VideoTube;host=localhost", "root", "");
```

# Preview
  
![preview1](reference/preview/VideoTube-1.jpg)

![preview2](reference/preview/VideoTube-2.jpg)

![preview3](reference/preview/VideoTube-3.jpg)

![preview4](reference/preview/VideoTube-4.jpg)

![preview5](reference/preview/VideoTube-5.jpg)

![preview6](reference/preview/VideoTube-6.jpg)