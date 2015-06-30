Based on https://github.com/cboettig/labnotebook

## Install
```bash
git clone git@github.com:wurmlab/wurmlab.github.io.git
cd wurmlab.github.io.git
gem install jekyll bundler
bundle update
bundle install
jekyll serve -w
```

## How this works

* Edit your files in place (eg. index.html, team.html) or write a new post.
   Use `rake newpost[post-name]` to create a new post in the _posts folder with the name "post-name".

* run `rake translit` to transliterate any weird chars. (no longer necessary becasue we change the locale)

*  `rake build` creates the site in _site. 



