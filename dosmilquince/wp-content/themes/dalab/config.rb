# Require any additional compass plugins here.

http_path = "/"
css_dir = "assets/css/"
sass_dir = "assets/sass/"
images_dir = "assets/img/"
javascripts_dir = "assets/js/"
fonts_dir = "assets/fonts/"

relative_assets = true
line_comments = false
output_style = :compressed
preferred_syntax = :sass

sass_options = {:debug_info=>true} # by Fire.app
sourcemap = false # by Fire.app

fireapp_coffeescripts_dir = "assets/coffeescripts" # by Fire.app
fireapp_livescripts_dir = "assets/livescripts" # by Fire.app
fireapp_minifyjs_on_build = false # by Fire.app
fireapp_always_report_on_build = true # by Fire.app
fireapp_coffeescript_options = {:bare=>false} # by Fire.app
fireapp_livescript_options = {:bare=>false} # by Fire.app
