; <?php die(); ?>

[php]
filter = "a:1:{s:11:\"anchor_type\";s:3:\"php\";}"
flags = "a:2:{s:9:\"sensitive\";b:0;s:4:\"last\";b:1;}"
action = "a:1:{s:3:\"run\";a:1:{s:14:\"requestManager\";s:9:\"loadPorts\";}}"

[default_images]
filter = "a:1:{s:11:\"anchor_type\";a:1:{s:6:\"%match\";s:22:\"^(png|jpe?g|gif|tiff)$\";}}"
flags = "a:1:{s:4:\"last\";b:1;}"
action = "a:1:{s:3:\"run\";a:1:{s:3:\"mod\";s:13:\"requestImages\";}}"
