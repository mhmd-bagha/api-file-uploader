#a api uploader file

## first use composer with install dependency

## then get the api with the command

```
composer require api-file-uploader/api-file-uploader
```

## after receiving the api, Create new object class Uploader
```
$uploader = new Uploader();
```

## then call the uploader method and give the arguments
```
$uploader->uploader($file_name, $file_type, $file_name_posted);
```
